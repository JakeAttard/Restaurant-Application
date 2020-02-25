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
            'title' => 'Starters',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum numquam, iusto iure debitis, porro ipsa temporibus voluptates qui praesentium obcaecati impedit, sequi quod quos fuga? Voluptatum ex animi error totam!',
            'image_url' => 'img/startersImg.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Burgers',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum numquam, iusto iure debitis, porro ipsa temporibus voluptates qui praesentium obcaecati impedit, sequi quod quos fuga? Voluptatum ex animi error totam!',
            'image_url' => 'img/burgerImg.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Entrees',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum numquam, iusto iure debitis, porro ipsa temporibus voluptates qui praesentium obcaecati impedit, sequi quod quos fuga? Voluptatum ex animi error totam!',
            'image_url' => 'img/entreeImg.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Sides',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum numquam, iusto iure debitis, porro ipsa temporibus voluptates qui praesentium obcaecati impedit, sequi quod quos fuga? Voluptatum ex animi error totam!',
            'image_url' => 'img/sideImg.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Deserts',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum numquam, iusto iure debitis, porro ipsa temporibus voluptates qui praesentium obcaecati impedit, sequi quod quos fuga? Voluptatum ex animi error totam!',
            'image_url' => 'img/desertImg.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
