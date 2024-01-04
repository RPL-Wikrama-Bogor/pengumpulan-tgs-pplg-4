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
        User::Create([
            'name' => 'Administrator',
            'email' => 'apotek_admin@gmail.com',
            'password' => Hash::make('adminapotek'),
            'role' => 'Admin'
        ]);
    }
}
