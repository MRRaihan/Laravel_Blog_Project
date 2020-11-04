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
    return view('welcome');
});

//******Authenticatio*******

Route::get('login', 'LoginController@index')->name('user.login');
Route::post('login', 'LoginController@login')->name('login');
Route::post('logout', 'LogoutController@logout')->name('logout');

// *******Admin route********
Route::middleware('auth')->group(function (){
    Route::get('dashboard', 'DashboardController@dashboard')->name('admin.dashboard');
    Route::resource('user', 'UserController');
    Route::resource('category', 'CategoryController');
    Route::resource('author', 'AuthorController');
});

