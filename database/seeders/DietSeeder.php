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
            'name' => 'Quinoa Salad with Grilled Chicken Meal Prep',
            'program_id' => 1,
            'description' => 'Try this simple and healthy meal prep recipe for weight loss: Quinoa Salad with Grilled Chicken and Mixed Vegetables.<br>Recipe Guide:
            <ol>
                <li>Grill lean chicken breasts with herbs and spices.</li>
                <li>Cook quinoa and mix it with cherry tomatoes, cucumbers, bell peppers, and red onions.</li>
                <li>Prepare a light vinaigrette using olive oil, lemon juice, and a touch of honey.</li>
                <li>Toss everything together and divide into meal prep containers.</li>
                <li>Enjoy this protein-packed Quinoa Salad with Grilled Chicken and Mixed Vegetables for a healthy and satisfying weight loss meal throughout the week.</li>
            </ol>',
            'image' => 'diet-01.png',
            'category' => 'Meal Prep Recipe',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('diets')->insert([
            'name' => 'Restaurant Recommendation',
            'program_id' => 1,
            'description' => "Choose restaurants that serve wholesome meals when you're out to eat, when it comes to dining out and aiming to lose weight, selecting restaurants that offer wholesome meals is key.
            If you're looking for a restaurant that caters to your weight loss fitness program, we recommend trying <b>'Fit Bites Cafe.'</b><br><br>They offer a variety of healthy and nutritious options that are specifically designed to support weight loss goals. Their menu includes delicious salads with lean protein options, vegetable stir-fries with minimal oil, and grilled fish dishes with steamed vegetables. They also have a range of fresh smoothies and juices to keep you hydrated and energized. With their focus on wholesome ingredients and balanced meals, Fit Bites Cafe is the perfect choice for a guilt-free dining experience while following your weight loss journey.",
            'image' => 'diet-02.png',
            'category' => 'Restaurant Recommendation',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('diets')->insert([
            'name' => 'Online Order Recommendation',
            'program_id' => 1,
            'description' => "Consider placing online orders for portion-controlled meals from meal delivery services that offer a variety of balanced options.<br><ol>
            <li>Calculate Caloric Needs: Determine your daily caloric needs based on weight, height, age, and activity level.</li>
            <li>Balanced Macronutrients: Choose a diet plan with a balanced ratio of carbohydrates, proteins, and healthy fats.</li>
            <li>Portion Control: Opt for portion-controlled meals or meal plans to manage calorie intake effectively.</li>
            <li>Nutrient-Dense Foods: Focus on nutrient-rich foods like fruits, vegetables, whole grains, lean proteins, and healthy fats.</li>
            <li>Personalization and Flexibility: Look for a program that offers personalized meal plans and allows flexibility in food choices.</li>
            <li>Professional Guidance: Seek programs with guidance from registered dietitians or nutrition experts.</li>
            <li>Online Ordering Convenience: Choose a program with online ordering and delivery services for convenience.</li>
            <li>Consultation: Consult a healthcare professional or registered dietitian before starting any weight loss program.</li></ol>",
            'image' => 'diet-03.png',
            'category' => 'Online Order Recommendation',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('diets')->insert([
            'name' => 'Rice Bowl with Steamed Chicken and Vegetables Meal Prep',
            'program_id' => 3,
            'description' => "Experience the goodness of this easy and nutritious meal prep recipe for gain muscle: Rice Bowl with Steamed Chicken and Vegetables.<br>Recipe Guide:<ol>
            <li>Cook the rice: Prepare the desired amount of rice according to the package instructions or your preferred cooking method. Allow it to cool before portioning it into meal prep containers.</li>
            <li>Steam the chicken: Season boneless, skinless chicken breasts with your preferred spices and herbs. Place the chicken breasts in a steamer or steaming basket and cook until they are fully cooked and no longer pink in the center. Allow the chicken to cool before slicing it into strips or bite-sized pieces.</li>
            <li>Prepare the corn: If using fresh corn on the cob, shuck the corn and remove the silk. Boil the corn in a pot of salted water for about 5-7 minutes until tender. Alternatively, you can use canned or frozen corn. Drain and rinse canned corn or thaw frozen corn.</li>
            <li>Chop the tomato: Wash and dice fresh tomatoes into small pieces. You can remove the seeds if desired.</li>
            <li>Assemble the meal prep containers: In each meal prep container, portion out a serving of cooked rice. Add a serving of steamed chicken on top. Include a portion of cooked corn and diced tomatoes. Seal the containers and store them in the refrigerator for later consumption.</li>
            </ol>",
            'image' => 'diet-04.png',
            'category' => 'Meal Prep Recipe',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('diets')->insert([
            'name' => 'Restaurant Recommendation',
            'program_id' => 3,
            'description' => "Locate eateries that serve lean meats like beef or fish with whole grain carbs and steamed veggies if you're looking for protein-rich selections. 
            When it comes to dining out and aiming to gain muscle, we would recommend the <b>'Fit Bites Grill & Eatery.'</b><br><br>
            Fit Bites specializes in serving delicious meals designed to support muscle gain and fitness goals. Their menu offers a variety of options that are both healthy and nutritious. You can choose from lean proteins such as grilled chicken breast, turkey, and lean cuts of beef. They also provide a selection of complex carbohydrates like brown rice, quinoa, and sweet potatoes to fuel your workouts. Additionally, Fit Bites incorporates fresh vegetables and salads into their meals to ensure a balanced and nutrient-rich dining experience. The restaurant allows you to customize your portion sizes and select your preferred protein-to-carbohydrate ratio. They focus on healthier cooking methods such as grilling, baking, and steaming to minimize the use of oil. The staff at Fit Bites are knowledgeable and can assist with dietary preferences and modifications. Whether you're looking for a post-workout meal or a well-balanced dinner, Fit Bites Grill & Eatery is a great choice to support your gain muscle goals while enjoying a satisfying dining experience.",
            'image' => 'diet-05.png',
            'category' => 'Restaurant Recommendation',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('diets')->insert([
            'name' => 'Online Order Recommendation',
            'program_id' => 3,
            'description' => "To help you achieve your muscle-building objectives, use online order services to locate pre-packaged meals or protein-focused dishes like chicken breast with brown rice and steamed broccoli. When looking to gain muscle, we would recommend 'MuscleFuel' as an online order recommendation for a gain muscle fitness diet program. MuscleFuel offers:<ol>
            <li>Wide variety of meals: They provide a diverse menu with a range of options to suit different dietary preferences and calorie requirements.</li>
            <li>Customizable meals: You can customize your order by selecting from a variety of lean protein sources such as grilled chicken, salmon, or lean beef, along with complex carbohydrates like brown rice, quinoa, or sweet potatoes.</li>
            <li>Balanced macronutrients: MuscleFuel ensures that their meals have a balanced ratio of carbohydrates, proteins, and healthy fats, which is crucial for muscle gain and recovery.</li>
            <li>Portion control: Their meals are portion-controlled, helping you manage your calorie intake effectively and maintain a balanced diet.</li>
            <li>Nutrient-rich ingredients: They prioritize nutrient-dense foods by incorporating plenty of fruits, vegetables, whole grains, and lean proteins in their meal options.</li>
            <li>Convenient online ordering: MuscleFuel's online ordering platform allows you to easily browse their menu, select your desired meals, and place your order from the comfort of your home.</li>
            <li>Home delivery: They offer home delivery services, ensuring that your meals are conveniently delivered to your doorstep.</li>
            </ol>",
            'image' => 'diet-06.png',
            'category' => 'Online Order Recommendation',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('diets')->insert([
            'name' => 'Tofu Stir-Fry with Colorful Vegetables and Whole Grains Meal Prep',
            'program_id' => 2,
            'description' => "Keep your weight in check with meal prep recipes that emphasize balanced nutrition like this simple and healthy meal: Tofu Stir-Fry with Colorful Vegetables and Whole Grains.<br>Recipe Guide:
            <ol>
                <li>Choose firm tofu: Select firm tofu as your protein base. It's a great plant-based option that is rich in protein and low in fat.</li>
                <li>Marinate the tofu: Create a marinade using ingredients like soy sauce, garlic, ginger, and a touch of maple syrup or honey for flavor. Marinate the tofu for at least 30 minutes to allow the flavors to penetrate.</li>
                <li>Prep the vegetables: Wash and chop a variety of vegetables such as broccoli, bell peppers, carrots, and snap peas. These provide essential nutrients and add color to your meal.</li>
                <li>Cook a whole grain: Prepare a batch of quinoa, brown rice, or whole wheat couscous as your complex carbohydrate source. Cook it according to the package instructions.</li>
                <li>Sauté the tofu and vegetables: Heat a non-stick pan and cook the marinated tofu until it becomes golden and slightly crispy. Add the chopped vegetables and stir-fry until they are tender-crisp.</li>
                <li>Portion and pack: Divide the cooked tofu, vegetables, and whole grains into meal prep containers. Ensure each container has a balanced portion of all the components.</li>
                <li>Store and refrigerate: Seal the containers and refrigerate them for later consumption. Enjoy these delicious and nutritious meals throughout the week.</li>
            </ol>",
            'image' => 'diet-07.png',
            'category' => 'Meal Prep Recipe',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('diets')->insert([
            'name' => 'Restaurant Recommendation',
            'program_id' => 2,
            'description' => "Select dining establishments that offer a wide range of healthy options, such as grilled or baked dishes with whole grain sides and fresh salads with a variety of veggies and lean proteins. 
            If you're following a fitness diet program and looking for a restaurant that aligns with your goals, we recommend trying out <b>'FitBowl Eatery.'</b><br><br>
            This restaurant offers a diverse selection of delicious and nutritious options tailored to support weight maintenance and overall fitness health. From protein-packed salads with tofu and fresh vegetables to flavorful stir-fries prepared with minimal oil, their menu provides a range of satisfying choices. You can also indulge in grilled tofu dishes paired with steamed vegetables for a well-balanced meal. Additionally, they offer refreshing smoothies and juices made from fresh ingredients, keeping you hydrated and revitalized. With FitBowl Eatery's commitment to providing wholesome ingredients and balanced meals, you can enjoy a guilt-free dining experience while staying on track with your fitness goals.",
            'image' => 'diet-08.png',
            'category' => 'Restaurant Recommendation',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('diets')->insert([
            'name' => 'Online Order Recommendation',
            'program_id' => 2,
            'description' => "Investigate your alternatives for ordering healthful food from restaurants online, such as a well-balanced platter of grilled chicken, roasted veggies, and a small serving of whole grain pasta or quinoa. When it comes to maintaining weight and improving overall fitness, exploring online ordering options for healthy food is a great choice. 
            <br><ol>
                <li>Variety of Healthy Options: Look for online platforms that offer a wide range of healthy food choices to suit your dietary preferences. Having options such as lean proteins, whole grains, fresh vegetables, and healthy fats ensures a balanced and nutrient-rich meal.</li>
                <li>Customizable Meals: Opt for online services that allow you to customize your meals according to your specific dietary needs. Being able to modify ingredients or portion sizes ensures that you can adhere to your calorie and macronutrient requirements.</li>
                <li>Calorie and Nutrient Information: Choose platforms that provide detailed nutritional information for each menu item. This allows you to make informed choices and track your calorie intake more effectively.</li>
                <li>Specialized Menus: Look for online vendors that specialize in fitness-friendly menus or cater to specific dietary preferences such as vegetarian, vegan, gluten-free, or low-carb options. This ensures you can find meals that align with your goals and preferences.</li>
                <li>Transparent Ingredients: Prioritize platforms that emphasize the use of high-quality and wholesome ingredients. Knowing that the meals are made from fresh and nutritious ingredients provides assurance in terms of food quality and overall health benefits.</li>
                <li>Convenient Delivery or Pickup: Select online services that offer convenient delivery or pickup options. Ensuring your meals are easily accessible and can be delivered to your doorstep or collected nearby saves time and enhances convenience.</li>
            </ol>",
            'image' => 'diet-09.png',
            'category' => 'Online Order Recommendation',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
    }
}
