<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Media;
use App\SiteSetting;
use App\Topic;
use App\User;
use Illuminate\Http\Request;

class TopicController extends Controller
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
    public function index(Request $request)
    {
        $sites = SiteSetting::all();
      
        if ($request->has('client') && $request->client != '') {

            $topics = Topic::where('domain',SiteSetting::where('domain',$request->client)->first()->domain)->get();

            return view('backend.super_admin_pages.topics',compact('sites','topics'));
        }
   
        return view('backend.super_admin_pages.topics',compact('sites'));
    }

    /**
     * Show the related topics.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $topic = array();

        if(isset($request->topic))
        {
            for ($i=0; $i < count($request->topic['title']); $i++) { 

                    $topic['title'] = $request->topic['title'][$i];
                    $topic['lottie_desktop'] = $request->topic['desktop'][$i];
                    $topic['lottie_mobile'] = $request->topic['mobile'][$i];
                    $topic['icon'] = $request->topic['icon'][$i];
                    $topic['position'] = $request->topic['position'][$i];
                    $topic['domain'] = $request->domain;
                
                if (isset($request->topic['id'][$i])) 
                {
                    Topic::where('id',$request->topic['id'][$i])->update($topic);
                }

                else
                {
                    Topic::create($topic);
                }

                unset($topic);
            }
        }

        return back()->with('success','Topics has been added successfully');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
    }
}
