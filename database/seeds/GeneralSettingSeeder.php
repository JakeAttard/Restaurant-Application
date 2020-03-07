<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_settings')->insert([
            'site_title' => 'Hungry Jacks',
            'logo_image_url' => 'https://webstockreview.net/images/clipart-restaurant-restaurant-logo-5.png',
            'address_1' => '35 Old Coach Road',
            'address_2' => '',
            'city' => 'Upper Coomera',
            'state' => 'Queensland',
            'zipcode' => '4209',
            'phone_number' => '(07) 5580 1526',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
