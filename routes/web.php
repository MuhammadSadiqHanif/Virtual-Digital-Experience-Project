<?php

use App\DnsProvider\Cloudflare;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**** Sub Domain Routing *****/

Route::domain('{domain}.'.env('APP_DOMAIN'))->group(function () {
   
   	Route::get('/login','Subdomain\SubLoginController@showLoginForm');
	
	Route::group(['middleware' => 'IsPrivateSite'],function(){
		
		Route::get('/', 'Subdomain\SubFrontendController@index');

		// admin routes on subDomain
		Route::group(['prefix' => 'admin','namespace' => 'Subdomain\Admin','middleware' => ['AdminRestrict','CheckCurrentDomain']],function(){

			Route::resource('media','AdminMediaController');
	   		Route::get('/dashboard','AdminDashboardController@index')->name('admin.dashboard');
	   		Route::get('/site-topics/{topic}','AdminTopicController@show')->name('admin.topic.index');
	   		
	   		// topic videos
	   		Route::post('/site-topics/{topic}/video','AdminTopicController@addVideos');
	   		Route::get('/site-topics/{topic}/video/{video}','AdminTopicController@deleteVideo');
	   		Route::post('/site-topics/{topic}/video/default','AdminTopicController@setVideoDefault');
	   		// topic pdf
	   		Route::post('/site-topics/{topic}/pdf','AdminTopicController@addPdf');
	   		Route::get('/site-topics/{topic}/pdf/{pdf}','AdminTopicController@deletePdf');
	   		Route::post('/site-topics/{topic}/pdf/default','AdminTopicController@setPdfDefault');

	   		// topic pdf
	   		Route::post('/site-topics/{topic}/text','AdminTopicController@addText');
	   		Route::get('/site-topics/{topic}/text/{text}','AdminTopicController@deleteText');
	   		// topic pdf
	   		Route::post('/site-topics/{topic}/chatbot','AdminTopicController@addChatBotImage');
		});

		// user routes on subDomain
	   	Route::group(['prefix' => 'user','namespace' => 'Subdomain\User','middleware' => ['CheckCurrentDomain','UserRestrict']],function(){
	   		Route::get('/dashboard','UserDashboardController@index')->name('admin.dashboard');
	   		Route::get('/profile_settings','UserDashboardController@showProfileSettings');
	   		Route::post('/profile_settings/{user_id}','UserDashboardController@editProfileSettings');
	   	});

	});
});


Auth::routes(['register' => false]);

// Route::get('/home', 'HomeController@index')->name('home');	

Route::get('/test',function(Cloudflare $Cloudflare){

});

// admin routes
Route::group(['prefix' => 'admin','namespace' => 'Admin','middleware' => 'SuperAdmin'],function(){

	Route::get('/dashboard','AdminDashboardController@index')->name('admin.dashboard');

	Route::group([],function(){
		Route::resource('/site-setting','SiteSettingController');
		Route::resource('/clients','ClientController');
		Route::resource('/topics','TopicController');
		Route::resource('sites','SiteController');
		Route::resource('media','MediaController');
	});

});

//frontend routes
Route::get('/', function () {
    return view('frontend.home');
});


// Sadiq Routes
Route::get('/medical',function(){
	return view('frontend.medical');
});

Route::get('/health',function(){
	return view('frontend.health');
});

Route::get('/slider',function(){
	return view('frontend.slider');
});
