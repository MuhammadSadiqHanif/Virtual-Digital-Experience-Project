<?php

namespace App\Http\Controllers\Subdomain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubLoginController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


     /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('auth.custom_login');
    }
}
