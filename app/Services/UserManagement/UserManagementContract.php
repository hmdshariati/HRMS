<?php

namespace App\Services\UserManagement;


interface UserManagementContract
{
    public function getUserName();
    public function updateUserName( $name );
    public function getUserEmail();
}