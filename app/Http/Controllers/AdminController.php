<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function system()
    {
        return view('admin.system');
    }

    public function appointmentReports()
    {
        return view('admin.reports.appointments');
    }

    public function financialReports()
    {
        return view('admin.reports.financial');
    }

    public function exportData()
    {
        return view('admin.reports.export');
    }
}
