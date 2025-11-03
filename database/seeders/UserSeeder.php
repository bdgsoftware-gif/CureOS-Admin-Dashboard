<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'status' => 'active',
            'email_verified_at' => Carbon::now(),
        ]);
        $admin->roles()->attach(Role::where('name', 'Admin')->first());

        $doctor = User::create([
            'name' => 'Doctor User',
            'email' => 'doctor@example.com',
            'password' => Hash::make('password'),
            'status' => 'active',
            'email_verified_at' => Carbon::now(),
        ]);
        $doctor->roles()->attach(Role::where('name', 'Doctor')->first());

        $staff = User::create([
            'name' => 'Staff User',
            'email' => 'staff@example.com',
            'password' => Hash::make('password'),
            'status' => 'active',
            'email_verified_at' => Carbon::now(),
        ]);
        $staff->roles()->attach(Role::where('name', 'Staff')->first());

        $patient = User::create([
            'name' => 'Patient User',
            'email' => 'patient@example.com',
            'password' => Hash::make('password'),
            'status' => 'active',
            'email_verified_at' => Carbon::now(),
        ]);
        $staff->roles()->attach(Role::where('name', 'Patient')->first());
    }
}
