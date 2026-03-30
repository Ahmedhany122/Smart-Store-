<?php

namespace Database\Seeders;

// use App\Models\User

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */

public function run()
{
    Product::create([
        'name' => 'iPhone 13',
        'description' => 'iPhone 13 with A15 chip, 128GB',
        'price' => 1000,
        'image' => 'https://via.placeholder.com/200'
    ]);

    Product::create([
        'name' => 'Samsung S21',
        'description' => 'Samsung S21 with 8GB RAM, 128GB Storage',
        'price' => 900,
        'image' => 'https://via.placeholder.com/200'
    ]);

    Product::create([
        'name' => 'Dell Laptop',
        'description' => 'Dell Inspiron 15, i7, 16GB RAM, 512GB SSD',
        'price' => 1500,
        'image' => 'https://via.placeholder.com/200'
    ]);
}
}
