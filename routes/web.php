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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home.dashboard');
Route::post('/crime', 'UserController@create')->name('crime');
Route::get('/sent', 'UserController@success')->name('success.post');
Route::get('/post-crime', 'UserController@index')->name('crime');
Route::get('/request', 'UserController@get_index')->name('get.request');

//
// Route::get('/', 'AdminController@index')->name('admin.dashboard');
// Route::get('/detective', 'DetectiveController@index')->name('detective.dashboard');



Route::prefix('admin')->group(function(){
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/request', 'AdminController@get_requests')->name('admin.get.request');
  Route::get('/request/{id}', 'AdminController@get_request')->name('admin.get.requests');
  // Route::get('/statements', 'AdminController@get_statements')->name('detective.get.statements');
  Route::post('/make/statement', 'AdminController@create')->name('admin.create.statements');

  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('/detective', 'DetectiveController@index')->name('detective.dashboard');
    Route::get('/detective/statements/{id}', 'DetectiveController@get_index')->name('detective.get.statement');
    Route::post('/detective/make/case', 'DetectiveController@create')->name('detective.post.case');
});
