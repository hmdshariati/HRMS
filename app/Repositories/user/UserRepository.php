<?php

namespace App\Repositories\User;

use Rinvex\Repository\Repositories\EloquentRepository;
use Auth;
Use App\Models\User;

class UserRepository extends EloquentRepository implements UserRepositoryContract
{

    protected $repositoryId = 'rinvex.repository.uniqueid';

    protected $model = 'App\Models\User';

    public function updateUserName( $name )
    {
        $user = Auth::user();
        $user->name = $name;
        $user->save();
    }
}

