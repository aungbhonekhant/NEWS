<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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
    public function boot()
    {
        $this->registerPolicies();

        //For Post

        Gate::resource('posts', 'App\Policies\PostPolicy');
        Gate::define('posts.menu', 'App\Policies\PostPolicy@menu');
        Gate::define('posts.title', 'App\Policies\PostPolicy@title');
        Gate::define('posts.filemanager', 'App\Policies\PostPolicy@filemanager');
        Gate::resource('users', 'App\Policies\UserPolicy');
        Gate::define('users.role', 'App\Policies\UserPolicy@role');
        Gate::define('users.permission', 'App\Policies\UserPolicy@permission');
        
    }
}
