<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Consultation;
use App\Models\Appointment;

class ConsultationSeeder extends Seeder
{
    public function run(): void
    {
        $appointments = Appointment::all();

        foreach ($appointments as $appointment) {
            Consultation::create([
                'appointment_id' => $appointment->id,
                'visit_notes' => 'Sample visit notes for ' . $appointment->patient->name,
            ]);
        }
    }
}
