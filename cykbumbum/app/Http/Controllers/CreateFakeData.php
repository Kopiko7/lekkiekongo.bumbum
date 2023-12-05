<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Faker\Factory as Faker;

class CreateFakeData extends Controller
{
    public function Show(){
        // $faker = Faker::create('pl_PL');
        $faker = Faker::create();
        $users = [];
    
        for ($i = 0; $i <5; $i++)
        {
            $users[] = [
                'fName' => $faker->firstName,
                'lName' => $faker->lastName,
                'email' => $faker->email,
                'password' => bcrypt($faker->password)
            ];
        }
        print_r($users[0]);
    }
}
