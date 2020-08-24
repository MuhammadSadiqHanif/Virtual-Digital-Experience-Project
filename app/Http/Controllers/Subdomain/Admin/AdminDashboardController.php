<?php

namespace App\Http\Controllers\Subdomain\Admin;

use App\Http\Controllers\Controller;
use App\SiteSetting;
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
		$settings = SiteSetting::where('domain',request()->domain)->first();

		return view('backend.dashboard',compact('topics','settings'));
	}
}
