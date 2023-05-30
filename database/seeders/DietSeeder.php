<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class DietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diets')->insert([
            'name' => 'Meal Prep Recipe',
            'program_id' => 1,
            'description' => 'Try including healthy options in your meal prep recipes, such as grilled chicken breast with roasted vegetables or a quinoa salad loaded with fresh vegetables and lean meats.',
            'user_id' => 3,
            'photo' => 'diet1.jpg',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
    }
}
