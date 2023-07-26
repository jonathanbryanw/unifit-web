<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeightDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weightdetails')->insert([
            'account_id' => 2,
            'weight' => 60.8,
            'created_at' => date('Y-m-d', strtotime('2023-04-29')),
            'updated_at' => date('Y-m-d', strtotime('2023-04-29')),
        ]);
        DB::table('weightdetails')->insert([
            'account_id' => 2,
            'weight' => 60.2,
            'created_at' => date('Y-m-d', strtotime('2023-04-30')),
            'updated_at' => date('Y-m-d', strtotime('2023-04-30')),
        ]);
        DB::table('weightdetails')->insert([
            'account_id' => 2,
            'weight' => 60.2,
            'created_at' => date('Y-m-d', strtotime('2023-05-01')),
            'updated_at' => date('Y-m-d', strtotime('2023-05-01')),
        ]);
        DB::table('weightdetails')->insert([
            'account_id' => 2,
            'weight' => 59.8,
            'created_at' => date('Y-m-d', strtotime('2023-05-02')),
            'updated_at' => date('Y-m-d', strtotime('2023-05-02')),
        ]);
        DB::table('weightdetails')->insert([
            'account_id' => 2,
            'weight' => 59.6,
            'created_at' => date('Y-m-d', strtotime('2023-05-03')),
            'updated_at' => date('Y-m-d', strtotime('2023-05-03')),
        ]);
        DB::table('weightdetails')->insert([
            'account_id' => 2,
            'weight' => 60.0,
            'created_at' => date('Y-m-d', strtotime('2023-05-04')),
            'updated_at' => date('Y-m-d', strtotime('2023-05-04')),
        ]);
    }
}
