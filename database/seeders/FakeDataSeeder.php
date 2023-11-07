<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FakeDataSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('Products')->insert([
                'first_name' => $faker->name,
                'last_name' => $faker->name,
                'number' => $faker->numberBetween(1, 100),
                'products'=> $faker->name,8
                // Add more columns as needed
            ]);
        }
    }
}
