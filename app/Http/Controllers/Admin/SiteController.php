<?php

namespace App\Http\Controllers\Admin;

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

        return view('backend.super_admin_pages.sites.edit_site',compact('site'));
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
        $siteSetting->domain = $request->domain ?? $siteSetting->domain;
        $siteSetting->allowed_domain = json_encode($request->allowed_domains);

        $siteSetting->update();

        //site-setting end here

        return redirect()->to('/admin/sites')->with('success', 'Site Settings Updated Successfully!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$siteSetting = SiteSetting::findOrFail($id);

		 try {
            $params = [

                'headers' => [
                    'Content-Type' => 'application/json',
                    'X-Auth-Email' => 'zainzulifqar21@gmail.com',
                    'X-Auth-Key' => '7e2c9b3b98dc1c9764572ede290edb11c3285',
                ]
            ];
            $client = new Client();
            $response = $client->request('DELETE', 'https://api.cloudflare.com/client/v4/zones/8292a0227ee704c15c6760456f605c7e/dns_records/'.$siteSetting->cloudflare_id, $params);
        }
        catch (\Exception $e)
        {
            $exception = $e->getMessage();
            // return back()->with('error', $exception);
        }

        User::where('domain',$siteSetting->domain)->delete();

        Topic::where('domain',$siteSetting->domain)->delete();

        // delete topics content too

        if ($siteSetting->delete()) {
             return back()->with('success', 'Site with all its content deleted Successfully!');
        }
	}
}
