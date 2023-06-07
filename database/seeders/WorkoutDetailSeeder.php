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
        $this->seedFirstWorkoutDetails();
    }

    private function seedFirstWorkoutDetails(){
        $workoutDetailsOne=[
            [
                'workout_id' => 1,
                'session' => 1,
                'title' => 'Warm-up: 5-10 minutes of light cardio (e.g., brisk walking or cycling).'
            ],
            [
                'workout_id' => 1,
                'session' => 1,
                'title' => 'Squats: 3 sets of 12 reps.'
            ],
            [
                'workout_id' => 1,
                'session' => 1,
                'title' => 'Push-ups: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 1,
                'session' => 1,
                'title' => 'Dumbbell Lunges: 3 sets of 12 reps (each leg).'
            ],
            [
                'workout_id' => 1,
                'session' => 1,
                'title' => 'Bent-Over Rows: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 1,
                'session' => 1,
                'title' => 'Plank: Hold for 30 seconds to 1 minute.'
            ],
            [
                'workout_id' => 1,
                'session' => 1,
                'title' => 'Bicycle Crunches: 3 sets of 15 reps (each side).'
            ],
            [
                'workout_id' => 1,
                'session' => 1,
                'title' => 'Cool-down: 5-10 minutes of stretching exercises.'
            ],
            [
                'workout_id' => 1,
                'session' => 2,
                'title' => 'Take a day off or do 20 to 30 minutes of gentle cardio like jogging, swimming, or cycling.'
            ],
            [
                'workout_id' => 1,
                'session' => 3,
                'title' => 'Warm-up: 5-10 minutes of light cardio.'
            ],
            [
                'workout_id' => 1,
                'session' => 3,
                'title' => 'Dumbbell Chest Press: 3 sets of 12 reps.'    
            ],
            [
            'workout_id' => 1,
            'session' => 3,
            'title' => 'Romanian Deadlifts: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 1,
                'session' => 3,
                'title' => 'Shoulder Press: 3 sets of 12 reps.'    
            ],
            [
                'workout_id' => 1,
                'session' => 3,
                'title' => 'Lat Pulldowns: 3 sets of 10 reps.'    
            ],
            [
                'workout_id' => 1,
                'session' => 3,
                'title' => 'Russian Twists: 3 sets of 15 reps (each side).'
            ],
            [
                'workout_id' => 1,
                'session' => 3,
                'title' => 'Mountain Climbers: 3 sets of 10 reps (each leg).'
            ],
            [
                'workout_id' => 1,
                'session' => 3,
                'title' => 'Cool-down: 5-10 minutes of stretching exercises.'
            ],
            [
                'workout_id' => 1,
                'session' => 4,
                'title' => 'Rest day or engage in light cardio activities like jogging, swimming, or cycling for 20-30 minutes.'
            ],
            [
                'workout_id' => 1,
                'session' => 5,
                'title' => 'Warm-up: 5-10 minutes of light cardio.'
            ],
            [
                'workout_id' => 1,
                'session' => 5,
                'title' => 'Goblet Squats: 3 sets of 12 reps.'
            ],
            [
                'workout_id' => 1,
                'session' => 5,
                'title' => 'Incline Push-ups: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 1,
                'session' => 5,
                'title' => 'Walking Lunges: 3 sets of 12 reps (each leg).'
            ],
            [
                'workout_id' => 1,
                'session' => 5,
                'title' => 'Seated Cable Rows: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 1,
                'session' => 5,
                'title' => 'Plank with Shoulder Taps: Hold for 30 seconds to 1 minute.'
            ],
            [
                'workout_id' => 1,
                'session' => 5,
                'title' => 'Leg Raises: 3 sets of 15 reps.'
            ],
            [
                'workout_id' => 1,
                'session' => 5,
                'title' => 'Cool-down: 5-10 minutes of stretching exercises.'
            ]
        ];

        foreach ($workoutDetailsOne as $detail) {
            DB::table('workoutdetails')->insert(array_merge($detail, [
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ]));
        }
    }
}
