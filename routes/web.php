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
    return view('index');
});
Route::get('/tips/index', function () {
    return view('tips.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']], function(){
	Route::resource('pekerjas','PekerjasController');
	Route::resource('perusahaans','PerusahaansController');
	Route::resource('komentars','KomentarsController');
});

Route::group(['prefix'=>'member','middleware'=>['auth','role:member']], function(){
	Route::resource('lowongans','LowongansController');
	Route::resource('civis','CivisController');
});

Route::group(['prefix'=>'perusahaan','middleware'=>['auth','role:perusahaan']], function(){
	Route::resource('pers','PersController');
	Route::resource('pegawais','PegawaisController');
});

// Route::group(['prefix'=>'member','middleware'=>['auth','role:member']], function(){
// 	Route::resource('lowongans','LowongansController');
// 	Route::resource('pers','PersController');
// });