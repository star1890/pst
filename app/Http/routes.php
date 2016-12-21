<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {
    // Login Routes
    Route::get('login', 'AdminAuth\AuthController@showLoginForm');
    Route::post('login', 'AdminAuth\AuthController@login');
    Route::get('logout', 'AdminAuth\AuthController@logout');
    
    // Registration Routes...
    Route::get('register', 'AdminAuth\AuthController@showRegistrationForm');
    Route::post('register', 'AdminAuth\AuthController@register');
    
    Route::get('/', function () {
        return redirect()->action('AdminDashboardController@index');
    });
    
    Route::resource('dashboard', 'AdminDashboardController');
});

Route::auth();

Route::get('/home', 'HomeController@index');
