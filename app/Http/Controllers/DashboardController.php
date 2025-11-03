<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // ADD THIS IMPORT

class DashboardController extends Controller
{
    public function index()
    {
        // Use auth() helper or Auth facade consistently
        $user = auth()->user();

        if ($user->hasRole('admin')) {

            return view('admin.dashboard');
        } elseif ($user->hasRole('doctor')) {
            return view('doctor.dashboard');
        } elseif ($user->hasRole('patient')) {
            return view('patient.dashboard');
        }

        return view('dashboard');
    }
    public function staffDashboard()
    {
        return view('staff.dashboard');
    }

    public function reports()
    {
        return view('reports.index');
    }

    public function analytics()
    {
        return view('analytics.index');
    }
}
