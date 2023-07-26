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
                'account_id' => 2,
                'status' => 'Done'            
            ],
            [
                'workoutdetail_id' => 2,
                'account_id' => 2,
                'status' => 'Done'
            ],
            [
                'workoutdetail_id' => 3,
                'account_id' => 2,
                'status' => 'Done'
            ],
            [
                'workoutdetail_id' => 4,
                'account_id' => 2,
                'status' => 'Done'
            ],
            [
                'workoutdetail_id' => 5,
                'account_id' => 2,
                'status' => 'Done'
            ],
            [
                'workoutdetail_id' => 6,
                'account_id' => 2,
                'status' => 'Done'
            ],
            [
                'workoutdetail_id' => 7,
                'account_id' => 2,
                'status' => 'Done'
            ],
            [
                'workoutdetail_id' => 8,
                'account_id' => 2,
                'status' => 'Done'
            ],
            [
                'workoutdetail_id' => 9,
                'account_id' => 2,
                'status' => 'Done'
            ],
            [
                'workoutdetail_id' => 10,
                'account_id' => 2,
                'status' => 'Done'
            ],
            [
                'workoutdetail_id' => 11,
                'account_id' => 2,
                'status' => 'Not Done'  
            ],
            [
                'workoutdetail_id' => 12,
                'account_id' => 2,
                'status' => 'Not Done'
            ],
            [
                'workoutdetail_id' => 13,
                'account_id' => 2,
                'status' => 'Not Done'   
            ],
            [
                'workoutdetail_id' => 14,
                'account_id' => 2,
                'status' => 'Not Done'   
            ],
            [
                'workoutdetail_id' => 15,
                'account_id' => 2,
                'status' => 'Not Done'
            ],
            [
                'workoutdetail_id' => 16,
                'account_id' => 2,
                'status' => 'Not Done'
            ],
            [
                'workoutdetail_id' => 17,
                'account_id' => 2,
                'status' => 'Not Done'
            ],
            [
                'workoutdetail_id' => 18,
                'account_id' => 2,
                'status' => 'Not Done'
            ],
            [
                'workoutdetail_id' => 19,
                'account_id' => 2,
                'status' => 'Not Done'
            ],
            [
                'workoutdetail_id' => 20,
                'account_id' => 2,
                'status' => 'Not Done'
            ],
            [
                'workoutdetail_id' => 21,
                'account_id' => 2,
                'status' => 'Not Done'
            ],
            [
                'workoutdetail_id' => 22,
                'account_id' => 2,
                'status' => 'Not Done'
            ],
            [
                'workoutdetail_id' => 23,
                'account_id' => 2,
                'status' => 'Not Done'
            ],
            [
                'workoutdetail_id' => 24,
                'account_id' => 2,
                'status' => 'Not Done'
            ],
            [
                'workoutdetail_id' => 25,
                'account_id' => 2,
                'status' => 'Not Done'
            ],
            [
                'workoutdetail_id' => 26,
                'account_id' => 2,
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
