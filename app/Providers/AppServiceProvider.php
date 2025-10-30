<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

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
                'userRoles'   => $user?->roles->pluck('role_name') ?? collect(), 
            ]);
        });
    }
}
