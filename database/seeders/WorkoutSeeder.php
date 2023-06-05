<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class WorkoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workouts')->insert([
            'name' => 'LEAN & FIT',
            'program_id' => 1,
            'description' => "The 'Lean & Fit' program in UniFit is a dynamic and successful exercise routine created to assist people in achieving their weight loss objectives while enhancing general fitness. Strength training, cardiovascular activities, and core exercises are all included in this program's mix of exercises that target the entire body. The 'Lean & Fit' program maximizes calorie burn, encourages fat loss, and speeds up metabolism by using compound exercises and HIIT methods. The 'Lean & Fit' program offers a thorough strategy to help you shape a slim body, improve your general fitness level, and leave you feeling inspired and energized, whether you're a novice or an experienced fitness enthusiast.",
            'image' => 'workout1.jpg',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
    }
}
