<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'info@deepdetective.com'],
            [
                'name' => 'Chief Investigator (Admin)',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
            ]
        );
    }
}
