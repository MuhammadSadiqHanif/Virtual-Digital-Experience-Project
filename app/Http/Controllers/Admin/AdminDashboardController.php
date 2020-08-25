<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
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
		return view('backend.dashboard');
	}

	/**
	* Impersonate the user
	*
	* @return void
	*/
	public function impersonate(Request $request)
	{
		$request->validate([
			'impersonate_email' => 'required|exists:users,email',
		]);

		$user = User::where('email',$request->impersonate_email)->with('sites')->first();

		if (!$user->sites()->count()) {
			return back()->with('error','This dont have any assigned Sites to Impersonate!');
		}

		session()->put('impersonate',['id' => $user->id,'domain' => $user->sites->first()->domain]);


		return redirect()->intended(intendedUrl($user->role));
	}

	/**
	* Stop Impersonation
	*
	* @return void
	*/
	public function stopImpersonate()
	{
		session()->forget('impersonate');

		return redirect()
				->intended('https://'.env('APP_DOMAIN').'/admin/dashboard');
	}
}
