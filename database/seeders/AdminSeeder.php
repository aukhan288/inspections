<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Asadeullah khan',
            'email' => 'aukhan288@gmail.com',
            'password' => Hash::make('Admin12#'), // Change this to a strong password
            'role_id' => 1, // Assuming role_id 1 = Admin
        ]);
    }
}
