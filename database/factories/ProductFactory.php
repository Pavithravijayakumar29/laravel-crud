<?php

namespace Database\Factories;

use App\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        $faker = \Faker\Factory::create();

        return [
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'number' => $faker->numberBetween(100000, 2000000),
            'product_name' => $faker->productName,
        ];
    }
}

