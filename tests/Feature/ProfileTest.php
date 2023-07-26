<?php

namespace Tests\Feature;

use App\Models\Account;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProfileTest extends TestCase
{
    use RefreshDatabase;

    public function test_profile_page_is_displayed(): void
    {
        $account = Account::factory()->create();

        $response = $this
            ->actingAs($account)
            ->get('/profile');

        $response->assertOk();
    }

    public function test_profile_information_can_be_updated(): void
    {
        $account = Account::factory()->create();

        $response = $this
            ->actingAs($account)
            ->patch('/profile', [
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);

        $response
            ->assertSessionHasNoErrors()
            ->assertRedirect('/profile');

        $account->refresh();

        $this->assertSame('Test User', $account->name);
        $this->assertSame('test@example.com', $account->email);
        $this->assertNull($account->email_verified_at);
    }

    public function test_email_verification_status_is_unchanged_when_the_email_address_is_unchanged(): void
    {
        $account = Account::factory()->create();

        $response = $this
            ->actingAs($account)
            ->patch('/profile', [
                'name' => 'Test User',
                'email' => $account->email,
            ]);

        $response
            ->assertSessionHasNoErrors()
            ->assertRedirect('/profile');

        $this->assertNotNull($account->refresh()->email_verified_at);
    }

    public function test_user_can_delete_their_account(): void
    {
        $account = Account::factory()->create();

        $response = $this
            ->actingAs($account)
            ->delete('/profile', [
                'password' => 'password',
            ]);

        $response
            ->assertSessionHasNoErrors()
            ->assertRedirect('/');

        $this->assertGuest();
        $this->assertNull($account->fresh());
    }

    public function test_correct_password_must_be_provided_to_delete_account(): void
    {
        $account = Account::factory()->create();

        $response = $this
            ->actingAs($account)
            ->from('/profile')
            ->delete('/profile', [
                'password' => 'wrong-password',
            ]);

        $response
            ->assertSessionHasErrorsIn('userDeletion', 'password')
            ->assertRedirect('/profile');

        $this->assertNotNull($account->fresh());
    }
}
