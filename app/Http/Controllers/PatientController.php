<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function doctorIndex()
    {
        $patients = Patient::whereHas('appointments', function ($query) {
            $query->where('doctor_id', auth()->id());
        })->get();
        return view('doctor.patients.index', compact('patients'));
    }

    public function profile()
    {
        $patient = Patient::where('user_id', auth()->id())->first();
        return view('patient.profile', compact('patient'));
    }
}
