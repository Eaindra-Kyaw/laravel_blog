<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::updateOrCreate(
    ['email' => 'test@example.com'], // look for existing
    [
        'name' => 'Test User',
        'password' => Hash::make('password'),
    ]
);

User::updateOrCreate(
    ['email' => 'admin@example.com'],
    [
        'name' => 'Admin User',
        'password' => Hash::make('password'),
    ]
);
    }
}
