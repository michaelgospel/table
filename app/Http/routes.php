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





Route::get('user/index','TableController@index');
Route::get('user/add','TableController@add');

Route::post('user/insert','TableController@insert');


Route::get('user/queryUser','TableController@queryUser');
Route::post('user/showUser','TableController@showUser');





