<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
           'first_name' =>'Twinkle',
           'last_name' => 'Bhatt',
           'details'  => 'Fill',
           'phone_number' => '98765423',
           'status' => 'student',
        ]);
    }

}

