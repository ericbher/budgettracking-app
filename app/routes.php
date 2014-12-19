<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('uses' => 'HomeController@signUp'));
Route::post('/', array('uses' => 'HomeController@newUser'));

Route::get('deposit',array('uses' => 'HomeController@showDeposit')); 
Route::post('deposit',array('uses' => 'HomeController@makeDeposit')); 



Route::get('dashboard', array('uses' => 'HomeController@checkLogin'));






Route::get('login', array('uses' => 'HomeController@showLogin'));
Route::post('login', array('uses' => 'HomeController@doLogin'));

Route::get('logout', array('uses' => 'HomeController@doLogout'));






