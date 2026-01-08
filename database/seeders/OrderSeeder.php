<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Employee;
use App\Models\Category;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        $employee = Employee::first();;

        $category = Category::first();

        if ($employee && $category) {
            Order::create([
                'employee_id' => $employee->id,
                'category_id' => $category->id,
                'order_no' => 'ORD001',
            ]);

            Order::create([
                'employee_id' => $employee->id,
                'category_id' => $category->id,
                'order_no' => 'ORD002',
            ]);
        }
    }
}
