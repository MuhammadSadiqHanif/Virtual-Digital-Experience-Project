<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Media;
use App\Rules\FileValidate;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

class MediaController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
        $medias = Media::all();
		return view('backend.super_admin_pages.gallery.index',compact('medias'));
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
	public function store(Request $request,MessageBag $message_bag)
	{	
		foreach ($request->file('files') as $file)
		{
			if (!in_array($file->getClientOriginalExtension(),['jpg','jpeg','png','bmp','json','pdf'])) 
			{
				$message_bag->add('error', 'Supported File Types are jpg,jpeg,png,bmp,json,pdf');
				break;
			}
			if(round($file->getSize() / 1024) > 10000)
			{
				$message_bag->add('error', 'Sorry! Maximum allowed size for a File is 10MB');	
				break;
			}
		}
		
		if ($message_bag->count()) 
		{
			return back()->withErrors($message_bag);
		}

		if ($files = $request->file('files'))
		{
			foreach ($files as $file)
			{
				$name = $file->getClientOriginalExtension();
				$realName = rand(1, 100) . uniqid() . 'media' . '.' . $name;
				$file->move(public_path('clients/gallery'), $realName);
				$media[] = ['media' => $realName, 'ext' => $name];
			}

			\DB::table('media')->insert($media);

			return back()->with('success','Media Uploaded Successfully');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($name)
	{
		$pathToFile = public_path('clients/gallery/' . $name);

        if (file_exists($pathToFile)) {
            return response()->file($pathToFile);
        }

        abort(404);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$media = Media::findOrFail($id);

        if(file_exists(public_path('clients/gallery/' . $media->media)))
        {
            unlink(public_path('clients/gallery/' . $media->media));
        }

        if ($media->delete()) {
            return back()->with('success','Media Deleted Successfully');
        }
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
		//
	}
}
