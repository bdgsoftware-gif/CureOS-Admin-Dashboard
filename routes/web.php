<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\RoutingController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\AdminController;

// Public Routes
Route::view('/frontend-home', 'frontend.pages.home');

// Debug route
Route::get('/debug-session', function () {
    return [
        'all_session' => session()->all(),
        'user_roles' => auth()->user()?->role_names ?? 'Not logged in',
        'user_permissions' => auth()->user()?->permissions->pluck('name') ?? 'Not logged in'
    ];
});

// Authentication routes (from auth.php)
require __DIR__ . '/auth.php';

// Authenticated routes - MOVED TO TOP LEVEL TO AVOID CONFLICTS
Route::middleware(['auth', 'verified'])->group(function () {
    // Common routes for all authenticated users
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/', function () {
        return redirect('/dashboard');
    })->name('home');

    // REMOVED DUPLICATE ROUTE GROUPS - They were conflicting with the ones below

    // KEEP THESE ROUTES AT THE END - THEY ARE CATCH-ALL ROUTES
    Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
    Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
    Route::get('{any}', [RoutingController::class, 'root'])->name('any');
});

// ========== ROLE-BASED ROUTE GROUPS ==========

// Admin Routes
Route::middleware(['auth', 'verified', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/system', [AdminController::class, 'system'])->name('system');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('/users', AdminController::class);
    Route::resource('/roles', AdminController::class);

    // Reports
    Route::get('/reports/appointments', [AdminController::class, 'appointmentReports'])->name('reports.appointments');
    Route::get('/reports/financial', [AdminController::class, 'financialReports'])->name('reports.financial');
    Route::get('/reports/export', [AdminController::class, 'exportData'])->name('reports.export');
});

// Patient Routes (Staff & Admin)
Route::middleware(['auth', 'verified', 'anyrole:admin,staff'])->group(function () {
    Route::resource('patients', PatientController::class);
    Route::get('/patients/search', [PatientController::class, 'search'])->name('patients.search');
});

// Appointment Routes
Route::middleware(['auth', 'verified'])->group(function () {
    // Staff & Admin
    Route::middleware(['anyrole:admin,staff'])->group(function () {
        Route::resource('appointments', AppointmentController::class);
        Route::get('/appointments/calendar', [AppointmentController::class, 'calendar'])->name('appointments.calendar');
    });

    // Doctor specific
    Route::middleware(['role:doctor'])->prefix('doctor')->name('doctor.')->group(function () {
        Route::get('/appointments/today', [AppointmentController::class, 'today'])->name('appointments.today');
        Route::get('/appointments/upcoming', [AppointmentController::class, 'upcoming'])->name('appointments.upcoming');
        Route::get('/appointments', [AppointmentController::class, 'doctorIndex'])->name('appointments.index');
        Route::get('/patients', [PatientController::class, 'doctorIndex'])->name('patients.index');
    });
});

// Staff-specific routes
Route::middleware(['auth', 'verified', 'role:staff'])->prefix('staff')->name('staff.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'staffDashboard'])->name('dashboard');
    // Staff can use the main PatientController - no need for separate StaffPatientController
});

// Medical Management (Doctor & Admin)
Route::middleware(['auth', 'verified', 'anyrole:admin,doctor'])->group(function () {
    Route::resource('consultations', ConsultationController::class);
    Route::get('/consultations/today', [ConsultationController::class, 'today'])->name('consultations.today');

    Route::resource('prescriptions', PrescriptionController::class);
});

// Billing Routes (Staff & Admin)
Route::middleware(['auth', 'verified', 'anyrole:admin,staff'])->group(function () {
    Route::resource('invoices', InvoiceController::class);
    Route::get('/invoices/pending', [InvoiceController::class, 'pending'])->name('invoices.pending');
    Route::get('/billing/reports', [InvoiceController::class, 'reports'])->name('billing.reports');
});

// Patient Portal Routes
Route::middleware(['auth', 'verified', 'role:patient'])->prefix('patient')->name('patient.')->group(function () {
    Route::get('/appointments', [AppointmentController::class, 'patientIndex'])->name('appointments');
    Route::get('/prescriptions', [PrescriptionController::class, 'patientIndex'])->name('prescriptions');
    Route::get('/invoices', [InvoiceController::class, 'patientIndex'])->name('invoices');
    Route::get('/profile', [PatientController::class, 'profile'])->name('profile');
});

// Multi-role routes (accessible by multiple roles)
Route::middleware(['auth', 'verified', 'anyrole:doctor,admin,staff'])->group(function () {
    Route::get('/reports', [DashboardController::class, 'reports'])->name('reports.index');
});

// Permission-based routes
Route::middleware(['auth', 'verified', 'permission:view_reports'])->group(function () {
    Route::get('/analytics', [DashboardController::class, 'analytics'])->name('analytics.index');
});
