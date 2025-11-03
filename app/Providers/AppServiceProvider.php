<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share auth data with all views
        View::composer('*', function ($view) {
            $user = Auth::user();

            $view->with([
                'currentUser' => $user,
                'userName'    => $user?->name,
                'userEmail'   => $user?->email,
                'userRoles'   => $user?->roles->pluck('name') ?? collect(),
            ]);

            // Role directives
            Blade::if('role', function ($role) {
                return auth()->check() && auth()->user()->hasRole($role);
            });

            Blade::if('anyrole', function ($roles) {
                if (!auth()->check()) return false;

                $roles = is_array($roles) ? $roles : func_get_args();
                return auth()->user()->hasAnyRole($roles);
            });

            Blade::if('allroles', function ($roles) {
                if (!auth()->check()) return false;

                $roles = is_array($roles) ? $roles : func_get_args();
                return auth()->user()->hasAllRoles($roles);
            });
        });
    }
}
