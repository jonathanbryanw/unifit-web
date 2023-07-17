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
                'title' => 'Gentle cardio or take a day off: 20 to 30 minutes of jogging, swimming, or cycling.'
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
                'title' => 'Gentle cardio or take a day off: 20 to 30 minutes of jogging, swimming, or cycling.'
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
            ],
            [
                'workout_id' => 2,
                'session' => 1,
                'title' => 'Warm-up: 5-10 minutes of light cardio (e.g., brisk walking or cycling).'
            ],
            [
                'workout_id' => 2,
                'session' => 1,
                'title' => 'Bench Press: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 2,
                'session' => 1,
                'title' => 'Pull-ups or Lat Pulldowns: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 2,
                'session' => 1,
                'title' => 'Shoulder Press: 3 sets of 12 reps.'
            ],
            [
                'workout_id' => 2,
                'session' => 1,
                'title' => 'Dumbbell Rows: 3 sets of 12 reps (each arm).'
            ],
            [
                'workout_id' => 2,
                'session' => 1,
                'title' => 'Tricep Dips: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 2,
                'session' => 1,
                'title' => 'Bicep Curls: 3 sets of 12 reps.'
            ],
            [
                'workout_id' => 2,
                'session' => 1,
                'title' => 'Plank: Hold for 30 seconds to 1 minute.'
            ],
            [
                'workout_id' => 2,
                'session' => 1,
                'title' => 'Cool-down: 5-10 minutes of stretching exercises.'
            ],
            [
                'workout_id' => 2,
                'session' => 2,
                'title' => 'Warm-up: 5-10 minutes of light cardio (e.g., brisk walking or cycling).'
            ],
            [
                'workout_id' => 2,
                'session' => 2,
                'title' => 'Squats: 3 sets of 12 reps.'
            ],
            [
                'workout_id' => 2,
                'session' => 2,
                'title' => 'Deadlifts: 3 sets of 10 reps.'    
            ],
            [
                'workout_id' => 2,
                'session' => 2,
                'title' => 'Lunges: 3 sets of 12 reps (each leg).'
            ],
            [
                'workout_id' => 2,
                'session' => 2,
                'title' => 'Leg Press: 3 sets of 10 reps.'    
            ],
            [
                'workout_id' => 2,
                'session' => 2,
                'title' => 'Calf Raises: 3 sets of 15 reps.'    
            ],
            [
                'workout_id' => 2,
                'session' => 2,
                'title' => 'Plank: Hold for 30 seconds to 1 minute.'
            ],
            [
                'workout_id' => 2,
                'session' => 2,
                'title' => 'Cool-down: 5-10 minutes of stretching exercises.'
            ],
            [
                'workout_id' => 2,
                'session' => 3,
                'title' => 'Gentle cardio or take a day off: 20 to 30 minutes of jogging, swimming, or cycling.'
            ],
            [
                'workout_id' => 2,
                'session' => 4,
                'title' => 'Warm-up: 5-10 minutes of light cardio (e.g., brisk walking or cycling).'
            ],
            [
                'workout_id' => 2,
                'session' => 4,
                'title' => 'Shoulder Press: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 2,
                'session' => 4,
                'title' => 'Bent-Over Rows: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 2,
                'session' => 4,
                'title' => 'Chest Flyes: 3 sets of 12 reps.'
            ],
            [
                'workout_id' => 2,
                'session' => 4,
                'title' => 'Tricep Pushdowns: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 2,
                'session' => 4,
                'title' => 'Hammer Curls: 3 sets of 12 reps.'
            ],
            [
                'workout_id' => 2,
                'session' => 4,
                'title' => 'Plank: Hold for 30 seconds to 1 minute.'
            ],
            [
                'workout_id' => 2,
                'session' => 4,
                'title' => 'Cool-down: 5-10 minutes of stretching exercises.'
            ],
            [
                'workout_id' => 2,
                'session' => 5,
                'title' => 'Warm-up: 5-10 minutes of light cardio (e.g., brisk walking or cycling).'
            ],
            [
                'workout_id' => 2,
                'session' => 5,
                'title' => 'Lunges: 3 sets of 12 reps (each leg).'
            ],
            [
                'workout_id' => 2,
                'session' => 5,
                'title' => 'Romanian Deadlifts: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 2,
                'session' => 5,
                'title' => 'Leg Press: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 2,
                'session' => 5,
                'title' => 'Calf Raises: 3 sets of 15 reps.'
            ],
            [
                'workout_id' => 2,
                'session' => 5,
                'title' => 'Glute Bridges: 3 sets of 12 reps.'
            ],
            [
                'workout_id' => 2,
                'session' => 5,
                'title' => 'Plank: Hold for 30 seconds to 1 minute.'
            ],
            [
                'workout_id' => 2,
                'session' => 5,
                'title' => 'Cool-down: 5-10 minutes of stretching exercises.'
            ],
            [
                'workout_id' => 3,
                'session' => 1,
                'title' => 'Warm-up: 5-10 minutes of dynamic stretches.'
            ],
            [
                'workout_id' => 3,
                'session' => 1,
                'title' => 'Jump Squats: 4 sets of 15 reps.'
            ],
            [
                'workout_id' => 3,
                'session' => 1,
                'title' => 'Push-ups: 4 sets of 12 reps.'
            ],
            [
                'workout_id' => 3,
                'session' => 1,
                'title' => 'Burpees: 4 sets of 10 reps.'
            ],
            [
                'workout_id' => 3,
                'session' => 1,
                'title' => 'Mountain Climbers: 4 sets of 20 reps.'
            ],
            [
                'workout_id' => 3,
                'session' => 1,
                'title' => 'Russian Twists: 4 sets of 15 reps (each side).'
            ],
            [
                'workout_id' => 3,
                'session' => 1,
                'title' => 'Plank: Hold for 1 minute.'
            ],
            [
                'workout_id' => 3,
                'session' => 1,
                'title' => 'Cool-down: 5-10 minutes of static stretches.'
            ],
            [
                'workout_id' => 3,
                'session' => 2,
                'title' => 'Warm-up: 5-10 minutes of light cardio.'
            ],
            [
                'workout_id' => 3,
                'session' => 2,
                'title' => 'Barbell Squats: 4 sets of 8 reps.'
            ],
            [
                'workout_id' => 3,
                'session' => 2,
                'title' => 'Romanian Deadlifts: 4 sets of 10 reps.'    
            ],
            [
                'workout_id' => 3,
                'session' => 2,
                'title' => 'Walking Lunges: 4 sets of 12 reps (each leg).'
            ],
            [
                'workout_id' => 3,
                'session' => 2,
                'title' => 'Glute Bridges: 4 sets of 15 reps.'    
            ],
            [
                'workout_id' => 3,
                'session' => 2,
                'title' => 'Calf Raises: 4 sets of 12 reps.'    
            ],
            [
                'workout_id' => 3,
                'session' => 2,
                'title' => 'Plank: Hold for 1 minute.'
            ],
            [
                'workout_id' => 3,
                'session' => 2,
                'title' => 'Cool-down: 5-10 minutes of stretching exercises.'
            ],
            [
                'workout_id' => 3,
                'session' => 3,
                'title' => 'Warm-up: 5-10 minutes of light cardio.'
            ],
            [
                'workout_id' => 3,
                'session' => 3,
                'title' => 'Barbell Bench Press: 4 sets of 8 reps.'
            ],
            [
                'workout_id' => 3,
                'session' => 3,
                'title' => 'Bent-Over Rows: 4 sets of 10 reps.'
            ],
            [
                'workout_id' => 3,
                'session' => 3,
                'title' => 'Shoulder Press: 4 sets of 12 reps.'
            ],
            [
                'workout_id' => 3,
                'session' => 3,
                'title' => 'Pull-ups or Lat Pulldowns: 4 sets of 10 reps.'
            ],
            [
                'workout_id' => 3,
                'session' => 3,
                'title' => 'Tricep Dips: 4 sets of 12 reps.'
            ],
            [
                'workout_id' => 3,
                'session' => 3,
                'title' => 'Bicep Curls: 4 sets of 12 reps.'
            ],
            [
                'workout_id' => 3,
                'session' => 3,
                'title' => 'Plank: Hold for 1 minute.'
            ],
            [
                'workout_id' => 3,
                'session' => 3,
                'title' => 'Cool-down: 5-10 minutes of stretching exercises.'
            ],
            [
                'workout_id' => 3,
                'session' => 4,
                'title' => 'Warm-up: 5-10 minutes of light cardio.'
            ],
            [
                'workout_id' => 3,
                'session' => 4,
                'title' => 'High-Knee Run: 4 sets of 30 seconds.'
            ],
            [
                'workout_id' => 3,
                'session' => 4,
                'title' => 'Jumping Jacks: 4 sets of 20 reps.'
            ],
            [
                'workout_id' => 3,
                'session' => 4,
                'title' => 'Mountain Climbers: 4 sets of 20 reps.'
            ],
            [
                'workout_id' => 3,
                'session' => 4,
                'title' => 'Bicycle Crunches: 4 sets of 20 reps.'
            ],
            [
                'workout_id' => 3,
                'session' => 4,
                'title' => 'Plank Jacks: 4 sets of 15 reps.'
            ],
            [
                'workout_id' => 3,
                'session' => 4,
                'title' => 'Jump Rope: 4 sets of 1 minute.'
            ],
            [
                'workout_id' => 3,
                'session' => 4,
                'title' => 'Cool-down: 5-10 minutes of static stretches.'
            ],
            [
                'workout_id' => 3,
                'session' => 5,
                'title' => 'Warm-up: 5-10 minutes of dynamic stretches.'
            ],
            [
                'workout_id' => 3,
                'session' => 5,
                'title' => 'Gentle cardio: 1 hour of jogging, swimming, or cycling.'
            ],
            [
                'workout_id' => 3,
                'session' => 5,
                'title' => 'Cool-down: 5-10 minutes of static stretches.'
            ],
            [
                'workout_id' => 4,
                'session' => 1,
                'title' => 'Warm-up: 5-10 minutes of dynamic stretches.'
            ],
            [
                'workout_id' => 4,
                'session' => 1,
                'title' => 'Bench Press: 4 sets of 6 reps.'
            ],
            [
                'workout_id' => 4,
                'session' => 1,
                'title' => 'Bent-Over Rows: 4 sets of 8 reps.'
            ],
            [
                'workout_id' => 4,
                'session' => 1,
                'title' => 'Shoulder Press: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 4,
                'session' => 1,
                'title' => 'Pull-ups or Lat Pulldowns: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 4,
                'session' => 1,
                'title' => 'Tricep Dips: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 4,
                'session' => 1,
                'title' => 'Bicep Curls: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 4,
                'session' => 1,
                'title' => 'Abdominal Crunches: 3 sets of 12 reps.'
            ],
            [
                'workout_id' => 4,
                'session' => 1,
                'title' => 'Cool-down: 5-10 minutes of static stretches.'
            ],
            [
                'workout_id' => 4,
                'session' => 2,
                'title' => 'Gentle cardio or take a day off: 20 to 30 minutes of jogging, swimming, or cycling.'
            ],
            [
                'workout_id' => 4,
                'session' => 3,
                'title' => 'Warm-up: 5-10 minutes of dynamic stretches.'
            ],
            [
                'workout_id' => 4,
                'session' => 3,
                'title' => 'Squats: 4 sets of 6 reps.'    
            ],
            [
                'workout_id' => 4,
                'session' => 3,
                'title' => 'Deadlifts: 4 sets of 8 reps.'
            ],
            [
                'workout_id' => 4,
                'session' => 3,
                'title' => 'Lunges: 3 sets of 10 reps (each leg).'    
            ],
            [
                'workout_id' => 4,
                'session' => 3,
                'title' => 'Leg Press: 3 sets of 10 reps.'    
            ],
            [
                'workout_id' => 4,
                'session' => 3,
                'title' => 'Calf Raises: 3 sets of 12 reps.'
            ],
            [
                'workout_id' => 4,
                'session' => 3,
                'title' => 'Plank: Hold for 1 minute.'
            ],
            [
                'workout_id' => 4,
                'session' => 3,
                'title' => 'Cool-down: 5-10 minutes of static stretches.'
            ],
            [
                'workout_id' => 4,
                'session' => 4,
                'title' => 'Gentle cardio or take a day off: 20 to 30 minutes of jogging, swimming, or cycling.'
            ],
            [
                'workout_id' => 4,
                'session' => 5,
                'title' => 'Warm-up: 5-10 minutes of dynamic stretches.'
            ],
            [
                'workout_id' => 4,
                'session' => 5,
                'title' => 'Barbell Bench Press: 4 sets of 6 reps.'
            ],
            [
                'workout_id' => 4,
                'session' => 5,
                'title' => 'Barbell Rows: 4 sets of 8 reps.'
            ],
            [
                'workout_id' => 4,
                'session' => 5,
                'title' => 'Shoulder Press: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 4,
                'session' => 5,
                'title' => 'Squats: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 4,
                'session' => 5,
                'title' => 'Romanian Deadlifts: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 4,
                'session' => 5,
                'title' => 'Tricep Pushdowns: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 4,
                'session' => 5,
                'title' => 'Bicep Hammer Curls: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 4,
                'session' => 5,
                'title' => 'Abdominal Plank: Hold for 1 minute.'
            ],
            [
                'workout_id' => 4,
                'session' => 5,
                'title' => 'Cool-down: 5-10 minutes of static stretches.'
            ],
            [
                'workout_id' => 5,
                'session' => 1,
                'title' => 'Warm-up: 5-10 minutes of dynamic stretches.'
            ],
            [
                'workout_id' => 5,
                'session' => 1,
                'title' => 'Bench Press: 4 sets of 8 reps.'
            ],
            [
                'workout_id' => 5,
                'session' => 1,
                'title' => 'Incline Dumbbell Press: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 5,
                'session' => 1,
                'title' => 'Bent-Over Rows: 4 sets of 8 reps.'
            ],
            [
                'workout_id' => 5,
                'session' => 1,
                'title' => 'Lat Pulldowns: 4 sets of 10 reps.'
            ],
            [
                'workout_id' => 5,
                'session' => 1,
                'title' => 'Dumbbell Shoulder Press: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 5,
                'session' => 1,
                'title' => 'Tricep Pushdowns: 3 sets of 12 reps.'
            ],
            [
                'workout_id' => 5,
                'session' => 1,
                'title' => 'Bicep Hammer Curls: 3 sets of 12 reps.'
            ],
            [
                'workout_id' => 5,
                'session' => 1,
                'title' => 'Abs Abdominal Exercise: 3 sets of 15 reps.'
            ],
            [
                'workout_id' => 5,
                'session' => 1,
                'title' => 'Cool-down: 5-10 minutes of static stretches.'
            ],
            [
                'workout_id' => 5,
                'session' => 2,
                'title' => 'Warm-up: 5-10 minutes of dynamic stretches.'
            ],
            [
                'workout_id' => 5,
                'session' => 2,
                'title' => 'Squats: 4 sets of 8 reps.'
            ],
            [
                'workout_id' => 5,
                'session' => 2,
                'title' => 'Romanian Deadlifts: 4 sets of 10 reps.'    
            ],
            [
                'workout_id' => 5,
                'session' => 2,
                'title' => 'Walking Lunges: 3 sets of 12 reps (each leg).'
            ],
            [
                'workout_id' => 5,
                'session' => 2,
                'title' => 'Leg Press: 3 sets of 12 reps.'    
            ],
            [
                'workout_id' => 5,
                'session' => 2,
                'title' => 'Calf Raises: 3 sets of 15 reps.'    
            ],
            [
                'workout_id' => 5,
                'session' => 2,
                'title' => 'Glute Bridges: 3 sets of 12 reps.'
            ],
            [
                'workout_id' => 5,
                'session' => 2,
                'title' => 'Cool-down: 5-10 minutes of static stretches.'
            ],
            [
                'workout_id' => 5,
                'session' => 3,
                'title' => 'Gentle cardio or take a day off: 20 to 30 minutes of jogging, swimming, or cycling.'
            ],
            [
                'workout_id' => 5,
                'session' => 4,
                'title' => 'Warm-up: 5-10 minutes of dynamic stretches.'
            ],
            [
                'workout_id' => 5,
                'session' => 4,
                'title' => 'Incline Bench Press: 4 sets of 8 reps.'
            ],
            [
                'workout_id' => 5,
                'session' => 4,
                'title' => 'Cable Flyes: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 5,
                'session' => 4,
                'title' => 'Seated Cable Rows: 4 sets of 8 reps'
            ],
            [
                'workout_id' => 5,
                'session' => 4,
                'title' => 'Pull-ups: 4 sets of 10 reps.'
            ],
            [
                'workout_id' => 5,
                'session' => 4,
                'title' => 'Lateral Raises: 3 sets of 12 reps.'
            ],
            [
                'workout_id' => 5,
                'session' => 4,
                'title' => 'Tricep Dips: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 5,
                'session' => 4,
                'title' => 'Hammer Curls: 3 sets of 12 reps.'
            ],
            [
                'workout_id' => 5,
                'session' => 4,
                'title' => 'Abs Abdominal Exercise: 3 sets of 15 reps.'
            ],
            [
                'workout_id' => 5,
                'session' => 4,
                'title' => 'Cool-down: 5-10 minutes of static stretches.'
            ],
            [
                'workout_id' => 5,
                'session' => 5,
                'title' => 'Warm-up: 5-10 minutes of dynamic stretches.'
            ],
            [
                'workout_id' => 5,
                'session' => 5,
                'title' => 'Deadlifts: 4 sets of 8 reps.'
            ],
            [
                'workout_id' => 5,
                'session' => 5,
                'title' => 'Leg Extensions: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 5,
                'session' => 5,
                'title' => 'Bulgarian Split Squats: 3 sets of 12 reps each leg.'
            ],
            [
                'workout_id' => 5,
                'session' => 5,
                'title' => 'Hamstring Curls: 3 sets of 12 reps.'
            ],
            [
                'workout_id' => 5,
                'session' => 5,
                'title' => 'Calf Raises: 3 sets of 15 reps.'
            ],
            [
                'workout_id' => 5,
                'session' => 5,
                'title' => 'Hip Thrusts: 3 sets of 12 reps.'
            ],
            [
                'workout_id' => 5,
                'session' => 5,
                'title' => 'Cool-down: 5-10 minutes of static stretches.'
            ],
            [
                'workout_id' => 6,
                'session' => 1,
                'title' => 'Warm-up: 5-10 minutes of dynamic stretches.'
            ],
            [
                'workout_id' => 6,
                'session' => 1,
                'title' => 'Bench Press: 4 sets of 6 reps.'
            ],
            [
                'workout_id' => 6,
                'session' => 1,
                'title' => 'Incline Dumbbell Press: 3 sets of 8 reps.'
            ],
            [
                'workout_id' => 6,
                'session' => 1,
                'title' => 'Chest Flyes: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 6,
                'session' => 1,
                'title' => 'Tricep Dips: 4 sets of 10 reps.'
            ],
            [
                'workout_id' => 6,
                'session' => 1,
                'title' => 'Tricep Pushdowns: 3 sets of 12 reps.'
            ],
            [
                'workout_id' => 6,
                'session' => 1,
                'title' => 'Overhead Tricep Extensions: 3 sets of 12 reps.'
            ],
            [
                'workout_id' => 6,
                'session' => 1,
                'title' => 'Cool-down: 5-10 minutes of static stretches.'
            ],
            [
                'workout_id' => 6,
                'session' => 2,
                'title' => 'Warm-up: 5-10 minutes of dynamic stretches.'
            ],
            [
                'workout_id' => 6,
                'session' => 2,
                'title' => 'Deadlifts: 4 sets of 6 reps.'
            ],
            [
                'workout_id' => 6,
                'session' => 2,
                'title' => 'Bent-Over Rows: 3 sets of 8 reps.'    
            ],
            [
                'workout_id' => 6,
                'session' => 2,
                'title' => 'Lat Pulldowns: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 6,
                'session' => 2,
                'title' => 'Seated Cable Rows: 3 sets of 10 reps.'    
            ],
            [
                'workout_id' => 6,
                'session' => 2,
                'title' => 'Barbell Bicep Curls: 4 sets of 10 reps.'    
            ],
            [
                'workout_id' => 6,
                'session' => 2,
                'title' => 'Hammer Curls: 3 sets of 12 reps.'
            ],
            [
                'workout_id' => 6,
                'session' => 2,
                'title' => 'Cool-down: 5-10 minutes of static stretches.'
            ],
            [
                'workout_id' => 6,
                'session' => 3,
                'title' => 'Warm-up: 5-10 minutes of dynamic stretches.'
            ],
            [
                'workout_id' => 6,
                'session' => 3,
                'title' => 'Squats: 4 sets of 6 reps.'
            ],
            [
                'workout_id' => 6,
                'session' => 3,
                'title' => 'Leg Press: 3 sets of 8 reps.'
            ],
            [
                'workout_id' => 6,
                'session' => 3,
                'title' => 'Lunges: 3 sets of 10 reps (each leg).'
            ],
            [
                'workout_id' => 6,
                'session' => 3,
                'title' => 'Leg Extensions: 3 sets of 12 reps.'
            ],
            [
                'workout_id' => 6,
                'session' => 3,
                'title' => 'Shoulder Press: 4 sets of 8 reps.'
            ],
            [
                'workout_id' => 6,
                'session' => 3,
                'title' => 'Lateral Raises: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 6,
                'session' => 3,
                'title' => 'Front Raises: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 6,
                'session' => 3,
                'title' => 'Cool-down: 5-10 minutes of static stretches.'
            ],
            [
                'workout_id' => 6,
                'session' => 4,
                'title' => 'Warm-up: 5-10 minutes of dynamic stretches.'
            ],
            [
                'workout_id' => 6,
                'session' => 4,
                'title' => 'Push-ups: 3 sets to failure.'
            ],
            [
                'workout_id' => 6,
                'session' => 4,
                'title' => 'Incline Dumbbell Press: 3 sets of 12 reps (lighter weight).'
            ],
            [
                'workout_id' => 6,
                'session' => 4,
                'title' => 'Cable Flyes: 3 sets of 15 reps.'
            ],
            [
                'workout_id' => 6,
                'session' => 4,
                'title' => 'Tricep Pushdowns: 3 sets of 12 reps (lighter weight).'
            ],
            [
                'workout_id' => 6,
                'session' => 4,
                'title' => 'Tricep Dips: 3 sets to failure.'
            ],
            [
                'workout_id' => 6,
                'session' => 4,
                'title' => 'Cool-down: 5-10 minutes of static stretches.'
            ],
            [
                'workout_id' => 6,
                'session' => 5,
                'title' => 'Warm-up: 5-10 minutes of dynamic stretches.'
            ],
            [
                'workout_id' => 6,
                'session' => 5,
                'title' => 'Pull-ups: 3 sets to failure.'
            ],
            [
                'workout_id' => 6,
                'session' => 5,
                'title' => 'Bent-Over Rows: 3 sets of 12 reps (lighter weight).'
            ],
            [
                'workout_id' => 6,
                'session' => 5,
                'title' => 'Lat Pulldowns: 3 sets of 15 reps.'
            ],
            [
                'workout_id' => 6,
                'session' => 5,
                'title' => 'Seated Cable Rows: 3 sets of 12 reps (lighter weight).'
            ],
            [
                'workout_id' => 6,
                'session' => 5,
                'title' => 'Barbell Bicep Curls: 3 sets of 12 reps (lighter weight).'
            ],
            [
                'workout_id' => 6,
                'session' => 5,
                'title' => 'Hammer Curls: 3 sets of 15 reps.'
            ],
            [
                'workout_id' => 6,
                'session' => 5,
                'title' => 'Cool-down: 5-10 minutes of static stretches.'
            ],
            [
                'workout_id' => 7,
                'session' => 1,
                'title' => 'Warm-up: 5-10 minutes of dynamic stretches.'
            ],
            [
                'workout_id' => 7,
                'session' => 1,
                'title' => 'Cardio: 20 to 30 minutes of jogging, swimming, or cycling.'
            ],
            [
                'workout_id' => 7,
                'session' => 1,
                'title' => 'Push-ups: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 7,
                'session' => 1,
                'title' => 'Squats: 3 sets of 12 reps.'
            ],
            [
                'workout_id' => 7,
                'session' => 1,
                'title' => 'Lunges: 3 sets of 10 reps (each leg).'
            ],
            [
                'workout_id' => 7,
                'session' => 1,
                'title' => 'Shoulder Press: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 7,
                'session' => 1,
                'title' => 'Lat Pulldowns: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 7,
                'session' => 1,
                'title' => 'Plank: Hold for 30 seconds to 1 minute.'
            ],
            [
                'workout_id' => 7,
                'session' => 1,
                'title' => 'Cool-down: 5-10 minutes of static stretches.'
            ],
            [
                'workout_id' => 7,
                'session' => 2,
                'title' => 'Gentle cardio or take a day off: 20 to 30 minutes of jogging, swimming, or cycling.'
            ],
            [
                'workout_id' => 7,
                'session' => 3,
                'title' => 'Warm-up: 5-10 minutes of dynamic stretches.'
            ],
            [
                'workout_id' => 7,
                'session' => 3,
                'title' => 'Cardio: 20 to 30 minutes of jogging, swimming, or cycling.'    
            ],
            [
                'workout_id' => 7,
                'session' => 3,
                'title' => 'Yoga or Pilates: Follow a 30-45 minute routine.'
            ],
            [
                'workout_id' => 7,
                'session' => 3,
                'title' => 'Cool-down: 5-10 minutes of static stretches.'    
            ],
            [
                'workout_id' => 7,
                'session' => 4,
                'title' => 'Gentle cardio or take a day off: 20 to 30 minutes of jogging, swimming, or cycling.'
            ],
            [
                'workout_id' => 7,
                'session' => 5,
                'title' => 'Warm-up: 5-10 minutes of dynamic stretches.'
            ],
            [
                'workout_id' => 7,
                'session' => 5,
                'title' => 'Cardio: 20 to 30 minutes of jogging, swimming, or cycling.'
            ],
            [
                'workout_id' => 7,
                'session' => 5,
                'title' => 'Dumbbell Chest Press: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 7,
                'session' => 5,
                'title' => 'Bent-Over Rows: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 7,
                'session' => 5,
                'title' => 'Bicep Curls: 3 sets of 12 reps.'
            ],
            [
                'workout_id' => 7,
                'session' => 5,
                'title' => 'Tricep Dips: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 7,
                'session' => 5,
                'title' => 'Leg Press: 3 sets of 12 reps.'
            ],
            [
                'workout_id' => 7,
                'session' => 5,
                'title' => 'Calf Raises: 3 sets of 15 reps.'
            ],
            [
                'workout_id' => 7,
                'session' => 5,
                'title' => 'Cool-down: 5-10 minutes of static stretches.'
            ],
            [
                'workout_id' => 8,
                'session' => 1,
                'title' => 'Warm-up: 5-10 minutes of dynamic stretches.'
            ],
            [
                'workout_id' => 8,
                'session' => 1,
                'title' => 'Push-ups: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 8,
                'session' => 1,
                'title' => 'Pull-ups or Lat Pulldowns: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 8,
                'session' => 1,
                'title' => 'Dumbbell Shoulder Press: 3 sets of 12 reps.'
            ],
            [
                'workout_id' => 8,
                'session' => 1,
                'title' => 'Renegade Rows: 3 sets of 10 reps (each arm).'
            ],
            [
                'workout_id' => 8,
                'session' => 1,
                'title' => 'Plank with Shoulder Taps: 3 sets of 10 taps (each arm).'
            ],
            [
                'workout_id' => 8,
                'session' => 1,
                'title' => 'Single-Arm Dumbbell Bench Press: 3 sets of 10 reps (each arm).'
            ],
            [
                'workout_id' => 8,
                'session' => 1,
                'title' => 'Cool-down: 5-10 minutes of static stretches.'
            ],
            [
                'workout_id' => 8,
                'session' => 2,
                'title' => 'Warm-up: 5-10 minutes of dynamic stretches.'
            ],
            [
                'workout_id' => 8,
                'session' => 2,
                'title' => 'Goblet Squats: 3 sets of 12 reps.'
            ],
            [
                'workout_id' => 8,
                'session' => 2,
                'title' => 'Romanian Deadlifts: 3 sets of 10 reps.'    
            ],
            [
                'workout_id' => 8,
                'session' => 2,
                'title' => 'Walking Lunges with Twist: 3 sets of 12 reps (each leg).'
            ],
            [
                'workout_id' => 8,
                'session' => 2,
                'title' => 'Single-Leg Glute Bridges: 3 sets of 10 reps (each leg).'    
            ],
            [
                'workout_id' => 8,
                'session' => 2,
                'title' => 'Side Plank with Leg Lift: 3 sets of 10 reps (each side).'    
            ],
            [
                'workout_id' => 8,
                'session' => 2,
                'title' => 'Calf Raises: 3 sets of 15 reps.'
            ],
            [
                'workout_id' => 8,
                'session' => 2,
                'title' => 'Cool-down: 5-10 minutes of static stretches.'
            ],
            [
                'workout_id' => 8,
                'session' => 3,
                'title' => 'Gentle cardio or take a day off: 20 to 30 minutes of jogging, swimming, or cycling.'
            ],
            [
                'workout_id' => 8,
                'session' => 4,
                'title' => 'Warm-up: 5-10 minutes of dynamic stretches.'
            ],
            [
                'workout_id' => 8,
                'session' => 4,
                'title' => 'TRX Rows: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 8,
                'session' => 4,
                'title' => 'Push-ups with Medicine Ball Roll: 3 sets of 12 reps.'
            ],
            [
                'workout_id' => 8,
                'session' => 4,
                'title' => 'Dumbbell Arnold Press: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 8,
                'session' => 4,
                'title' => 'Turkish Get-Ups: 3 sets of 6 reps (each side).'
            ],
            [
                'workout_id' => 8,
                'session' => 4,
                'title' => 'Plank with Leg Lift: 3 sets of 10 reps (each side).'
            ],
            [
                'workout_id' => 8,
                'session' => 4,
                'title' => 'Single-Arm Cable Crossover: 3 sets of 10 reps (each arm).'
            ],
            [
                'workout_id' => 8,
                'session' => 4,
                'title' => 'Cool-down: 5-10 minutes of static stretches.'
            ],
            [
                'workout_id' => 8,
                'session' => 5,
                'title' => 'Warm-up: 5-10 minutes of dynamic stretches.'
            ],
            [
                'workout_id' => 8,
                'session' => 5,
                'title' => 'Front Squats: 3 sets of 8 reps.'
            ],
            [
                'workout_id' => 8,
                'session' => 5,
                'title' => 'Sumo Deadlifts: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 8,
                'session' => 5,
                'title' => 'Step-ups: 3 sets of 12 reps (each leg).'
            ],
            [
                'workout_id' => 8,
                'session' => 5,
                'title' => 'Stability Ball Hamstring Curls: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 8,
                'session' => 5,
                'title' => 'Single-Leg Balance Reach: 3 sets of 10 reps (each leg).'
            ],
            [
                'workout_id' => 8,
                'session' => 5,
                'title' => 'Calf Raises: 3 sets of 15 reps.'
            ],
            [
                'workout_id' => 8,
                'session' => 5,
                'title' => 'Cool-down: 5-10 minutes of static stretches.'
            ],
            [
                'workout_id' => 9,
                'session' => 1,
                'title' => 'Warm-up: 5-10 minutes of light cardio.'
            ],
            [
                'workout_id' => 9,
                'session' => 1,
                'title' => 'Bench Press: 4 sets of 8 reps.'
            ],
            [
                'workout_id' => 9,
                'session' => 1,
                'title' => 'Bent-Over Rows: 4 sets of 10 reps.'
            ],
            [
                'workout_id' => 9,
                'session' => 1,
                'title' => 'Shoulder Press: 3 sets of 12 reps.'
            ],
            [
                'workout_id' => 9,
                'session' => 1,
                'title' => 'Tricep Dips: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 9,
                'session' => 1,
                'title' => 'Bicep Curls: 3 sets of 12 reps.'
            ],
            [
                'workout_id' => 9,
                'session' => 1,
                'title' => 'Plank: Hold for 30 seconds to 1 minute.'
            ],
            [
                'workout_id' => 9,
                'session' => 1,
                'title' => 'Cool-down: 5-10 minutes of static stretches.'
            ],
            [
                'workout_id' => 9,
                'session' => 2,
                'title' => 'Warm-up: 5-10 minutes of dynamic stretches.'
            ],
            [
                'workout_id' => 9,
                'session' => 2,
                'title' => 'Cardio: 1 hour of jogging, swimming, or cycling.'
            ],
            [
                'workout_id' => 9,
                'session' => 2,
                'title' => 'Cool-down: 5-10 minutes of static stretches.'    
            ],
            [
                'workout_id' => 9,
                'session' => 3,
                'title' => 'Warm-up: 5-10 minutes of light cardio.'
            ],
            [
                'workout_id' => 9,
                'session' => 3,
                'title' => 'Squats: 4 sets of 10 reps.'
            ],
            [
                'workout_id' => 9,
                'session' => 3,
                'title' => 'Deadlifts: 4 sets of 8 reps.'
            ],
            [
                'workout_id' => 9,
                'session' => 3,
                'title' => 'Lunges: 3 sets of 12 reps (each leg).'
            ],
            [
                'workout_id' => 9,
                'session' => 3,
                'title' => 'Leg Press: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 9,
                'session' => 3,
                'title' => 'Calf Raises: 3 sets of 15 reps.'
            ],
            [
                'workout_id' => 9,
                'session' => 3,
                'title' => 'Glute Bridges: 3 sets of 12 reps.'
            ],
            [
                'workout_id' => 9,
                'session' => 3,
                'title' => 'Cool-down: 5-10 minutes of static stretches.'
            ],
            [
                'workout_id' => 9,
                'session' => 4,
                'title' => 'Warm-up: 5-10 minutes of dynamic stretches.'
            ],
            [
                'workout_id' => 9,
                'session' => 4,
                'title' => 'Yoga or Pilates: Follow a 30-45 minute routine.'
            ],
            [
                'workout_id' => 9,
                'session' => 4,
                'title' => 'Cool-down: 5-10 minutes of static stretches.'
            ],
            [
                'workout_id' => 9,
                'session' => 5,
                'title' => 'Warm-up: 5-10 minutes of light cardio.'
            ],
            [
                'workout_id' => 9,
                'session' => 5,
                'title' => 'Push-ups: 10-12 reps.'
            ],
            [
                'workout_id' => 9,
                'session' => 5,
                'title' => 'Squats: 10-12 reps.'
            ],
            [
                'workout_id' => 9,
                'session' => 5,
                'title' => 'Bent-Over Rows: 10-12 reps.'
            ],
            [
                'workout_id' => 9,
                'session' => 5,
                'title' => 'Tricep Dips: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 9,
                'session' => 5,
                'title' => 'Shoulder Press: 10-12 reps.'
            ],
            [
                'workout_id' => 9,
                'session' => 5,
                'title' => 'Lunges: 3 sets of 12 reps (each leg).'
            ],
            [
                'workout_id' => 9,
                'session' => 5,
                'title' => 'Leg Press: 3 sets of 10 reps.'
            ],
            [
                'workout_id' => 9,
                'session' => 5,
                'title' => 'Calf Raises: 3 sets of 15 reps.'
            ],
            [
                'workout_id' => 9,
                'session' => 5,
                'title' => 'Cool-down: 5-10 minutes of static stretches.'
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
