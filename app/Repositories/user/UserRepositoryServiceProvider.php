<?php

namespace App\Repositories\User;

use Illuminate\Support\ServiceProvider;

class UserRepositoryServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->bind('App\Repositories\User\UserRepositoryContract', 'App\Repositories\User\UserRepository');
    }
}