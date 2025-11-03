<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Patient;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function doctorIndex()
    {
        $appointments = Appointment::where('doctor_id', auth()->id())->get();
        return view('doctor.appointments.index', compact('appointments'));
    }

    public function patientIndex()
    {
        $patient = Patient::where('user_id', auth()->id())->first();
        $appointments = $patient ? $patient->appointments : collect();
        return view('patient.appointments', compact('appointments'));
    }
}
