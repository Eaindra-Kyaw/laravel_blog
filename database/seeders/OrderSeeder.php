<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create([
    'order_number' => 'ORD001',
    'product_id' => 1,
    'quantity' => 2
]);

Order::create([
    'order_number' => 'ORD002',
    'product_id' => 2,
    'quantity' => 5
]);

Order::create([
    'order_number' => 'ORD003',
    'product_id' => 3,
    'quantity' => 4
]);

    }
}
