<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class WorkoutProgressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedFirstWorkoutProgress();
    }

    private function seedFirstWorkoutProgress(){
        $workoutProgressOne=[
            [
                'workoutdetail_id' => 1,
                'user_id' => 2,
                'status' => 'Done'            
            ],
            [
                'workoutdetail_id' => 2,
                'user_id' => 2,
                'status' => 'Done'
            ],
            [
                'workoutdetail_id' => 3,
                'user_id' => 2,
                'status' => 'Done'
            ],
            [
                'workoutdetail_id' => 4,
                'user_id' => 2,
                'status' => 'Done'
            ],
            [
                'workoutdetail_id' => 5,
                'user_id' => 2,
                'status' => 'Done'
            ],
            [
                'workoutdetail_id' => 6,
                'user_id' => 2,
                'status' => 'Done'
            ],
            [
                'workoutdetail_id' => 7,
                'user_id' => 2,
                'status' => 'Done'
            ],
            [
                'workoutdetail_id' => 8,
                'user_id' => 2,
                'status' => 'Done'
            ],
            [
                'workoutdetail_id' => 9,
                'user_id' => 2,
                'status' => 'Done'
            ],
            [
                'workoutdetail_id' => 10,
                'user_id' => 2,
                'status' => 'Done'
            ],
            [
                'workoutdetail_id' => 11,
                'user_id' => 2,
                'status' => 'Not Done'  
            ],
            [
                'workoutdetail_id' => 12,
                'user_id' => 2,
                'status' => 'Not Done'
            ],
            [
                'workoutdetail_id' => 13,
                'user_id' => 2,
                'status' => 'Not Done'   
            ],
            [
                'workoutdetail_id' => 14,
                'user_id' => 2,
                'status' => 'Not Done'   
            ],
            [
                'workoutdetail_id' => 15,
                'user_id' => 2,
                'status' => 'Not Done'
            ],
            [
                'workoutdetail_id' => 16,
                'user_id' => 2,
                'status' => 'Not Done'
            ],
            [
                'workoutdetail_id' => 17,
                'user_id' => 2,
                'status' => 'Not Done'
            ],
            [
                'workoutdetail_id' => 18,
                'user_id' => 2,
                'status' => 'Not Done'
            ],
            [
                'workoutdetail_id' => 19,
                'user_id' => 2,
                'status' => 'Not Done'
            ],
            [
                'workoutdetail_id' => 20,
                'user_id' => 2,
                'status' => 'Not Done'
            ],
            [
                'workoutdetail_id' => 21,
                'user_id' => 2,
                'status' => 'Not Done'
            ],
            [
                'workoutdetail_id' => 22,
                'user_id' => 2,
                'status' => 'Not Done'
            ],
            [
                'workoutdetail_id' => 23,
                'user_id' => 2,
                'status' => 'Not Done'
            ],
            [
                'workoutdetail_id' => 24,
                'user_id' => 2,
                'status' => 'Not Done'
            ],
            [
                'workoutdetail_id' => 25,
                'user_id' => 2,
                'status' => 'Not Done'
            ],
            [
                'workoutdetail_id' => 26,
                'user_id' => 2,
                'status' => 'Not Done'
            ]
        ];

        foreach ($workoutProgressOne as $detail) {
            DB::table('workoutprogress')->insert(array_merge($detail, [
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ]));
        }
    }
}
