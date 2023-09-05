<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdmin', function ($utente) {
            return $utente->ruolo == 'admin';
        });

        Gate::define('isStaff', function ($utente) {
            return $utente->ruolo == 'staff';
        });

        Gate::define('isUser', function ($utente) {
            return $utente->ruolo == 'user';
        });
    }
}
