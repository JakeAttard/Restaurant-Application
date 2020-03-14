<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_categories')->insert([
            'title' => 'new products',
            'description' => "Find out what's flame-grilling now! Discover the latest KFC menu items and promotions. Better get to it, for a short time only.",
            'image_url' => 'img/newProducts.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'shared meals',
            'description' => "Whether you are in the mood for sharing or need to fill a ravenous hunger, try one of our famous Chicken Burgers. It's tasty value that will fill the spot.",
            'image_url' => 'img/sharedMeals.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'catering',
            'description' => "It's Kentucky Fried catering, right?",
            'image_url' => 'img/catering.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'burgers',
            'description' => "Made with 100% Aussie meat, our tender juicy chicken burgers will be difficult to resist. Try either our mouthwatering flame-grilled chicken burgers or get into the golden coating of our Tendercrisp range.",
            'image_url' => 'img/burgers.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'twisters',
            'description' => "Made with 100% Aussie chicken, our tender juicy twisters will be difficult to resist.",
            'image_url' => 'img/twisters.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'chicken',
            'description' => "Chicken buckets made of love.",
            'image_url' => 'img/chicken.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'snacks & kids meals',
            'description' => "KFC offer's a range of kids meals when you want to treat the little ones. Enjoy either a flame-grilled hamburger or cheeseburger, or crispy golden nuggets made with 100% chicken breast, with your choice of side salad or small thick cut chips and a drink. Also includes a randomly selected toy!",
            'image_url' => 'img/snacksKidMeals.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'sides & salads',
            'description' => "Tender juicy Nuggets made from 100% chicken breast, Thick Cut Chips or our craveable Onion Rings make a great addition to any KFC products. Can't decide? Get one of our Snack boxes with Thick Cut Chips. Snack time just got better.",
            'image_url' => 'img/sidesSalads.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'drinks',
            'description' => "Need to quench your thirst? KFC offers a range of refreshing choices from Coke®, Fanta®, and Sprite® favourites to Apple Juice and Water. For something extra thick, try our brain-freezing Shakes in Chocolate, Caramel, Vanilla and Strawberry.",
            'image_url' => 'img/drinks.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
