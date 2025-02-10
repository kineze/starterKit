<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class superAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $user = User::create([
            'name' => 'Admin User',
            'email' => 'superadm@gmail.com',
            'password' => Hash::make('superadm@123321'),
        ])->assignRole('SuperAdmin'); 
    }
}
