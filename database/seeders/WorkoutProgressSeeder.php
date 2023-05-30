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
        DB::table('workoutprogress')->insert([
            'workoutdetail_id' => 1,
            'user_id' => 2,
            'status' => 'Done',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('workoutprogress')->insert([
            'workoutdetail_id' => 2,
            'user_id' => 2,
            'status' => 'Done',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('workoutprogress')->insert([
            'workoutdetail_id' => 3,
            'user_id' => 2,
            'status' => 'Done',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('workoutprogress')->insert([
            'workoutdetail_id' => 4,
            'user_id' => 2,
            'status' => 'Done',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('workoutprogress')->insert([
            'workoutdetail_id' => 5,
            'user_id' => 2,
            'status' => 'Done',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('workoutprogress')->insert([
            'workoutdetail_id' => 6,
            'user_id' => 2,
            'status' => 'Done',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('workoutprogress')->insert([
            'workoutdetail_id' => 7,
            'user_id' => 2,
            'status' => 'Done',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('workoutprogress')->insert([
            'workoutdetail_id' => 8,
            'user_id' => 2,
            'status' => 'Done',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('workoutprogress')->insert([
            'workoutdetail_id' => 9,
            'user_id' => 2,
            'status' => 'Done',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('workoutprogress')->insert([
            'workoutdetail_id' => 10,
            'user_id' => 2,
            'status' => 'Done',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('workoutprogress')->insert([
            'workoutdetail_id' => 11,
            'user_id' => 2,
            'status' => 'Not Done',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('workoutprogress')->insert([
            'workoutdetail_id' => 12,
            'user_id' => 2,
            'status' => 'Not Done',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        
    }
}
