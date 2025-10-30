<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prescription;
use App\Models\PrescriptionItem;
use App\Models\Consultation;

class PrescriptionSeeder extends Seeder
{
    public function run(): void
    {
        $consultations = Consultation::all();

        foreach ($consultations as $consultation) {
            $prescription = Prescription::create([
                'consultation_id' => $consultation->id,
                'notes' => 'Sample prescription notes',
                'pdf_path' => 'prescriptions/sample.pdf',
            ]);

            PrescriptionItem::create([
                'prescription_id' => $prescription->id,
                'medicine_name' => 'Aspirin',
                'dosage' => '500mg',
                'duration' => '7 days',
                'instructions' => 'Take twice daily',
            ]);

            PrescriptionItem::create([
                'prescription_id' => $prescription->id,
                'medicine_name' => 'Ibuprofen',
                'dosage' => '200mg',
                'duration' => '5 days',
                'instructions' => 'Take as needed',
            ]);
        }
    }
}
