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

// Route::get('orm', 'UserController@orm');
// Route::get('users', 'UserController@index');

// Route::get('example', function(){
//     $user = 'Felix';
//     return view('examples.home', compact('user'));
// });

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::resource('users', 'UserController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
