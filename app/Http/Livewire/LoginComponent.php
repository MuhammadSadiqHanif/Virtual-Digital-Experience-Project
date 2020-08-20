<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginComponent extends Component
{
	public $email, $password, $rememberMe;

	public function render()
	{
		return view('livewire.login-component');
	}

	public function loginAttempt(Request $request)
	{
		if (Auth::attempt([
			'email' => $this->email, 'password' => $this->password],
			$this->rememberMe == 'on' ? true : false)
		)
		
		{
			if ($this->detectDomain($request))
			{
				$subDomain = explode('.', request()->getHost())[0];

				if (in_array($subDomain, $request->user()->userDomains('domain')))
				{
					if ($request->user()->role == 1)
					{

						if (url()->previous() == url('/'))
						{
							return redirect()->to('/admin/dashboard');
						}
						else
						{
							return redirect()->to('/');
						}
					}
					else
					{
						// confirm user
						$email_domain = explode('@', $request->user()->email)[1];
						if (in_array($email_domain, json_decode(request()->user()->userDomains('allowed_domain')[0])))
						{

							if (url()->previous() == url('/'))
							{
								return redirect()->to('/user/dashboard');
							}
							else
							{
								return redirect()->to('/');
							}

						}
						else
						{
							return $this->customlogout($request);
						}
					}
				}
				else
				{
					return $this->customlogout($request);
				}
			}
			else
			{
				if ($request->user()->role == 0)
				{
					return redirect()->action('Admin\AdminDashboardController@index');
				}
				else
				{
					return $this->customlogout($request);
				}
			}

		}
		else
		{
			return back()->with('error', 'These Credentials do not match our record');
		}
	}

	/**
	 * Log the user out of the application.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function customlogout(Request $request)
	{
		$this->guard()->logout();

		$request->session()->invalidate();

		$request->session()->regenerateToken();

		session()->flash('error', 'You are not authoized to login on this domain');
		return redirect('/login');
	}

	/**
	 * Check if its domain or sub domain
	 *
	 * @return void
	 */
	public function detectDomain($request)
	{
		$parsed = parse_url(request()->url());
		$exploded = explode('.', $parsed["host"]);
		return (count($exploded) > 2);
	}

	/**
	 * Get the guard to be used during authentication.
	 *
	 * @return \Illuminate\Contracts\Auth\StatefulGuard
	 */
	protected function guard()
	{
		return Auth::guard();
	}
}
