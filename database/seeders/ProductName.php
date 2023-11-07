<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// model
use App\Models\Product;

class ProductName extends Seeder
{

    public function run(): void
    {
        Product::create([
            'first_name' => 'ram',
            'last_name' => 'kumar',
            'number' => 123456789,
            'products' => 'smart watch',
        ]);
    }
}
