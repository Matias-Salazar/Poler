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
    Auth ::routes ();

    Route ::group (['middleware' => 'auth'], function () {
        Route ::get ('/home', 'HomeController@index') -> name ('home');
        Route ::get ('/home/create-pool', 'CreatePool@index');
        Route ::post ('/home/create-pool', 'CreatePool@store');
    });

    Route ::get ('/', function () {
        return view ('index');
    });

    Route ::get ('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

