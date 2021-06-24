<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Contracts\Auth\Access\Gate as AccessGate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(AccessGate $gate)
    {

        $this->registerPolicies();

        $gate->define('isAdmin', function($user){
            return $user->role == 'admin';
        });

        $gate->define('isSaleRep', function($user){
            return $user->role == 'retail rep' || 'wholesale rep';
        });

        $gate->define('isOrderManager', function($user){
            return $user->role == 'order manager';
        });

        $gate->define('isProductManager', function($user){
            return $user->role == 'product manager';
        });
    }
}
