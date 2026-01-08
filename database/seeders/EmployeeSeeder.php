<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;
use App\Models\Order;
use App\Models\Category;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        $category1 = Category::create(['name' => 'Electronics']);
        $category2 = Category::create(['name' => 'Books']);

        $employee = Employee::create(['name' => 'Alice']);

        Order::create(['employee_id' => $employee->id, 'category_id' => $category1->id, 'order_no' => 'ORD001']);
        Order::create(['employee_id' => $employee->id, 'category_id' => $category2->id, 'order_no' => 'ORD002']);
    }
}
