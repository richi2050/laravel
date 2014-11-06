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

Route::get('/', function()
{
	return View::make('login');
});

Route::get('/users',function(){
    return View::make('users.list');
});


Route::get('/list','UserController@lista');


Route::post('login',array('us' =>'login','uses'=>'AuthController@postLogin'));


Route::get('admin/dashboard',array('us' => 'admin','uses'=>'UserController@indexAdmin'));


