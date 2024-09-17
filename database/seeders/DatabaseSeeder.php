<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@laravel.test',
            'password' => Hash::make('secret'),
            'role' => 'admin',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Employee',
            'email' => 'employee@laravel.test',
            'password' => Hash::make('secret'),
            'role' => 'employee',
        ]);
    }
}
