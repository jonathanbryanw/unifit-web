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
            'name' => 'Jonathan',
            'email' => 'trainer13@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'John',
            'email' => 'trainer01@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 2
        ]);
        DB::table('users')->insert([
            'name' => 'Lucas',
            'email' => 'trainer02@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'Ben',
            'email' => 'trainer03@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'Jessica',
            'email' => 'trainer04@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'Hendrick',
            'email' => 'trainer05@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'Kim',
            'email' => 'trainer06@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'Hemsworth',
            'email' => 'trainer07@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 3
        ]);
        DB::table('users')->insert([
            'name' => 'Chris',
            'email' => 'trainer08@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 3
        ]);
        DB::table('users')->insert([
            'name' => 'Urs',
            'email' => 'trainer09@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 3
        ]);
        DB::table('users')->insert([
            'name' => 'Ramon',
            'email' => 'trainer10@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 3
        ]);
        DB::table('users')->insert([
            'name' => 'Ainsley',
            'email' => 'trainer11@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 3
        ]);
        DB::table('users')->insert([
            'name' => 'Ruff',
            'email' => 'trainer12@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 3
        ]);
        DB::table('users')->insert([
            'name' => 'Brian',
            'email' => 'trainer14@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 2
        ]);
        DB::table('users')->insert([
            'name' => 'Jeff',
            'email' => 'trainer15@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 2
        ]);
        DB::table('users')->insert([
            'name' => 'John',
            'email' => 'trainer16@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 2
        ]);
        DB::table('users')->insert([
            'name' => 'Luke',
            'email' => 'trainer17@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 2
        ]);
        DB::table('users')->insert([
            'name' => 'Jason',
            'email' => 'trainer18@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 2
        ]);
    }
}
