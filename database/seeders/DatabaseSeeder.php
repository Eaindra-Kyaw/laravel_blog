<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create 3 categories
        $categories = Category::factory(3)->create();

        // Create 5 products for each category
        $categories->each(function ($category) {
            Product::factory(5)->create([
                'category_id' => $category->id
            ]);
        });

        // Create 10 orders
        Order::factory(10)->create();
    }
}
