<?php

namespace Tests\Feature\Auth;

use App\Models\Account;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_screen_can_be_rendered(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_accounts_can_authenticate_using_the_login_screen(): void
    {
        $account = Account::factory()->create();

        $response = $this->post('/login', [
            'email' => $account->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    public function test_accounts_can_not_authenticate_with_invalid_password(): void
    {
        $account = Account::factory()->create();

        $this->post('/login', [
            'email' => $account->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    }
}
