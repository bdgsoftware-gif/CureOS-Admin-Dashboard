<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Create roles
        $roles = [
            ['name' => 'admin', 'display_name' => 'Administrator'],
            ['name' => 'doctor', 'display_name' => 'Doctor'],
            ['name' => 'staff', 'display_name' => 'Staff'],
            ['name' => 'patient', 'display_name' => 'Patient'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }

        // Create permissions
        $permissions = [
            // Patient permissions
            ['name' => 'view_own_profile', 'display_name' => 'View Own Profile'],
            ['name' => 'update_own_profile', 'display_name' => 'Update Own Profile'],
            ['name' => 'view_own_appointments', 'display_name' => 'View Own Appointments'],
            ['name' => 'create_appointments', 'display_name' => 'Create Appointments'],

            // Doctor permissions
            ['name' => 'view_patient_records', 'display_name' => 'View Patient Records'],
            ['name' => 'update_patient_records', 'display_name' => 'Update Patient Records'],
            ['name' => 'view_doctor_schedule', 'display_name' => 'View Doctor Schedule'],

            // Staff permissions
            ['name' => 'manage_appointments', 'display_name' => 'Manage Appointments'],
            ['name' => 'view_all_patients', 'display_name' => 'View All Patients'],

            // Admin permissions
            ['name' => 'manage_users', 'display_name' => 'Manage Users'],
            ['name' => 'manage_roles', 'display_name' => 'Manage Roles'],
            ['name' => 'view_reports', 'display_name' => 'View Reports'],
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }

        // Assign permissions to roles (you can customize this)
        $adminRole = Role::where('name', 'admin')->first();
        $adminRole->permissions()->sync(Permission::pluck('id'));

        $patientRole = Role::where('name', 'patient')->first();
        $patientPermissions = Permission::whereIn('name', [
            'view_own_profile',
            'update_own_profile',
            'view_own_appointments',
            'create_appointments'
        ])->pluck('id');
        $patientRole->permissions()->sync($patientPermissions);
    }
}
