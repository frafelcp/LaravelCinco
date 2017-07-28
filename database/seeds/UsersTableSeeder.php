<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 0; $i < 30; $i++)
        {
            $id = DB::table('users')->insertGetId([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->unique()->email,
                'password' => bcrypt('1234'),
                'type' => 'user'
            ]);

            DB::table('user_profiles')->insert([
                'user_id' => $id,
                'bio' => $faker->paragraph(rand(2, 5)),
                'twitter' => 'http://www.'. $faker->domainName,
                'website' => 'http://www.twitter.com/'. $faker->userName,
                'birthdate' => $faker->dateTimeBetween('-45 years', '-15 years')->format('Y-m-d')
            ]);
        }        
    }
}
