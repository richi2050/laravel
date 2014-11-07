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
    if (Auth::check())
    {
        return View::make('users.admin');
    }

    return View::make('login');

});

Route::get('users',function(){
    return View::make('users.list');
});

Route::get('admin/user/new',function(){
    return View::make('users.new_admin');
});

Route::get('admin/user/destroy/{id}',array('uses'=>'UserController@destroyAdmin'));


Route::get('admin/edit/{id}',array('uses' => 'UserController@editAdmin'));

Route::post('admin/save/user',array('uses'=> 'UserController@saveAdmin'));


Route::get('admin/usuarios',array('us'=>'lista','uses'=>'UserController@lista'));


Route::post('login',array('us' =>'login','uses'=>'AuthController@postLogin'));


Route::get('admin/dashboard',array('us' => 'admin','uses'=>'UserController@indexAdmin'));

Route::get('logout',array('us' =>'logout','uses' => 'AuthController@logOut'));


