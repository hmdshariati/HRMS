<?php

namespace App\Services\UserManagement;

use Illuminate\Support\ServiceProvider;

class UserManagementServiceProvide extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->bind('App\Services\UserManagement\UserManagementContract', 'App\Services\UserManagement\UserManagementService');
    }
}