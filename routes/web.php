<?php

use App\DnsProvider\Cloudflare;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;

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
		
		Route::get('/', function () {
		    return view('frontend.home');
		});	
		// admin routes on subDomain
		Route::group(['prefix' => 'admin','namespace' => 'Subdomain\Admin','middleware' => ['AdminRestrict','CheckCurrentDomain']],function(){
	   		Route::get('/dashboard','AdminDashboardController@index')->name('admin.dashboard');
	   	});

		// user routes on subDomain
	   	Route::group(['prefix' => 'user','namespace' => 'Subdomain\User','middleware' => ['CheckCurrentDomain','UserRestrict']],function(){
	   		Route::get('/dashboard','UserDashboardController@index')->name('admin.dashboard');
	   		Route::get('/profile_settings','UserDashboardController@showProfileSettings')->name('dashboard.profile');
	   		Route::post('/profile_settings/{user_id}','UserDashboardController@editProfileSettings')->name('dashboard.profile.edit');
	   	});

	});
});


Auth::routes(['register' => false]);

// Route::get('/home', 'HomeController@index')->name('home');	

Route::get('/test',function(Cloudflare $Cloudflare){
	dd(!1);
});

// admin routes
Route::group(['prefix' => 'admin','namespace' => 'Admin','middleware' => 'SuperAdmin'],function(){
	
	Route::get('/dashboard','AdminDashboardController@index')->name('admin.dashboard');

	Route::group([],function(){
		Route::resource('/site-setting','SiteSettingController');
		Route::resource('/clients','ClientController');
		Route::resource('/topics','TopicController');
		Route::resource('sites','SiteController');
	});

});

//frontend routes
Route::get('/', function () {
    return view('frontend.home');
});

