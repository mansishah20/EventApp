<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
	
	function index()
    {
        
        return view('user.index');


    }
   
    function registration()
    {
        
        return view('user.registration');


    }
    function booking1()
    {
        
        return view('user.booking1');
    }
    
    function booking2()
    {
        
        return view('user.booking2');
    }
    
    function booking3()
    {
        
        return view('user.booking3');
    }
    
    function mybooking()
    {
        
        return view('user.mybooking');
    }
    
}
