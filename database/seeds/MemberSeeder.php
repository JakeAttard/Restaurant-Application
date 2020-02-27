<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'fname' => 'Jake',
            'lname' => 'Attard',
            'email' => 'jake@gmail.com',
            'phone_number' => '0487760661',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
