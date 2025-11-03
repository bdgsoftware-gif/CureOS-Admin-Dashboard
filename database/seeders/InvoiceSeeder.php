<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\Consultation;

class InvoiceSeeder extends Seeder
{
    public function run(): void
    {
        $consultations = Consultation::all();

        foreach ($consultations as $consultation) {
            $invoice = Invoice::create([
                'consultation_id' => $consultation->id,
                'total_amount' => 150.00,
                'payment_status' => 'pending',
                'pdf_path' => 'invoices/sample.pdf',
            ]);

            InvoiceItem::create([
                'invoice_id' => $invoice->id,
                'service_description' => 'Consultation Fee',
                'fee' => 100.00,
            ]);

            InvoiceItem::create([
                'invoice_id' => $invoice->id,
                'service_description' => 'Medication Fee',
                'fee' => 50.00,
            ]);
        }
    }
}
