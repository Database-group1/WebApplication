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

Route::get('land/index', function() {
    return view('land.index');
});
Route::get('land/tomato', 'LandController@tomato');
Route::get('land/green_papper', 'LandController@green_papper');
Route::get('land/eggplant', 'LandController@eggplant');
Route::get('land/pumpkin', 'LandController@pumpkin');
Route::get('land/cucumber', 'LandController@cucumber');
Route::get('land/watermelon', 'LandController@watermelon');
Route::get('land/radish', 'LandController@radish');
Route::get('land/cabbage', 'LandController@cabbage');
Route::get('land/cauliflower', 'LandController@cauliflower');
Route::get('land/green_soybean', 'LandController@green_soybean');
Route::get('land/kidney_beans', 'LandController@kidney_beans');
