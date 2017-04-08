<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Auth;
class AdminController extends Controller
{
	 public function index()
    {
    	if(Auth::check())
    	{
    		return view('admin.dashboard');
    	}
    	else
    	{
    		return redirect()->intended('/users/login');
    	}
    }

    
}
