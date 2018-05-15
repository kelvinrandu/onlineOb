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

Route::get('/', function () {
    return view('index');
});


//verify email route
Route::get('verifyEmailFirst', 'Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');
//send email token
Route::get('verify/{email}/{verifyToken}', 'Auth\RegisterController@sendEmailDone')->name('sendEmailDone');
Auth::routes();
//facebook login
Route::get('auth/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\LoginController@handleProviderCallback');


Route::get('/home', 'HomeController@index')->name('home.dashboard');
Route::post('/crime', 'UserController@create')->name('crime');
Route::get('/sent', 'UserController@success')->name('success.post');
Route::get('/post-crime', 'UserController@index')->name('crime');
Route::get('/request', 'UserController@get_index')->name('get.request');
Route::get('/analytics', 'UserController@analytics')->name('get.analytics');
Route::get('/station/{id}/analytics', 'UserController@each_station')->name('get.each.station');
Route::get('/station/{id}/preference', 'UserController@preference')->name('get.preference');
Route::get('/station/{id}/contacts', 'UserController@contacts')->name('get.contact');
Route::get('/station/{id}/trend', 'UserController@station_trend')->name('get.trend');
Route::get('/station/{id}/today', 'UserController@today')->name('get.today');
Route::get('/search/preference', 'UserController@search')->name('search');
Route::get('/view/requests', 'UserController@allRequest')->name('view.all.requests');
Route::get('/view/{id}/request', 'UserController@eachRequest')->name('client.get.each.request');
Route::get('/view/{id}/case/request', 'UserController@eachAssignedRequest')->name('client.get.each.assigned.request');
// for testing purposes
Route::get('/event', 'EventController@index')->name('get.event');
Route::post('/post/event', 'EventController@create')->name('post.event');
//chat function
Route::get('/chat', 'ChatController@index')->name('chat');
Route::get('/getMessages', function(){
  $allUsers = DB::table('users')->where('id','!=', Auth::user()->id)->get();
  return $allUsers;

});



//
// Route::get('/', 'AdminController@index')->name('admin.dashboard');
// Route::get('/detective', 'DetectiveController@index')->name('detective.dashboard');



Route::prefix('admin')->group(function(){
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/request', 'AdminController@get_requests')->name('admin.get.request');
  Route::get('/requests', 'AdminController@getAllRequests')->name('admin.get.all.request');
  Route::get('/request/{id}', 'AdminController@get_request')->name('admin.get.requests');
  Route::get('/crime/report', 'AdminController@get_reports')->name('admin.get.report');
  Route::post('/make/statement', 'AdminController@create')->name('admin.create.statements');
  Route::get('/crime/each/{id}/report', 'AdminController@get_each_report')->name('admin.get.each.report');
  Route::get('/crime/{id}/statement', 'AdminController@get_each_statement')->name('admin.get.each.statement');
  Route::get('/search/preference/admin', 'AdminController@search')->name('admin.search');
  Route::get('/station/trend', 'AdminController@station_trend')->name('get.admin.trend');

  Route::post('/add/detective', 'DetectiveController@create_detective')->name('detective.add.detective');
  Route::get('/add/detective', 'DetectiveController@get_detective')->name('detective.get.detective');

  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('/detective', 'DetectiveController@index')->name('detective.dashboard');
  Route::get('/detective/statements/{id}', 'DetectiveController@get_index')->name('detective.get.statement');
  Route::post('/detective/make/case', 'DetectiveController@create')->name('detective.post.case');
  // Route::get('/search/preference/admin', 'AdminController@search')->name('detective.search');
  Route::get('/station/trend/detecive', 'DetectiveController@station_trend')->name('get.detective.trend');
  Route::get('/detective/each/{id}/report', 'DetectiveController@get_each_report')->name('detective.get.each.report');
  Route::get('/detecive/report', 'DetectiveController@get_reports')->name('detective.get.report');
  Route::get('/detecive/close/{id}/case', 'DetectiveController@close_case')->name('close.case');
});
