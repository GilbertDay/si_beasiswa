<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'NIM' => '72200391',
            'role' => 'admin',
            'no_hp' => '082144034082',
            'email_verified_at' => now(),
            'password' => Hash::make('admin123'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Mahasiswa',
            'NIM' => '72200390',
            'role' => 'mahasiswa',
            'no_hp' => '082134923123',
            'email_verified_at' => now(),
            'password' => Hash::make('user123'),
            'remember_token' => Str::random(10),
        ]);
    }
}
