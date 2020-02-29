<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SocialSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_settings')->insert([
            'facebook_url' => 'https://www.facebook.com/JakeChristopherAttard',
            'instagram_url' => 'https://www.instagram.com/jakecattard/?hl=en',
            'twitter_url' => 'https://twitter.com/jakecattard?lang=en',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
