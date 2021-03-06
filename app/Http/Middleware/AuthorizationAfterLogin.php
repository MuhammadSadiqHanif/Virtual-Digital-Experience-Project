<?php

namespace App\Http\Middleware;

use Closure;

class AuthorizationAfterLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->detectDomain($request))
        {
            $subDomain = explode('.',request()->getHost())[0];
        
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
