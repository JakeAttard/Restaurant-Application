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
            'site_title' => 'Jakes Burgers',
            'logo_image_url' => 'https://webstockreview.net/images/clipart-restaurant-restaurant-logo-5.png',
            'address_1' => '234 Main Street',
            'address_2' => '',
            'city' => 'New York',
            'state' => 'NY',
            'zipcode' => '11385',
            'phone_number' => '341-231-4545',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
