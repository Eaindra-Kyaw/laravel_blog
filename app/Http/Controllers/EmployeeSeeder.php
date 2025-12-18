<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        Employee::create([
            'name' => 'Aung Aung',
            'age' => 25,
            'position' => 'Sale',
        ]);

        Employee::create([
            'name' => 'Mg Mg',
            'age' => 30,
            'position' => 'Manager',
        ]);

        Employee::create([
            'name' => 'Hla Hla',
            'age' => 28,
            'position' => 'Sale',
        ]);
    }
}
