<?php

namespace App\Http\Controllers\Admin;

use App\DnsProvider\Cloudflare;
use App\Http\Controllers\Controller;
use App\SiteSetting;
use App\Topic;
use App\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class SiteController extends Controller
{
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
        $sites = SiteSetting::paginate();
		return view('backend.super_admin_pages.sites.sites',compact('sites'));
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
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$site = SiteSetting::findOrFail($id);
		$clients = User::where('role',1)->get();
        return view('backend.super_admin_pages.sites.edit_site',compact('site','clients'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
        $request->validate([
            'primary_color' => 'required',
            'secondary_color' => 'required',
            'icon_color' => 'required',
            'font_family' => 'required',
            'font_family_css' => 'required',
            'allowed_domains' => 'required',
            'company_name' => 'required',
            'admins' => 'required',
            'company_url' => 'required',
        ]);

        if ($request->hasfile('logo'))
        {
            $name = $request->logo->getClientOriginalExtension();
            $realName = rand(1, 100) . uniqid() . 'logo' . '.' . $name;
            $request->logo->move(public_path('clients/logos'), $realName);
        }

        $siteSetting = SiteSetting::findOrFail($id);

        $siteSetting->logo = isset($realName) ? $realName : $siteSetting->logo;
        $siteSetting->primary_color = $request->primary_color;
        $siteSetting->secondary_color = $request->secondary_color;
        $siteSetting->font_family = $request->font_family;
        $siteSetting->font_family_css = $request->font_family_css;
        $siteSetting->icon_color = $request->icon_color;
        $siteSetting->allowed_domain = json_encode($request->allowed_domains);
        $siteSetting->company_name = $request->company_name;
        $siteSetting->company_url = $request->company_url;

        $siteSetting->update();

        $siteSetting->users()->sync($request->admins);
        //site-setting end here

        return redirect()->to('/admin/sites')->with('success', 'Site Settings Updated Successfully!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id,Cloudflare $Cloudflare)
	{
		$siteSetting = SiteSetting::findOrFail($id);

		// deleting site from cloudflare 
		$Cloudflare->deleteDomain($siteSetting);

        // User::where('domain',$siteSetting->domain)->delete();

		// removing attached user from this domain
        $siteSetting->users()->detach();

        // deleting topics attached to this domain
        Topic::where('domain',$siteSetting->domain)->delete();

        // delete topics content too

        if ($siteSetting->delete()) {
             return back()->with('success', 'Site with all its content deleted Successfully!');
        }
	}
}
