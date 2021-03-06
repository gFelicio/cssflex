<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 500; $i++)
        {
            App\User::create(
                [
                    'name' => $faker->name,
                    'email' => $faker->email,
                    'password' => bcrypt('secret')
                ]
            );
        }
    }
}
