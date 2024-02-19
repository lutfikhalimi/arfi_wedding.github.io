<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            $publisher = new Publisher();

            $publisher->name = $faker->name;
            $publisher->email = $faker->email;
            $publisher->phone_number = '082' . $faker->randomNumber(9);
            $publisher->address = $faker->address;

            $publisher->save();
        }
    }
}
