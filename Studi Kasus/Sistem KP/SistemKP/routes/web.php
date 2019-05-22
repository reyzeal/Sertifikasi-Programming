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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm');
Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin.login');
Route::get('mahasiswa/login', 'Auth\MhsLoginController@showLoginForm');
Route::post('mahasiswa/login', 'Auth\MhsLoginController@login')->name('mahasiswa.login');
Route::get('dosen/login', 'Auth\DosenLoginController@showLoginForm');
Route::post('dosen/login', 'Auth\DosenLoginController@login')->name('dosen.login');

Route::group(['middleware'=>'auth:web','prefix'=>'admin'],function(){
    Route::get('/','AdminController@home');

    Route::get('/mahasiswa','AdminController@mahasiswa')->name('admin.mahasiswa');
    Route::get('/mahasiswa/add','AdminController@mahasiswaAddIndex');
    Route::post('/mahasiswa/add','AdminController@mahasiswaAdd');
    Route::get('/mahasiswa/edit/{id}','AdminController@mahasiswaEditIndex');
    Route::post('/mahasiswa/edit/{id}','AdminController@mahasiswaEdit');
    Route::any('/mahasiswa/delete/{id}','AdminController@mahasiswaDelete');

    Route::get('/dosen','AdminController@dosen')->name('admin.dosen');
    Route::get('/dosen/add','AdminController@dosenAddIndex');
    Route::post('/dosen/add','AdminController@dosenAdd');
    Route::get('/dosen/edit/{id}','AdminController@dosenEditIndex');
    Route::post('/dosen/edit/{id}','AdminController@dosenEdit');
    Route::any('/dosen/delete/{id}','AdminController@dosenDelete');
});
Route::group(['middleware'=>'auth:mahasiswa','prefix'=>'mahasiswa'],function(){
    Route::get('/','MhsController@home');

    Route::get('/internship','MhsController@internshipIndex');
    Route::post('/internship','MhsController@internship');

    Route::get('/bimbingan','MhsController@bimbinganIndex');
    Route::post('/bimbingan','MhsController@bimbingan');
});
Route::group(['middleware'=>'auth:dosen','prefix'=>'dosen'],function(){
    Route::get('/','DosenController@home');
});

Route::get('/home',function(){
  if(Auth::guard('dosen')->check())
    return redirect('/dosen');
  elseif(Auth::guard('mahasiswa')->check())
    return redirect('/mahasiswa');
  elseif(Auth::guard('web')->check())
    return redirect('/admin');
});
