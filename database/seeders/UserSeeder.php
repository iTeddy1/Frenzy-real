<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Trung',
            'last_name' => 'Duy',
            'email' => 'teddy@example.com',
            'password' => '123123123',
            'role' => 'user', // Assign the role as admin
        ]);
    }
}
