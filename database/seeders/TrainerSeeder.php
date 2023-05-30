<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainers')->insert([
            'description' => "Introducing Jonathan, a committed fitness professional with a focus on UniFit's Maintain Weight (Increase Overall Fitness Health) program. Jonathan is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Jonathan is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.",
            'user_id' => 3,
            'program_id' => 2,
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'photo' => 'jonathan.jpg',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
    }
}
