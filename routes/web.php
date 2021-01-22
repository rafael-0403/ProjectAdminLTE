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



Route::get('/login', function (){
    return view('Pengguna.login');
})->name('login');

Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');




route::group(['middleware' => ['auth:user,pengguna','ceklevel:admin,user']], function (){
    route::get('/beranda', 'BerandaController@index');
    route::get('halaman-satu', 'BerandaController@halamansatu')->name('halaman-satu');
    route::get('halaman-dua', 'BerandaController@halamandua')->name('halaman-dua');
});