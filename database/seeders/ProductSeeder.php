<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
    'name' => 'Lipstick',
    'price' => 45000,
    'employee_id' => 1
]);

        Product::create([
    'name' => 'Perfume',
    'price' => 150000,
    'employee_id' => 2
]);

Product::create([
    'name' => 'Eyeshadow',
    'price' => 65500,
    'employee_id' => 3
]);
    }
}
