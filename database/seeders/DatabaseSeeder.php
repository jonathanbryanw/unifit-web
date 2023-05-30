<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ProgramSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            TrainerSeeder::class,
            WorkoutSeeder::class,
            WorkoutDetailSeeder::class,
            DietSeeder::class,
            WeightDetailSeeder::class,
            WorkoutProgressSeeder::class
        ]);
    }
}
