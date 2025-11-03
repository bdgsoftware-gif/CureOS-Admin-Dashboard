<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse; // ADD IMPORT
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View; // ADD IMPORT

class AuthenticatedSessionController extends Controller
{
    public function create(): View
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request): RedirectResponse
    {
        try {
            $request->authenticate();
            $request->session()->regenerate();

            flash_success('Welcome back, ' . Auth::user()->name . '!');

            return redirect('/dashboard');
        } catch (\Illuminate\Validation\ValidationException $e) {
            flash_error('Invalid login credentials.');
            return back()->withInput()->withErrors($e->errors());
        }
    }

    public function destroy(Request $request): RedirectResponse
    {
        $userName = Auth::user()->name;

        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        flash_success('Goodbye, ' . $userName . '! You have been logged out successfully.');

        return redirect('/login');
    }
}
