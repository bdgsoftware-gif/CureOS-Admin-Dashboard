<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'status' => 'active',
        ]);
        $admin->roles()->attach(Role::where('role_name', 'Admin')->first());

        $doctor = User::create([
            'name' => 'Doctor User',
            'email' => 'doctor@example.com',
            'password' => Hash::make('password'),
            'status' => 'active',
        ]);
        $doctor->roles()->attach(Role::where('role_name', 'Doctor')->first());

        $staff = User::create([
            'name' => 'Staff User',
            'email' => 'staff@example.com',
            'password' => Hash::make('password'),
            'status' => 'active',
        ]);
        $staff->roles()->attach(Role::where('role_name', 'Staff')->first());
    }
}
