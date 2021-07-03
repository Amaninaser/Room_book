<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
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

        // Auth gates for: Countries
        /*
        Gate::define('country_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('country_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('country_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('country_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('country_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });*/
    }
}
