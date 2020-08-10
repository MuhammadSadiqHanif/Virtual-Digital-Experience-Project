<?php

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

Route::domain('{account}.'.env('APP_DOMAIN'))->group(function () {
   Route::get('foobar',function(){
   	echo "foobar";
   });
});



Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');


// admin routes
Route::group(['prefix' => 'admin','namespace' => 'Admin','middleware' => 'SuperAdmin'],function(){
	
	Route::get('/dashboard','AdminDashboardController@index')->name('admin.dashboard');

	Route::group([],function(){
		Route::resource('/site-setting','SiteSettingController');
		Route::resource('/clients','ClientController');
		Route::resource('/topics','TopicController');
	});

});

//frontend routes
Route::get('/', function () {
    return view('frontend.home');
});

