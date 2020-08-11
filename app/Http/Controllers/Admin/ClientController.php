<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class ClientController extends Controller
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
        $users = User::whereIn('role',[1,2])->latest()->paginate();
        return view('backend.super_admin_pages.clients.users',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = User::where('role',1)->where('sole_propertier',1)->latest()->paginate();
        return view('backend.super_admin_pages.clients.create_users',get_defined_vars());
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
            'company_url' => 'required',
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'role' => 'required',
            'client' => 'required',
            'password' => 'required|min:8',
        ]);

        $response =  User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
            'domain' => $request->client,
            'company_url' => $request->company_url,
            'sole_propertier' => 0
        ]);

        if($response)
        {
            return redirect()->to('/admin/clients')->with('success','User Added Successfully');
        }
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
        $client = User::with('site_settings')->find($id);

        return view('backend.super_admin_pages.clients.edit_user',compact('client'));
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
            'company_url' => 'required',
            'email' => 'required|unique:users,email,' . $id,
            'domain' => 'required',
        ]);

        $client = User::find($id);

        $client->email = $request->email;
        $client->password = isset($request->password) ? bcrypt($request->password) : $client->password;
        $client->domain = $request->domain;
        $client->company_url = $request->company_url;

        if($client->update())
        {
            return redirect()->to('/admin/clients')->with('success','User Updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = User::find($id);

        if ($client->delete()) {
            return back()->with('success','User Deleted Successfully');
        }
    }
}
