<?php

namespace App\Http\Controllers\Subdomain\Admin;

use App\Http\Controllers\Controller;
use App\Topic;
use App\TopicContent;
use Illuminate\Http\Request;

class AdminTopicController extends Controller
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

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($topic)
	{
		$details = Topic::where('id', request()->topic)
			->where('domain', request()->domain)
			->with('content')
			->firstOrFail();

		$topics = Topic::where('domain', request()->domain)->get();

		return view('backend.subdomain.admin.topic_details', get_defined_vars());
	}

	/**
	 * Add Videos
	 *
	 * @return void
	 */
	public function addVideos(Request $request)
	{
		$request->validate([
			'videos.*' => 'required',
		],
			[
				'required' => 'Please Add Video Link!',
			]);

		$content = TopicContent::where('topic_id', $request->topic)->first();

		if ($content)
		{
			if (json_decode($content->videos) == null)
			{
				$content->videos = json_encode($request->videos);
				$content->video_default = '';
				$content->update();
			}
			else
			{
				$content->videos = json_encode($request->videos);
				$content->video_default = '';
				$content->update();
			}
		}

		return back()->with('success', 'Videos Added Successfully');
	}

	/**
	 * Remove Video
	 *
	 * @return void
	 */
	public function deleteVideo(Request $request)
	{
		$content = TopicContent::where('topic_id', $request->topic)->firstOrFail();

		$videos = json_decode($content->videos);

		$index = array_search(decrypt($request->video), $videos);

		unset($videos[$index]);

		$content->videos = json_encode(array_values($videos));
		$content->update();

		return back()->with('success', 'Videos Deleted Successfully');
	}

	/**
	 * Set Video Default
	 *
	 * @return void
	 */
	public function setVideoDefault(Request $request)
	{
		$request->validate([
			'videos_default' => 'required',
		],
		[
			'required' => 'Please Select a Image!',
		]);

		$content = TopicContent::where('topic_id', $request->topic)->firstOrFail();

		$content->video_default = $request->video_default;

		$content->update();

		return back()->with('success', 'Videos Default Image Set Successfully');
	}
}
