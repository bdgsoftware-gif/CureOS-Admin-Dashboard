<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::create(['name' => 'admin', 'display_name' => 'Admin']);
        Role::create(['name' => 'doctor', 'display_name' => 'Doctor']);
        Role::create(['name' => 'staff', 'display_name' => 'Staff']);
        Role::create(['name' => 'patient', 'display_name' => 'Patient']);
    }
}
