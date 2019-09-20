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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/logout','Auth\LoginController@logout');

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/', function () {
//     return view('templates.login');
// });

/*SITE*/
// Route::get('/', 'HomeController@proses');
// Route::get('/home/filter', 'HomeController@celery_filter');
// Route::get('/', 'IPAController@push');
Route::get('/', 'DashboardController@index');
Route::get('/ipa-topic', 'IPAController@push');
Route::get('/ipa-account', 'AccountController@account');
Route::get('/imm-dashboard', 'IMMController@index');
// Route::get('/about', function () {
//     return view('contents.about');
// });