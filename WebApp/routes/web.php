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

Route::get('vegplus', 'VegplusController@index');
Route::get('vegplus/vegquest', 'VegplusController@question');

Route::get('vegplus/vegquest/watermelon', 'VegplusController@watermelon');
Route::get('vegplus/vegquest/pumpkin', 'VegplusController@pumpkin');
Route::get('vegplus/vegquest/radish', 'VegplusController@radish');
Route::get('vegplus/vegquest/eggplant', 'VegplusController@eggplant');
Route::get('vegplus/vegquest/pimento', 'VegplusController@pimento');
Route::get('vegplus/vegquest/cauliflower', 'VegplusController@cauliflower');
Route::get('vegplus/vegquest/tomato', 'VegplusController@tomato');
Route::get('vegplus/vegquest/kidney', 'VegplusController@kidney');
Route::get('vegplus/vegquest/mandragora', 'VegplusController@mandragora');
Route::get('vegplus/vegquest/soybean', 'VegplusController@soybean');
Route::get('vegplus/vegquest/cucumber', 'VegplusController@cucumber');
Route::get('vegplus/vegquest/cabbage', 'VegplusController@cabbage');

/*-----------------------------------------------------------------*/

Route::get('/advice/mitsumori', function(){
    return view('mitsumori');
});;
