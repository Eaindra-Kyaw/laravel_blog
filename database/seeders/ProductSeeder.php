<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Employee;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $product1 = \App\Models\Product::create(['name'=>'Laptop']);
        $product2 = \App\Models\Product::create(['name'=>'Mouse']);

        $employee = \App\Models\Employee::first();
        $employee->products()->attach([$product1->id,$product2->id]);
    }
}

