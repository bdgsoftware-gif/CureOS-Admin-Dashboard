<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Patient;
use App\Models\User;

class PatientSeeder extends Seeder
{
    public function run(): void
    {
        $staff = User::where('email', 'staff@example.com')->first();

        Patient::create([
            'name' => 'John Doe',
            'phone' => '1234567890',
            'email' => 'john@example.com',
            'dob' => '1990-01-01',
            'gender' => 'Male',
            'address' => '123 Main St',
            'created_by' => $staff->id,
        ]);

        Patient::create([
            'name' => 'Jane Smith',
            'phone' => '0987654321',
            'email' => 'jane@example.com',
            'dob' => '1985-05-15',
            'gender' => 'Female',
            'address' => '456 Elm St',
            'created_by' => $staff->id,
        ]);
    }
}
