<?php

namespace App\Http\Controllers\Subdomain;

use App\Http\Controllers\Controller;
use App\Topic;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    /**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	* Index to show dashboard
	*
	* @return void
	*/
	public function index()
	{
		$topics = Topic::where('domain',request()->domain)->get();
		return view('backend.dashboard',compact('topics'));
	}
}
