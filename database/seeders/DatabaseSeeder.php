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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin12345'), // password
        ]);

        \App\Models\Number::create([
            'num1' => 0,
            'num2' => 0,
            'num3' => 0,
            'num4' => 0,
            'num5' => 0,
            'num6' => 0,
            'num7' => 0,
            'num8' => 0,
        ]);
    }
}
