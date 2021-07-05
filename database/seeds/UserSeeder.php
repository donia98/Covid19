<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();


            $user = new User();
            $user->name = $faker->name;
            $user->email = "donia5@gmail.com";
            $user->password = bcrypt('password'); 
            $user->save();

    }
}
