<?php

namespace App\Http\Controllers\Admin;

use App\DnsProvider\Cloudflare;
use App\Http\Controllers\Controller;
use App\SiteSetting;
use App\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
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
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{	
		$clients = User::where('role',1)->get();

		return view('backend.super_admin_pages.sites.site_settings',compact('clients'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request,Cloudflare $Cloudflare)
	{
        $request->validate([
			'company_name' => 'required',
			'company_url' => 'required',
			'domain' => 'required',
			'logo' => 'required',
			'primary_color' => 'required',
			'secondary_color' => 'required',
			'icon_color' => 'required',
			'font_family' => 'required',
			'font_family_css' => 'required',
			'allowed_domains' => 'required',
		]);

       	// cloudflare register
        $response = $Cloudflare->registerDomain($request);

        if ($response['status'] == false) {
        	return back()->with('error','<strong>Cloudflare Error: </strong> '. $response['body'])->withInput($request->all());
        }
        // end here

		if ($request->has('logo'))
		{
			$name = $request->logo->getClientOriginalExtension();
			$realName = rand(1, 100) . uniqid() . 'logo' . '.' . $name;
			$request->logo->move(public_path('clients/logos'), $realName);
		}

		$site = SiteSetting::create([
			'logo' => isset($realName) ? $realName : '',
			'primary_color' => $request->primary_color,
			'secondary_color' => $request->secondary_color,
			'font_family' => $request->font_family,
			'font_family_css' => $request->font_family_css,
			'icon_color' => $request->icon_color,
			'domain' => $request->domain,
			'allowed_domain' => json_encode($request->allowed_domains),
            'domain_verified' => true,
            'cloudflare_id' => isset($response) ? $response['body'] : null,
            'company_url' => $request->company_url,
			'company_name' => $request->company_name,
			'is_private' => $request->has('is_private') && $request->is_private == 'on' ? 1 : 0,
		]);

		if ($request->has('admins')) {
			$site->users()->sync($request->admins);			
		}

		return redirect()->to('/admin/clients')->with('success', 'New Client Added Successfully you can test it @
        <a target="_blank" href="https://'.$request->domain.'.'.'benefitstour.com" class="alert-link">Domain</a>');
        
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\SiteSetting  $siteSetting
	 * @return \Illuminate\Http\Response
	 */
	public function show(SiteSetting $siteSetting)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\SiteSetting  $siteSetting
	 * @return \Illuminate\Http\Response
	 */
	public function edit(SiteSetting $siteSetting)
	{
		// 
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\SiteSetting  $siteSetting
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, SiteSetting $siteSetting)
	{
		// 
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\SiteSetting  $siteSetting
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(SiteSetting $siteSetting)
	{
		//
	}
}
