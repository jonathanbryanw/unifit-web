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
            'description' => "Choose restaurants that serve wholesome meals when you're out to eat, including grilled fish or chicken with steamed veggies or salads with simple dressings. When it comes to dining out and aiming to lose weight, selecting restaurants that offer wholesome meals is key. Opt for establishments that prioritize nutritious options like grilled fish or chicken paired with steamed vegetables. These protein-rich dishes provide satiety while keeping calorie intake in check. Additionally, opt for salads with simple dressings, such as olive oil and vinegar, to avoid excess calories from heavy dressings. By choosing these types of meals, you can enjoy eating out while maintaining a balanced and calorie-conscious approach to support your weight loss goals.",
            'image' => 'diet-02.png',
            'category' => 'Restaurant Recommendation',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('diets')->insert([
            'name' => 'Online Order Recommendation',
            'program_id' => 1,
            'description' => "Consider placing online orders for portion-controlled meals from meal delivery services that offer a variety of balanced options, such as lean protein with whole-grain sides or vegetable stir-fries. If your goal is to lose weight, a convenient and effective option is to place online orders for portion-controlled meals from reputable meal delivery services. These services often offer a wide range of balanced options, allowing you to choose meals that align with your dietary needs. Look for meals that include lean protein sources like grilled chicken or fish, paired with whole-grain sides or vegetable stir-fries. These meals provide the necessary nutrients while keeping portion sizes in check, making it easier for you to manage your calorie intake and work towards your weight loss goals.",
            'image' => 'diet-03.png',
            'category' => 'Online Order Recommendation',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('diets')->insert([
            'name' => 'Meal Prep Recipe',
            'program_id' => 3,
            'description' => "With meal prep ideas that include high-protein foods like grilled steak with quinoa and roasted sweet potatoes or a protein-rich smoothie bowl with Greek yogurt and mixed berries, you may accelerate your muscle-building efforts. To support your muscle-building goals, consider incorporating meal prep recipes that prioritize high-protein foods. For example, prepare grilled steak paired with quinoa and roasted sweet potatoes, as this combination offers a rich source of protein, complex carbohydrates, and essential nutrients. Additionally, you can create a protein-packed smoothie bowl using Greek yogurt and mixed berries, providing the necessary amino acids for muscle repair and growth. By incorporating these high-protein meal prep ideas into your routine, you can fuel your body effectively and maximize your muscle-building potential.",
            'image' => 'diet-04.png',
            'category' => 'Meal Prep Recipe',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('diets')->insert([
            'name' => 'Restaurant Recommendation',
            'program_id' => 3,
            'description' => "Locate eateries that serve lean meats like beef or fish with whole grain carbs and steamed veggies if you're looking for protein-rich selections. When it comes to dining out and aiming to gain muscle, prioritize restaurants that offer protein-rich options. Look for eateries that serve lean meats such as beef or fish, paired with whole grain carbohydrates and steamed vegetables. These protein-packed meals provide the necessary nutrients for muscle growth and repair, while whole grain carbs offer sustained energy. Opting for these types of dishes when dining out can support your muscle-building efforts by providing high-quality protein sources and balanced nutrition.",
            'image' => 'diet-05.png',
            'category' => 'Restaurant Recommendation',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('diets')->insert([
            'name' => 'Online Order Recommendation',
            'program_id' => 3,
            'description' => "To help you achieve your muscle-building objectives, use online order services to locate pre-packaged meals or protein-focused dishes like chicken breast with brown rice and steamed broccoli. When looking to gain muscle, utilizing online order services can be a valuable tool in finding pre-packaged meals or protein-focused dishes. Opt for options that include lean protein sources such as chicken breast, paired with nutrient-dense sides like brown rice and steamed broccoli. These convenient and pre-portioned meals provide the necessary protein and balanced nutrients to support muscle growth and recovery. By leveraging online ordering platforms, you can easily access meals tailored to your muscle-building goals, saving time and ensuring you have the right fuel to support your fitness journey.",
            'image' => 'diet-06.png',
            'category' => 'Online Order Recommendation',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('diets')->insert([
            'name' => 'Meal Prep Recipe',
            'program_id' => 2,
            'description' => "Keep your weight in check with meal prep recipes that emphasize balanced nutrition, including grilled salmon fillet with mixed greens and a side of quinoa or a stir-fry of vegetables with tofu or lean meats. Maintaining a healthy weight and overall fitness requires meal prep recipes that focus on balanced nutrition. Consider preparing grilled salmon fillet served with mixed greens and a side of quinoa. This combination offers a good balance of lean protein, fiber, and essential nutrients. Alternatively, you can create a stir-fry using a variety of vegetables, tofu, or lean meats. This option provides a range of vitamins, minerals, and protein. By incorporating these meal prep recipes into your routine, you can support your overall health and maintain a stable weight while enjoying delicious and nourishing meals.",
            'image' => 'diet-07.png',
            'category' => 'Meal Prep Recipe',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('diets')->insert([
            'name' => 'Restaurant Recommendation',
            'program_id' => 2,
            'description' => "Select dining establishments that offer a wide range of healthy options, such as grilled or baked dishes with whole grain sides and fresh salads with a variety of veggies and lean proteins. When aiming to maintain weight and improve overall fitness, it's important to choose restaurants that provide a variety of healthy options. Look for dining establishments that offer grilled or baked dishes, which are generally lower in calories compared to fried or heavily processed alternatives. Pair these dishes with whole grain sides, such as brown rice or quinoa, for added fiber and sustained energy. Additionally, opt for fresh salads with a diverse range of vegetables and lean proteins, like grilled chicken or fish. By selecting these types of nutritious options when dining out, you can support your weight maintenance goals while enjoying a satisfying and balanced meal.",
            'image' => 'diet-08.png',
            'category' => 'Restaurant Recommendation',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('diets')->insert([
            'name' => 'Online Order Recommendation',
            'program_id' => 2,
            'description' => "Investigate your alternatives for ordering healthful food from restaurants online, such as a well-balanced platter of grilled chicken, roasted veggies, and a small serving of whole grain pasta or quinoa. When it comes to maintaining weight and improving overall fitness, exploring online ordering options for healthy food is a great choice. Look for restaurants that offer well-balanced meals like a platter of grilled chicken, roasted veggies, and a small portion of whole grain pasta or quinoa. This combination provides lean protein, fiber, and complex carbohydrates to keep you satisfied and energized. By taking advantage of online ordering platforms, you can easily access nutritious meals that support your goals of maintaining a healthy weight and enhancing overall fitness.",
            'image' => 'diet-09.png',
            'category' => 'Online Order Recommendation',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
    }
}
