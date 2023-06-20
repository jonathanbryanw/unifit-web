<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class DietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diets')->insert([
            'name' => 'Quinoa Salad with Grilled Chicken',
            'program_id' => 1,
            'description' => 'Try this simple and healthy meal prep recipe for weight loss: Quinoa Salad with Grilled Chicken and Mixed Vegetables. Start by grilling lean chicken breasts seasoned with herbs and spices. In a separate bowl, combine cooked quinoa with a variety of colorful vegetables like cherry tomatoes, cucumbers, bell peppers, and red onions. Drizzle the salad with a light vinaigrette made from olive oil, lemon juice, and a touch of honey. Toss everything together, then divide into individual meal prep containers. This nutritious and satisfying salad is packed with protein, fiber, and essential nutrients, making it a perfect option to support your weight loss goals. Enjoy it as a refreshing and filling meal throughout the week!',
            'image' => 'diet-01.png',
            'category' => 'Meal Prep Recipe',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('diets')->insert([
            'name' => 'Restaurant Recommendation',
            'program_id' => 1,
            'description' => "Choose restaurants that serve wholesome meals when you're out to eat, including grilled fish or chicken with steamed veggies or salads with simple dressings.",
            'image' => 'diet-02.png',
            'category' => 'Restaurant Recommendation',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('diets')->insert([
            'name' => 'Online Order Recommendation',
            'program_id' => 1,
            'description' => "Consider placing online orders for portion-controlled meals from meal delivery services that offer a variety of balanced options, such as lean protein with whole-grain sides or vegetable stir-fries.",
            'image' => 'diet-03.png',
            'category' => 'Online Order Recommendation',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('diets')->insert([
            'name' => 'Meal Prep Recipe',
            'program_id' => 3,
            'description' => "With meal prep ideas that include high-protein foods like grilled steak with quinoa and roasted sweet potatoes or a protein-rich smoothie bowl with Greek yogurt and mixed berries, you may accelerate your muscle-building efforts.",
            'image' => 'diet-04.png',
            'category' => 'Meal Prep Recipe',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('diets')->insert([
            'name' => 'Restaurant Recommendation',
            'program_id' => 3,
            'description' => "Locate eateries that serve lean meats like beef or fish with whole grain carbs and steamed veggies if you're looking for protein-rich selections.",
            'image' => 'diet-05.png',
            'category' => 'Restaurant Recommendation',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('diets')->insert([
            'name' => 'Online Order Recommendation',
            'program_id' => 3,
            'description' => "To help you achieve your muscle-building objectives, use online order services to locate pre-packaged meals or protein-focused dishes like chicken breast with brown rice and steamed broccoli.",
            'image' => 'diet-06.png',
            'category' => 'Online Order Recommendation',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('diets')->insert([
            'name' => 'Meal Prep Recipe',
            'program_id' => 2,
            'description' => "Keep your weight in check with meal prep recipes that emphasize balanced nutrition, including grilled salmon fillet with mixed greens and a side of quinoa or a stir-fry of vegetables with tofu or lean meats.",
            'image' => 'diet-07.png',
            'category' => 'Meal Prep Recipe',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('diets')->insert([
            'name' => 'Restaurant Recommendation',
            'program_id' => 2,
            'description' => "Select dining establishments that offer a wide range of healthy options, such as grilled or baked dishes with whole grain sides and fresh salads with a variety of veggies and lean proteins.",
            'image' => 'diet-08.png',
            'category' => 'Restaurant Recommendation',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('diets')->insert([
            'name' => 'Online Order Recommendation',
            'program_id' => 2,
            'description' => "Investigate your alternatives for ordering healthful food from restaurants online, such as a well-balanced platter of grilled chicken, roasted veggies, and a small serving of whole grain pasta or quinoa.",
            'image' => 'diet-09.png',
            'category' => 'Online Order Recommendation',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
    }
}
