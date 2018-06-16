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
// */
Route::resource('index', 'IndexController');
Route::resource('victim', 'VictimController');
Route::resource('compensation','CompensationContoller');
// // Route::get('/', function () {
//     return view('welcome');

// Route::group(['namespace'=>'Auth'], function(){
Route::group(['namespace'=>'Backend'], function(){
	Route::group(['prefix'=>'admin','middleware'=>'web','middleware'=>'auth'], function(){ 
	
	Route::get('/', 'DashboardController@index');
	// Route::get('product/show','productController@show');
});
});
// Route::get('/admin', function () {
//     return view('Backend.dashboard');
// });

// Route::group(['namespace'=>'Auth'], function(){
// 	Route::group(['middleware'=>'guest','middleware'=>'web'],function(){
// 		Route::get('login','AuthController@showLoginForm')->name('auth.login');
// 		Route::post('login','AuthController@login');
// 		Route::get('register','AuthController@showRegistrationForm')->name('auth.register');
// 		Route::post('register','AuthController@register');
// 		Route::get('logout','AuthController@logout')->name('auth.logout');

// 		Route::get('password/reset/{token?}','PasswordController@showResetForm')->name('auth.password.reset');
// 		Route::post('password/email','PasswordController@sendResetLinkEmail');
// 		Route::post('password/reset','PasswordController@reset');
// 	});
// });
// });
// Dashboard parts index
Route::get('/index1','PagesController@getIndex1');
Route::get('/index2','PagesController@getIndex2');

Route::get('/','PagesController@getHome');
Route::get('/property','PagesController@getProperty');
Route::get('/victim','PagesController@getVictim');
Route::get('/compensation','PagesController@getCompensation');
// Route::get('/property','VictimController@getProperty');
Route::get('/vdetails','VictimController@getDetails');
Route::get('/property','IndexController@getOld');
Route::post('/compensation/submit','PagesController@getCompensationSubmit');

Route::get('/messages','MessagesController@getMessages');
Route::post('/contact/submit','MessagesController@submit');



// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/contact ', function () {
//     return view('contact');
// });
// Auth::routes();

//  Route::get('/', 'HomeController@index')->name('home');
