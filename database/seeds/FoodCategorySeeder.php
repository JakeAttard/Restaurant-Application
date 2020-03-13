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
            'title' => 'starters',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum numquam, iusto iure debitis, porro ipsa temporibus voluptates qui praesentium obcaecati impedit, sequi quod quos fuga? Voluptatum ex animi error totam!',
            'image_url' => 'img/startersImg.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'burgers',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum numquam, iusto iure debitis, porro ipsa temporibus voluptates qui praesentium obcaecati impedit, sequi quod quos fuga? Voluptatum ex animi error totam!',
            'image_url' => 'img/burgerImg.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'entrees',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum numquam, iusto iure debitis, porro ipsa temporibus voluptates qui praesentium obcaecati impedit, sequi quod quos fuga? Voluptatum ex animi error totam!',
            'image_url' => 'img/entreeImg.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'sides',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum numquam, iusto iure debitis, porro ipsa temporibus voluptates qui praesentium obcaecati impedit, sequi quod quos fuga? Voluptatum ex animi error totam!',
            'image_url' => 'img/sideImg.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'deserts',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum numquam, iusto iure debitis, porro ipsa temporibus voluptates qui praesentium obcaecati impedit, sequi quod quos fuga? Voluptatum ex animi error totam!',
            'image_url' => 'img/desertImg.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'drinks',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum numquam, iusto iure debitis, porro ipsa temporibus voluptates qui praesentium obcaecati impedit, sequi quod quos fuga? Voluptatum ex animi error totam!',
            'image_url' => 'img/drinks.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
