<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'adminfrs',
            'password' => Hash::make('admin123frs'),
        ]);
        User::create([
            'username' => 'dosentes',
            'password' => Hash::make('dosen123tes'),
        ]);
    }
}
