<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BLL\UserManagement;

class UserController extends Controller
{
    private $userManagement;

    public function __construct(UserManagement $userManagement)
    {
        $this->userManagement = $userManagement;
    }

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function getUserName()
    {
        $this->userManagement->getUserName();
    }
}
