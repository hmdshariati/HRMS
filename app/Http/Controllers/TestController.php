<?php

namespace App\Http\Controllers;


class TestController
{
	public function index(){
		return view('shared.adminLTE.master');
	}
}