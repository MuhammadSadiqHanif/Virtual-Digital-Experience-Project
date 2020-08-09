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
Route::get('/lottie',function(){ return view('lottie');});
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');


// admin routes
Route::group(['prefix' => 'admin','namespace' => 'Admin'],function(){
	
	Route::get('/dashboard','AdminDashboardController@index')->name('admin.dashboard');

	Route::group([],function(){
		Route::resource('/site-setting','SiteSettingController');
		Route::resource('/clients','ClientController');
	});

});

//frontend routes
Route::get('/', function () {
    return view('frontend.home');
});

