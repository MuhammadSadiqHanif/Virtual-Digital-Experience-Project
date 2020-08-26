<?php

namespace App\Http\Controllers\Subdomain\User;

use App\Http\Controllers\Controller;
use App\SiteSetting;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
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
		$settings = SiteSetting::where('domain',request()->domain)->first();
		return view('backend.dashboard',compact('settings'));
	}

	/**
	* Show profile form
	*
	* @return void
	*/
	public function showProfileSettings()
	{
		$settings = SiteSetting::where('domain',request()->domain)->first();
		return view('backend.subdomain.user.profile_edit',compact('settings'));
	}

	/**
	* Edit profile
	*
	* @return void
	*/
	public function editProfileSettings(Request $request)
	{
		$user = auth()->user();

		$user->name = $request->name;
		$user->email = $request->email;
		$user->password = isset($request->password) ? bcrypt($request->password) : $user->password;;
		$user->company_url = $request->company_url;

		if($user->update())
        {
            return back()->with('success','Profileb Updated Successfully');
        }
	}
}
