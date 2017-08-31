<?php

namespace App\Repositories\User;

use Rinvex\Repository\Contracts\CacheableContract;
use Rinvex\Repository\Contracts\RepositoryContract;

interface UserRepositoryContract extends RepositoryContract, CacheableContract
{
    public function updateUserName( $name );
}