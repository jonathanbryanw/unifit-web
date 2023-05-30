<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class WorkoutDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workoutdetails')->insert([
            'workout_id' => 1,
            'session' => 1,
            'title' => 'Warm-up: 5-10 minutes of light cardio (e.g., brisk walking or cycling).',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('workoutdetails')->insert([
            'workout_id' => 1,
            'session' => 1,
            'title' => 'Squats: 3 sets of 12 reps.',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('workoutdetails')->insert([
            'workout_id' => 1,
            'session' => 1,
            'title' => 'Push-ups: 3 sets of 10 reps.',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('workoutdetails')->insert([
            'workout_id' => 1,
            'session' => 1,
            'title' => 'Dumbbell Lunges: 3 sets of 12 reps (each leg).',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('workoutdetails')->insert([
            'workout_id' => 1,
            'session' => 1,
            'title' => 'Bent-Over Rows: 3 sets of 10 reps.',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('workoutdetails')->insert([
            'workout_id' => 1,
            'session' => 1,
            'title' => 'Plank: Hold for 30 seconds to 1 minute.',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('workoutdetails')->insert([
            'workout_id' => 1,
            'session' => 1,
            'title' => 'Bicycle Crunches: 3 sets of 15 reps (each side).',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('workoutdetails')->insert([
            'workout_id' => 1,
            'session' => 1,
            'title' => 'Cool-down: 5-10 minutes of stretching exercises.',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('workoutdetails')->insert([
            'workout_id' => 1,
            'session' => 2,
            'title' => 'Take a day off or do 20 to 30 minutes of gentle cardio like jogging, swimming, or cycling.',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('workoutdetails')->insert([
            'workout_id' => 1,
            'session' => 3,
            'title' => 'Warm-up: 5-10 minutes of light cardio.',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('workoutdetails')->insert([
            'workout_id' => 1,
            'session' => 3,
            'title' => 'Dumbbell Chest Press: 3 sets of 12 reps.',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('workoutdetails')->insert([
            'workout_id' => 1,
            'session' => 3,
            'title' => 'Romanian Deadlifts: 3 sets of 10 reps.',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
    }
}
