<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Media;
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
		$medias = Media::where('domain',null)->get();
		return view('backend.super_admin_pages.gallery.index', compact('medias'));
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
	public function store(Request $request, MessageBag $message_bag)
	{
		if ($files = $request->file('files'))
		{
			foreach ($request->files as $file)
			{
				for ($i = 0; $i < count($file); $i++)
				{
					$name = $file[$i][$i]->getClientOriginalExtension();
					$realName = basename($file[$i][$i]->getClientOriginalName(), '.'.$file[$i][$i]->getClientOriginalExtension()) . uniqid() . 'media' . '.' . $name;
					$file[$i][$i]->move(public_path('clients/gallery'), $realName);
					$media[] = ['media' => $realName, 'ext' => $name,'domain' => $request->domain];
				}
			}
			\DB::table('media')->insert($media);
		}

		return json_encode(array_column($media, 'media'));
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

		if (file_exists($pathToFile))
		{
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

		$name = json_decode($id);
	
		$media = Media::where('media', $name ?? $id)->firstOrFail();

		if (file_exists(public_path('clients/gallery/' . $media->media)))
		{
			unlink(public_path('clients/gallery/' . $media->media));
		}

		if ($media->delete() && $name == null)
		{
			return back()->with('success', 'Media Deleted Successfully');
		}
		else
		{
			return 'all good';
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
