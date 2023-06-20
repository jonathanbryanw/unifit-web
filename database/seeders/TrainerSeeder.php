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
            'description' => "Introducing Jonathan, a committed fitness professional with a focus on UniFit's Lose Weight program. Jonathan is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Jonathan is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><b>Contacts:</b><br>+62 132 132 132<br>jonathan@email.com",
            'user_id' => 3,
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'jonathan.jpg',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('trainers')->insert([
            'description' => "Introducing John, a committed fitness professional with a focus on UniFit's Maintain Weight (Increase Overall Fitness Health) program. John is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. John is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><b>Contacts:</b><br>+62 132 132 132<br>john@email.com",
            'user_id' => 4,
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-01.png',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('trainers')->insert([
            'description' => "Introducing Lucas, a committed fitness professional with a focus on UniFit's Lose Weight program. Lucas is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Lucas is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><b>Contacts:</b><br>+62 132 132 132<br>lucas@email.com",
            'user_id' => 5,
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-02.png',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('trainers')->insert([
            'description' => "Introducing Ben, a committed fitness professional with a focus on UniFit's Lose Weight program. Ben is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Ben is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><b>Contacts:</b><br>+62 132 132 132<br>ben@email.com",
            'user_id' => 6,
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-03.png',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('trainers')->insert([
            'description' => "Introducing Jessica, a committed fitness professional with a focus on UniFit's Lose Weight program. Jessica is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Jessica is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><b>Contacts:</b><br>+62 132 132 132<br>jessica@email.com",
            'user_id' => 7,
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-04.png',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('trainers')->insert([
            'description' => "Introducing Hendrick, a committed fitness professional with a focus on UniFit's Lose Weight program. Hendrick is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Hendrick is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><b>Contacts:</b><br>+62 132 132 132<br>hendrick@email.com",
            'user_id' => 8,
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-05.png',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('trainers')->insert([
            'description' => "Introducing Kim, a committed fitness professional with a focus on UniFit's Lose Weight program. Kim is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Kim is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><b>Contacts:</b><br>+62 132 132 132<br>kim@email.com",
            'user_id' => 9,
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-06.png',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('trainers')->insert([
            'description' => "Introducing Hemsworth, a committed fitness professional with a focus on UniFit's Gain Muscle program. Hemsworth is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Hemsworth is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><b>Contacts:</b><br>+62 132 132 132<br>hemsworth@email.com",
            'user_id' => 10,
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-07.png',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('trainers')->insert([
            'description' => "Introducing Chris, a committed fitness professional with a focus on UniFit's Gain Muscle program. Chris is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Chris is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><b>Contacts:</b><br>+62 132 132 132<br>chris@email.com",
            'user_id' => 11,
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-08.png',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('trainers')->insert([
            'description' => "Introducing Urs, a committed fitness professional with a focus on UniFit's Gain Muscle program. Urs is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Urs is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><b>Contacts:</b><br>+62 132 132 132<br>urs@email.com",
            'user_id' => 12,
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-09.png',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('trainers')->insert([
            'description' => "Introducing Ramon, a committed fitness professional with a focus on UniFit's Gain Muscle program. Ramon is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Ramon is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><b>Contacts:</b><br>+62 132 132 132<br>ramon@email.com",
            'user_id' => 13,
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-10.png',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('trainers')->insert([
            'description' => "Introducing Ainsley, a committed fitness professional with a focus on UniFit's Gain Muscle program. Ainsley is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Ainsley is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><b>Contacts:</b><br>+62 132 132 132<br>ainsley@email.com",
            'user_id' => 14,
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-11.png',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('trainers')->insert([
            'description' => "Introducing Ruff, a committed fitness professional with a focus on UniFit's Gain Muscle program. Ruff is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Ruff is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><b>Contacts:</b><br>+62 132 132 132<br>ruff@email.com",
            'user_id' => 15,
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-12.png',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('trainers')->insert([
            'description' => "Introducing Brian, a committed fitness professional with a focus on UniFit's Maintain Weight (Increase Overall Fitness Health) program. Brian is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Brian is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><b>Contacts:</b><br>+62 132 132 132<br>brian@email.com",
            'user_id' => 16,
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-14.png',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('trainers')->insert([
            'description' => "Introducing Jeff, a committed fitness professional with a focus on UniFit's Maintain Weight (Increase Overall Fitness Health) program. Jeff is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Jeff is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><b>Contacts:</b><br>+62 132 132 132<br>jeff@email.com",
            'user_id' => 17,
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-15.png',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('trainers')->insert([
            'description' => "Introducing John, a committed fitness professional with a focus on UniFit's Maintain Weight (Increase Overall Fitness Health) program. John is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. John is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><b>Contacts:</b><br>+62 132 132 132<br>john@email.com",
            'user_id' => 18,
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-16.png',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('trainers')->insert([
            'description' => "Introducing Luke, a committed fitness professional with a focus on UniFit's Maintain Weight (Increase Overall Fitness Health) program. Luke is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Luke is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><b>Contacts:</b><br>+62 132 132 132<br>luke@email.com",
            'user_id' => 19,
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-17.png',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('trainers')->insert([
            'description' => "Introducing Jason, a committed fitness professional with a focus on UniFit's Maintain Weight (Increase Overall Fitness Health) program. Jason is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Jason is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><b>Contacts:</b><br>+62 132 132 132<br>jason@email.com",
            'user_id' => 20,
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-18.png',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
    }
}
