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
            'name' => 'Lean & Fit',
            'program_id' => 1,
            'description' => "A three-day-per-week full-body split program called 'Lean & Fit' mixes cardio, strength training workouts to increase calorie burn and encourage weight loss. The 'Lean & Fit' program in UniFit is a dynamic and successful exercise routine created to assist people in achieving their weight loss objectives while enhancing general fitness. Strength training, cardiovascular activities, and core exercises are all included in this program's mix of exercises that target the entire body. The 'Lean & Fit' program maximizes calorie burn, encourages fat loss, and speeds up metabolism by using compound exercises and HIIT methods. The 'Lean & Fit' program offers a thorough strategy to help you shape a slim body, improve your general fitness level, and leave you feeling inspired and energized, whether you're a novice or an experienced fitness enthusiast.",
            'image' => 'workout-01.png',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('workouts')->insert([
            'name' => 'Shred & Sculpt',
            'program_id' => 1,
            'description' => "Compound exercises, resistance training, and routines for specific muscle groups are the main components of the 'Shred & Sculpt' program, a four-day-per-week upper & lower split routine that will help you tone your body and burn off extra fat.",
            'image' => 'workout-02.png',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('workouts')->insert([
            'name' => 'Burn & Transform',
            'program_id' => 1,
            'description' => "The 'Burn & Transform' program is a 5-day, body-split routine that uses functional movements, circuit training, and high-intensity exercises to speed up fat loss and alter your figure",
            'image' => 'workout-03.png',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('workouts')->insert([
            'name' => 'Muscle Blitz',
            'program_id' => 3,
            'description' => "The 'Muscle Blitz' program is a three-day, full-body split routine that stresses heavy lifting, progressive overload, and compound movements to promote muscle growth and boost strength.",
            'image' => 'workout-04.png',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('workouts')->insert([
            'name' => 'Hypertrophy Boost',
            'program_id' => 3,
            'description' => "The 'Hypertrophy Boost' program is a 4-day-a-week upper & lower split program that emphasizes training methods that optimize muscle hypertrophy and improve muscle definition, such as drop sets, supersets, and isolation exercises.",
            'image' => 'workout-05.png',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('workouts')->insert([
            'name' => 'Strength & Size',
            'program_id' => 3,
            'description' => "The 'Strength & Size' program is a five-day-per-week body-splitting routine that combines strength training, muscle endurance exercises, and workouts specifically designed for certain muscle groups in order to encourage muscle growth, boost general strength, and enhance muscular endurance.",
            'image' => 'workout-06.png',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('workouts')->insert([
            'name' => 'Fit & Active',
            'program_id' => 2,
            'description' => "The 'Fit & Active' program is a full-body, three-day split that uses a balanced combination of cardio, strength training, and flexibility exercises to increase general fitness, increase endurance, and maintain a healthy weight.",
            'image' => 'workout-07.png',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('workouts')->insert([
            'name' => 'Functional Strength',
            'program_id' => 2,
            'description' => "A four-day-per-week upper-and-lower split program called 'Functional Strength' emphasizes functional movements, core stability drills, and balance training to increase overall strength, increase mobility, and support daily activities.",
            'image' => 'workout-08.png',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('workouts')->insert([
            'name' => 'Total Body Wellness',
            'program_id' => 2,
            'description' => "The 'Total Body Wellness' program is a five-day-per-week body-splitting routine that incorporates resistance training, cardio exercises, and yoga or Pilates sessions to improve general fitness, flexibility, and mental well-being.",
            'image' => 'workout-09.jpeg',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
    }
}
