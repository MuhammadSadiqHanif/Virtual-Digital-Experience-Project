<?php

namespace App\Http\Controllers\Subdomain\User;

use App\Http\Controllers\Controller;
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
		return view('backend.dashboard');
	}

	/**
	* Show profile form
	*
	* @return void
	*/
	public function showProfileSettings()
	{
		return view('backend.subdomain.user.profile_edit');
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
