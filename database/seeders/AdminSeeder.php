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

        User::create([
            'name' => 'Yasir Khan',
            'email' => 'yasirkhan@gmail.com',
            'password' => Hash::make('Admin12#'),
            'role_id' => 2, // Adjust the role ID as needed
        ]);

        User::create([
            'name' => 'Aden',
            'email' => 'adenkhan888@gmail.com',
            'password' => Hash::make('Admin12#'),
            'role_id' => 3, // Adjust the role ID as needed
        ]);
    }
}
