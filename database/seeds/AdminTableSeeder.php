<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Felix',
            'last_name' => 'Castro',
            'email' => 'fc@yopmail.com',
            'password' => bcrypt('123456'),
            'type' => 'admin'
        ]);

        DB::table('user_profiles')->insert([
            'user_id' => 1,
            'birthdate' => '1993/10/03'
        ]);
    }
}
