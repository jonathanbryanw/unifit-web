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
            'image' => 'diet1.png',
            'category' => 'Meal Prep',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
    }
}
