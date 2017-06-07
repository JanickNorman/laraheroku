<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\EmployeeUserProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    public function register()
    {



    }

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {

       $this->app['auth']->provider('employeeAuth', function($app) {
           return new EmployeeUserProvider('emp_mst');
        });

        $this->registerPolicies();

        //
    }
}
