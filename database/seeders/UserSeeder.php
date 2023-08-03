<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Roby Karti S',
            'email' => 'su@email.com',
            'user_role' => 1,
            'user_role_name' => 'su',
            'password' => Hash::make('123')
        ]);
        User::create([
            'name' => 'Putri Yulia Armiyanti',
            'email' => 'putri@email.com',
            'user_role' => 2,
            'user_role_name' => 'admin',
            'password' => Hash::make('123')
        ]);
        User::create([
            'name' => 'Alyona Putri Bupar',
            'email' => 'yona@email.com',
            'user_role' => 3,
            'user_role_name' => 'user',
            'password' => Hash::make('123')
        ]);
    }
}
