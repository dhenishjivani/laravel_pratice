<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Demo;
use Faker\Factory as Faker;
class demoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // $hobbiesVal = implode(",", $request['hobbies']);

        // Insert Query che aa laravel ma 
        $faker = Faker::create();
        for($i=1 ; $i<100; $i++) {

            $obj = new Demo;
            $obj->name = $faker->name;
            $obj->email = $faker->email;
            $obj->address = $faker->address;
            $obj->dob = $faker->date;
            $obj->hobbies = 'Dance';
            $obj->gender = 'Male';
            $obj->state = $faker->state;
            $obj->city = $faker->city;
            $obj->save();
        }
    }
}
