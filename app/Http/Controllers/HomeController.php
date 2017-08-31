<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserManagement\UserManagementContract;

class HomeController extends Controller
{
    private $userManagement;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserManagementContract $userManagement)
    {
        $this->userManagement = $userManagement;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = new \stdClass();
        $this->userManagement->updateUserName("hafijur rahman");

        $data->userName = $this->userManagement->getUserName();
        $data->email = $this->userManagement->getUserEmail();
        return view('home',compact('data'));
    }
}
