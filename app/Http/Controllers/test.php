<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
    //
	
	function index()
	{
		return "i am in test controll in index method";
	}
	
	function login()
	{
		return " i am in login ";
	}
	function show()
	{
		 return view('test.index');
	}
}
