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
//      return ('welcome');
    return view('top');
});


/* 環境のルーティング */
Route::get('land/tomato', 'LandController@tomato'); // トマト
Route::get('land/green_papper', 'LandController@green_papper'); // ピーマン
Route::get('land/eggplant', 'LandController@eggplant'); // なす
Route::get('land/pumpkin', 'LandController@pumpkin'); // かぼちゃ
Route::get('land/cucumber', 'LandController@cucumber'); // きゅうり
Route::get('land/watermelon', 'LandController@watermelon'); // すいか
Route::get('land/radish', 'LandController@radish'); // 大根
Route::get('land/cabbage', 'LandController@cabbage'); // キャベツ
Route::get('land/cauliflower', 'LandController@cauliflower'); // カリフラワー
Route::get('land/green_soybean', 'LandController@green_soybean'); // 枝豆
Route::get('land/kidney_beans', 'LandController@kidney_beans'); // インゲン豆


/* 農業アドバイスのルーティング */
Route::get('/advice/tomato', function () {
    return view('tomato');
 });
 Route::get('/advice/piman', function () {
    return view('piman');
 });
 Route::get('/advice/nasu', function () {
    return view('nasu');
 });
 Route::get('/advice/kabocha', function () {
    return view('kabocha');
 });
 Route::get('/advice/kyuri', function () {
    return view('kyuri');
 });
 Route::get('/advice/suika', function () {
    return view('suika');
 });
 Route::get('/advice/daikon', function () {
    return view('daikon');
 });
 Route::get('/advice/kyabetsu', function () {
    return view('kyabetsu');
 });
 Route::get('/advice/karifurawa', function () {
    return view('karifurawa');
 });
 Route::get('/advice/edamame', function () {
    return view('edamame');
 });
 Route::get('/advice/ingenmame', function () {
    return view('ingenmame');
 });


/* 見積もり(仮)のルーティング */
 Route::get('/mitsumori', function() {
    return view('mitsumori');
});


/* ベジプラスのルーティング */
Route::get('vegplus', 'VegplusController@index');
Route::get('vegplus/vegquest', 'VegplusController@question');
Route::get('vegplus/vegquest/watermelon', 'VegplusController@watermelon');
Route::get('vegplus/vegquest/pumpkin', 'VegplusController@pubpkin');
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

Route::get('/out', function () {
    return view('html/out');
});