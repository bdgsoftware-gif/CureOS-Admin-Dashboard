<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse; // ADD THIS IMPORT
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules;
use Illuminate\View\View; // ADD THIS IMPORT

class RegisteredUserController extends Controller
{
    public function create(): View
    {
        return view('auth.register');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'nullable|string|max:20|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        try {
            DB::beginTransaction();

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'status' => 'active',
            ]);

            // Assign default patient role
            $patientRole = Role::where('name', 'patient')->first();

            if (!$patientRole) {
                // Create patient role if it doesn't exist
                $patientRole = Role::create([
                    'name' => 'patient',
                    'display_name' => 'Patient',
                    'description' => 'Default patient role'
                ]);
            }

            $user->assignRole($patientRole);

            event(new Registered($user));

            DB::commit();

            Auth::login($user);

            // FIX: Use route name properly
            flash_success('Welcome, ' . Auth::user()->name . '! Your account has been created successfully.');
            return redirect()->route('dashboard');
        } catch (\Exception $e) {
            DB::rollBack();
            logger()->error('Registration error: ' . $e->getMessage());
            flash_error('Registration failed. Please try again.');
            return back()->withInput();
        }
    }
}
