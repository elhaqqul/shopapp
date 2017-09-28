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
#GET
Route::get('/', function () {
    return view('index');
});
Route::get('administrator', function(){
	return view('login');
});
Route::group(['prefix'=>'administrator','middleware' => 'userlogin'],function () {
	Route::get('home', function(){
		return view('admin.index');
	});
	Route::get('kategori',function(){
		return view('admin.kategori');
	});
	Route::get('getKategori','Kategori@getKategori');
	Route::post('saveKategori','Kategori@saveKategori');
});
Route::get('signout',function(){
	Session::flush();
	return redirect('administrator/home');
});
Route::post('getLogin','Login@getLogin');

