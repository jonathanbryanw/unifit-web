<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programs')->insert([
            'name' => 'Lose Weight'
        ]);
        DB::table('programs')->insert([
            'name' => 'Maintain Weight'
        ]);
        DB::table('programs')->insert([
            'name' => 'Gain Muscle'
        ]);
    }
}
