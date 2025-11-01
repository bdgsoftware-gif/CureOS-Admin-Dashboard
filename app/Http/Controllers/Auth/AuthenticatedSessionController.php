<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
        try {
            $request->authenticate();
            $request->session()->regenerate();

            flash_success('Welcome back, ' . Auth::user()->name . '!');

            // This works reliably
            return redirect('/dashboard');
        } catch (\Illuminate\Validation\ValidationException $e) {
            flash_error('Invalid login credentials.');
            return back()->withInput()->withErrors($e->errors());
        }
    }

    public function destroy(Request $request)
    {
        $userName = Auth::user()->name;

        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        flash_success('Goodbye, ' . $userName . '! You have been logged out successfully.');

        // Simple redirect for logout too
        return redirect('/login');
    }
}
