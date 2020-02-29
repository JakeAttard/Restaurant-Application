<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SeoSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seo_settings')->insert([
            'description' => 'Jakes Burgers is a multinational chain of hamburger fast food restaurants.',
            'keywords' => 'Jakes Burgers, Burgers, Local, Best Burgers in town',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
