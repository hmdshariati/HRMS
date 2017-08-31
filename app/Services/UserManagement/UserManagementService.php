<?php

namespace App\Services\UserManagement;

use App\Repositories\User\UserRepositoryContract;
use Auth;

class UserManagementService implements UserManagementContract
{
	private $userRepo;

    public function __construct(UserRepositoryContract $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function updateUserName($name)
    {
        $this->userRepo->updateUserName($name);
    }

    public function getUserName()
    {
        return $this->getAuthenticatedUser()->name;
    }

    public function getUserEmail()
    {
        return $this->getAuthenticatedUser()->email;
    }

    private function getAuthenticatedUser()
    {
        return Auth::user();
    }
}
