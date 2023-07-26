<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            'name' => 'Admin1',
            'email' => 'admin1@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 1,
            'program_id' => 3
        ]);
        DB::table('accounts')->insert([
            'name' => 'Member1',
            'email' => 'member1@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 2,
            'program_id' => 1
        ]);
        DB::table('accounts')->insert([
            'name' => 'Jonathan',
            'email' => 'trainer13@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 1,
            'description' => "Introducing Jonathan, a committed fitness professional with a focus on UniFit's Lose Weight program. Jonathan is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Jonathan is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><a href='https://www.instagram.com/jonathanbryanw/'>Click here to see Trainer's social media.</a><br><br><b>Contacts:</b><br>+62 132 132 132<br>jonathan@email.com",
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'jonathan.jpg'
        ]);
        DB::table('accounts')->insert([
            'name' => 'John',
            'email' => 'trainer01@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 2,
            'description' => "Introducing John, a committed fitness professional with a focus on UniFit's Maintain Weight (Increase Overall Fitness Health) program. John is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. John is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><a href='https://www.instagram.com/jonathanbryanw/'>Click here to see Trainer's social media.</a><br><br><b>Contacts:</b><br>+62 132 132 132<br>john@email.com",
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-01.png'
        ]);
        DB::table('accounts')->insert([
            'name' => 'Lucas',
            'email' => 'trainer02@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 1,
            'description' => "Introducing Lucas, a committed fitness professional with a focus on UniFit's Lose Weight program. Lucas is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Lucas is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><a href='https://www.instagram.com/jonathanbryanw/'>Click here to see Trainer's social media.</a><br><br><b>Contacts:</b><br>+62 132 132 132<br>lucas@email.com",
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-02.png'
        ]);
        DB::table('accounts')->insert([
            'name' => 'Ben',
            'email' => 'trainer03@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 1,
            'description' => "Introducing Ben, a committed fitness professional with a focus on UniFit's Lose Weight program. Ben is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Ben is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><a href='https://www.instagram.com/jonathanbryanw/'>Click here to see Trainer's social media.</a><br><br><b>Contacts:</b><br>+62 132 132 132<br>ben@email.com",
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-03.png'
        ]);
        DB::table('accounts')->insert([
            'name' => 'Jessica',
            'email' => 'trainer04@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 1,
            'description' => "Introducing Jessica, a committed fitness professional with a focus on UniFit's Lose Weight program. Jessica is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Jessica is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><a href='https://www.instagram.com/jonathanbryanw/'>Click here to see Trainer's social media.</a><br><br><b>Contacts:</b><br>+62 132 132 132<br>jessica@email.com",
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-04.png'
        ]);
        DB::table('accounts')->insert([
            'name' => 'Hendrick',
            'email' => 'trainer05@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 1,
            'description' => "Introducing Hendrick, a committed fitness professional with a focus on UniFit's Lose Weight program. Hendrick is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Hendrick is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><a href='https://www.instagram.com/jonathanbryanw/'>Click here to see Trainer's social media.</a><br><br><b>Contacts:</b><br>+62 132 132 132<br>hendrick@email.com",
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-05.png'
        ]);
        DB::table('accounts')->insert([
            'name' => 'Kim',
            'email' => 'trainer06@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 1,
            'description' => "Introducing Kim, a committed fitness professional with a focus on UniFit's Lose Weight program. Kim is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Kim is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><a href='https://www.instagram.com/jonathanbryanw/'>Click here to see Trainer's social media.</a><br><br><b>Contacts:</b><br>+62 132 132 132<br>kim@email.com",
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-06.png'
        ]);
        DB::table('accounts')->insert([
            'name' => 'Hemsworth',
            'email' => 'trainer07@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 3,
            'description' => "Introducing Hemsworth, a committed fitness professional with a focus on UniFit's Gain Muscle program. Hemsworth is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Hemsworth is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><a href='https://www.instagram.com/jonathanbryanw/'>Click here to see Trainer's social media.</a><br><br><b>Contacts:</b><br>+62 132 132 132<br>hemsworth@email.com",
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-07.png'
        ]);
        DB::table('accounts')->insert([
            'name' => 'Chris',
            'email' => 'trainer08@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 3,
            'description' => "Introducing Chris, a committed fitness professional with a focus on UniFit's Gain Muscle program. Chris is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Chris is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><a href='https://www.instagram.com/jonathanbryanw/'>Click here to see Trainer's social media.</a><br><br><b>Contacts:</b><br>+62 132 132 132<br>chris@email.com",
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-08.png'
        ]);
        DB::table('accounts')->insert([
            'name' => 'Urs',
            'email' => 'trainer09@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 3,
            'description' => "Introducing Urs, a committed fitness professional with a focus on UniFit's Gain Muscle program. Urs is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Urs is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><a href='https://www.instagram.com/jonathanbryanw/'>Click here to see Trainer's social media.</a><br><br><b>Contacts:</b><br>+62 132 132 132<br>urs@email.com",
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-09.png'
        ]);
        DB::table('accounts')->insert([
            'name' => 'Ramon',
            'email' => 'trainer10@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 3,
            'description' => "Introducing Ramon, a committed fitness professional with a focus on UniFit's Gain Muscle program. Ramon is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Ramon is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><a href='https://www.instagram.com/jonathanbryanw/'>Click here to see Trainer's social media.</a><br><br><b>Contacts:</b><br>+62 132 132 132<br>ramon@email.com",
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-10.png'
        ]);
        DB::table('accounts')->insert([
            'name' => 'Ainsley',
            'email' => 'trainer11@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 3,
            'description' => "Introducing Ainsley, a committed fitness professional with a focus on UniFit's Gain Muscle program. Ainsley is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Ainsley is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><a href='https://www.instagram.com/jonathanbryanw/'>Click here to see Trainer's social media.</a><br><br><b>Contacts:</b><br>+62 132 132 132<br>ainsley@email.com",
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-11.png'
        ]);
        DB::table('accounts')->insert([
            'name' => 'Ruff',
            'email' => 'trainer12@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 3,
            'description' => "Introducing Ruff, a committed fitness professional with a focus on UniFit's Gain Muscle program. Ruff is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Ruff is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><a href='https://www.instagram.com/jonathanbryanw/'>Click here to see Trainer's social media.</a><br><br><b>Contacts:</b><br>+62 132 132 132<br>ruff@email.com",
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-12.png'
        ]);
        DB::table('accounts')->insert([
            'name' => 'Brian',
            'email' => 'trainer14@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 2,
            'description' => "Introducing Brian, a committed fitness professional with a focus on UniFit's Maintain Weight (Increase Overall Fitness Health) program. Brian is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Brian is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><a href='https://www.instagram.com/jonathanbryanw/'>Click here to see Trainer's social media.</a><br><br><b>Contacts:</b><br>+62 132 132 132<br>brian@email.com",
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-14.png'
        ]);
        DB::table('accounts')->insert([
            'name' => 'Jeff',
            'email' => 'trainer15@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 2,
            'description' => "Introducing Jeff, a committed fitness professional with a focus on UniFit's Maintain Weight (Increase Overall Fitness Health) program. Jeff is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Jeff is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><a href='https://www.instagram.com/jonathanbryanw/'>Click here to see Trainer's social media.</a><br><br><b>Contacts:</b><br>+62 132 132 132<br>jeff@email.com",
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-15.png'
        ]);
        DB::table('accounts')->insert([
            'name' => 'John',
            'email' => 'trainer16@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 2,
            'description' => "Introducing John, a committed fitness professional with a focus on UniFit's Maintain Weight (Increase Overall Fitness Health) program. John is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. John is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><a href='https://www.instagram.com/jonathanbryanw/'>Click here to see Trainer's social media.</a><br><br><b>Contacts:</b><br>+62 132 132 132<br>john@email.com",
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-16.png'
        ]);
        DB::table('accounts')->insert([
            'name' => 'Luke',
            'email' => 'trainer17@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 2,
            'description' => "Introducing Luke, a committed fitness professional with a focus on UniFit's Maintain Weight (Increase Overall Fitness Health) program. Luke is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Luke is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><a href='https://www.instagram.com/jonathanbryanw/'>Click here to see Trainer's social media.</a><br><br><b>Contacts:</b><br>+62 132 132 132<br>luke@email.com",
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-17.png'
        ]);
        DB::table('accounts')->insert([
            'name' => 'Jason',
            'email' => 'trainer18@email.com',
            'password' => bcrypt("12345678"),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
            'role_id' => 3,
            'program_id' => 2,
            'description' => "Introducing Jason, a committed fitness professional with a focus on UniFit's Maintain Weight (Increase Overall Fitness Health) program. Jason is dedicated to assisting clients on their journey to better health and well-being. He has years of experience and a passion for helping people reach their fitness goals. His area of specialization is designing individualized exercise programs that emphasize a well-balanced mix of aerobic, resistance, and flexibility exercises, helping clients maintain a healthy weight while enhancing overall fitness levels. Jason is the ideal companion to encourage and motivate you on your journey to optimum fitness and wellness because to his approachable and upbeat personality.
            <br><br><a href='https://www.instagram.com/jonathanbryanw/'>Click here to see Trainer's social media.</a><br><br><b>Contacts:</b><br>+62 132 132 132<br>jason@email.com",
            'category' => 'PT Foundation Programme;MMA Trainer;Pad Master Course - Muaythai',
            'image' => 'trainer-18.png'
        ]);
    }
}
