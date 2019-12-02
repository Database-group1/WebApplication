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
Route::get('/advice', function () {
    return view('advice');
//    return view('new');
});
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