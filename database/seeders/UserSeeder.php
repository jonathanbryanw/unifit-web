<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin1',
            'email' => 'admin1@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 1,
            'program_id' => 3
        ]);
        DB::table('users')->insert([
            'name' => 'Member1',
            'email' => 'member1@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 2,
            'program_id' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'Trainer1',
            'email' => 'trainer1@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 2
        ]);
    }
}
