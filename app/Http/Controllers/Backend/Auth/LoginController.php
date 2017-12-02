<?php

namespace App\Http\Controllers\Backend\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    //use AuthenticatesUsers;
    /**
     * Show the backend application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
    	return view('backend.auth.login');
    }
}
