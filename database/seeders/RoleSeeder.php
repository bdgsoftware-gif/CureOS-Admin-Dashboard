<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::create(['role_name' => 'Admin']);
        Role::create(['role_name' => 'Doctor']);
        Role::create(['role_name' => 'Staff']);
    }
}
