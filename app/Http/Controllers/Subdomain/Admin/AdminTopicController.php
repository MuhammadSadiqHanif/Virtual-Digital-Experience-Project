<?php

namespace App\Http\Controllers\Subdomain\Admin;

use App\Http\Controllers\Controller;
use App\SiteSetting;
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
		$topics = Topic::where('domain', request()->domain)->get();
		$details = Topic::where('id', request()->topic)
				->where('domain', request()->domain)
				->with('videos','pdfs')
				->first();

		$settings = SiteSetting::where('domain', request()->domain)->first();

		return view('backend.subdomain.admin.topic_details', get_defined_vars());
	}

	/**
	 * Add Videos
	 *
	 * @return void
	 */
	public function addVideos(Request $request)
	{
		
		if (!$request->has('videos')) {
			return back();
		}

		$request->validate([
			'videos.*' => 'required',
		],
		[
			'required' => 'Please Add Video Link!',
		]);

		$videos = [];

		$content = Topic::where('id', $request->topic)
				->where('domain', request()->domain)
				->with('videos')
				->firstOrFail();

		for ($i = 0; $i < count($request->videos['link']); $i++)
		{
			$videos = [
				'video' => $request->videos['link'][$i],
				'title' => $request->videos['title'][$i]];

			if(isset($request->videos['id'][$i]) && 
				$content->videos->contains('id',$request->videos['id'][$i]))
			{
				$content->videos()->where('id',$request->videos['id'][$i])->update($videos);
			}
			else
			{
				$content->videos()->create($videos);
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
		$content = Topic::where('id', $request->topic)
				->with('videos')
				->where('domain', request()->domain)
				->firstOrFail();

		$content->videos()->where('id',$request->video)->delete();

		return back()->with('success', 'Videos Deleted Successfully');
	}

	/**
	 * Set Video Default
	 *
	 * @return void
	 */
	public function setVideoDefault(Request $request)
	{
		$content = Topic::where('id', $request->topic)
				->where('domain', request()->domain)
				->firstOrFail();

		if ($content)
		{
			$content->video_default = $request->video_default;
			$content->update();
		}

		return back()->with('success', 'Videos Default Image Set Successfully');
	}

	//********* PDF PART ************//

	public function addPdf(Request $request)
	{
		if (!$request->has('pdf')) {
			return back();
		}

		$pdf = [];

		$request->validate([
			'pdf.*' => 'required',
		],
		[
			'required' => 'Please Add Pdf Link!',
		]);

		$content = Topic::where('id', $request->topic)
				->where('domain', request()->domain)
				->with('pdfs')
				->firstOrFail();

		for ($i = 0; $i < count($request->pdf['link']); $i++)
		{
			$pdf = [
				'link' => $request->pdf['link'][$i],
				'title' => $request->pdf['title'][$i]];

			if(isset($request->pdf['id'][$i]) && 
				$content->pdfs->contains('id',$request->pdf['id'][$i]))
			{
				$content->pdfs()->where('id',$request->pdf['id'][$i])->update($pdf);
			}
			else
			{
				$content->pdfs()->create($pdf);
			}
		}

		return back()->with('success', 'Pdfs Added Successfully');
	}

	/**
	 * Remove Video
	 *
	 * @return void
	 */
	public function deletePdf(Request $request)
	{
		$content = Topic::where('id', $request->topic)
				->with('pdfs')
				->where('domain', request()->domain)
				->firstOrFail();

		$content->pdfs()->where('id',$request->pdf)->delete();

		return back()->with('success', 'Pdf Deleted Successfully');
	}

	/**
	 * Set Pdf Default
	 *
	 * @return void
	 */
	public function setPdfDefault(Request $request)
	{
		$content = Topic::where('id', $request->topic)
			->where('domain', request()->domain)
			->firstOrFail();

		if ($content)
		{
			$content->pdf_default = $request->pdf_default;
			$content->update();
		}

		return back()->with('success', 'Pdf Default Image Set Successfully');
	}

	//*********** ADD TEXT **********//

	/**
	* Add text
	*
	* @return void
	*/
	public function addText(Request $request)
	{
		$content = Topic::where('id', $request->topic)
			->where('domain', request()->domain)
			->firstOrFail();

		if ($content)
		{
			$content->text_slider = json_encode($request->text);
			$content->update();
		}

		return back()->with('success', 'Text Slides Added Successfully');
	}

	/**
	* Delete Text
	*
	* @return void
	*/
	public function deleteText(Request $request)
	{
		$content = Topic::where('id', $request->topic)
			->where('domain', request()->domain)
			->firstOrFail();

		$texts = json_decode($content->text_slider);
	
		$index = array_search($request->text, $texts);
		
		unset($texts[$index]);

		$content->text_slider = json_encode(array_values($texts));
		$content->update();

		return back()->with('success', 'Text Slide Deleted Successfully');
	}

	/**
	* Add ChatBot Image
	*
	* @return void
	*/
	public function addChatBotImage(Request $request)
	{
		$content = Topic::where('id', $request->topic)
			->where('domain', request()->domain)
			->firstOrFail();

		$content->chatbot_pic = $request->chatbot;
		$content->update();

		return back()->with('success', 'Chatbot Image Added Successfully');
	}
}
