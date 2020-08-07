<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\SiteSetting;
use App\User;
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
        return view('backend.super_admin_pages.site_settings');
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
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8',
            'domain' => 'required',
            'role' => 'required',
            'logo' => 'required',
            'primary_color' => 'required',
            'secondary_color' => 'required',
            'icon_color' => 'required',
            'font_family' => 'required',
            'font_family_css' => 'required',
            'allowed_domains' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
            'domain' => $request->domain,
            'company_url' => $request->company_url,
        ]);

        if ($request->has('logo')) 
        {
            $name = $request->logo->getClientOriginalExtension();
            $realName = rand(1, 100) . uniqid() . 'logo' . '.' . $name;
            $request->logo->move(public_path('clients/logos'), $realName);
        }

        SiteSetting::create([
            'logo' => isset($realName) ? $realName : '',
            'primary_color' => $request->primary_color,
            'secondary_color' => $request->secondary_color,
            'font_family' => $request->font_family,
            'font_family_css' => $request->font_family_css,
            'icon_color' => $request->icon_color,
            'domain' => $request->domain,
            'allowed_domain' => json_encode($request->allowed_domains)
        ]);

        return back()->with('success','New Client Added Successfully!');
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
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,' . $request->client_id,
            'domain' => 'required',
            'role' => 'required',
            'primary_color' => 'required',
            'secondary_color' => 'required',
            'icon_color' => 'required',
            'font_family' => 'required',
            'font_family_css' => 'required',
            'allowed_domains' => 'required'
        ]);

        $client = User::find($request->client_id);
       
        $client->name = $request->name;
        $client->email = $request->email;
        $client->password = isset($request->password) ?  bcrypt($request->password) : $client->password;
        $client->role = $request->role;
        $client->domain = $request->domain;
        $client->company_url = $request->company_url;
      
        $client->update();

        // client end here
        
        if ($request->hasfile('logo')) 
        {
            $name = $request->logo->getClientOriginalExtension();
            $realName = rand(1, 100) . uniqid() . 'logo' . '.' . $name;
            $request->logo->move(public_path('clients/logos'), $realName);
        }

        $siteSetting->logo =  isset($realName) ? $realName : $siteSetting->logo;
        $siteSetting->primary_color =  $request->primary_color;
        $siteSetting->secondary_color =  $request->secondary_color;
        $siteSetting->font_family =  $request->font_family;
        $siteSetting->font_family_css =  $request->font_family_css;
        $siteSetting->icon_color =  $request->icon_color;
        $siteSetting->domain =  $request->domain;
        $siteSetting->allowed_domain =  json_encode($request->allowed_domains);
    
        $siteSetting->update();

        //site-setting end here

        return back()->with('success','Settings Updated Successfully!');
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
