<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        User::class=>UserPolicy::class,
    ];
    public function register(): void
    {
        
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        $this->registerPolicies();
    }
}
