<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Hoa',
            'last_name' => 'Tran',
            'username' => 'admin', // Set your desired admin username here
            'email' => 'admin@example.com', // Set your desired admin email here
            'password' => Hash::make('12345678'), // Set your desired admin password here
            'is_admin' => true,
            'is_active' => true,
        ]);
    }
}
