<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\Category::create(['name'=>'Electronics']);
        \App\Models\Category::create(['name'=>'Furniture']);
    }
}
