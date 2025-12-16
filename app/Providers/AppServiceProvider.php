<?php

namespace App\Providers;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
// use Nette\Utils\Paginator;
use Illuminate\Pagination\Paginator;

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
        Paginator::defaultView('pagination::default');

        Gate::define('destroy-appointment', function (User $user, Appointment $appointment) {
            return $user->is_admin || $appointment->price < 800;
        });

         Gate::define('create-appointment', function (User $user) {
            return $user->is_admin;
         });
    }
}
