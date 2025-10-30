<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Appointment;
use App\Models\Patient;
use App\Models\User;

class AppointmentSeeder extends Seeder
{
    public function run(): void
    {
        $patient1 = Patient::where('phone', '1234567890')->first();
        $patient2 = Patient::where('phone', '0987654321')->first();
        $doctor = User::where('email', 'doctor@example.com')->first();

        Appointment::create([
            'patient_id' => $patient1->id,
            'doctor_id' => $doctor->id,
            'appointment_time' => now()->addDays(1),
            'status' => 'scheduled',
        ]);

        Appointment::create([
            'patient_id' => $patient2->id,
            'doctor_id' => $doctor->id,
            'appointment_time' => now()->addDays(2),
            'status' => 'scheduled',
        ]);
    }
}
