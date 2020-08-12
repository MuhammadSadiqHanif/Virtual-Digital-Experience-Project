<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;


    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('auth.custom_login');
    }

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
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        if (preg_match('!^([a-z]{2})?\.?benefitstour\.com$!', request()->getHost()) == 0)
        {
            $subDomain = explode('.',request()->getHost())[0];
            // $previousUrl = str_replace(url('/',url()->previous()));
        
            if (in_array($subDomain,$request->user()->userDomains('domain'))) 
            {
                if ($request->user()->role == 1) {

                    if (url()->previous() == url('/')) {
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
                    $email_domain = explode('@',$request->user()->email)[1];
                    if (in_array($email_domain,json_decode(request()->user()->userDomains('allowed_domain')[0]))) {
                       
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
                return redirect()->to('/admin/dashboard');
            }
            else
            {
                return $this->customlogout($request);
            }
        }
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

        return redirect('/login')->with('error','You are not authoized to login on this domain');
    }
}
