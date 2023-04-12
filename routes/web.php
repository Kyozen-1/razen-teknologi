<?php

use Illuminate\Support\Facades\Route;

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

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['register' => false, 'login' => false]);

Route::get('/', 'LandingPage\HomeController@beranda')->name('beranda');
Route::get('/perusahaan','LandingPage\HomeController@perusahaan')->name('perusahaan');
Route::get('/layanan','LandingPage\HomeController@layanan')->name('layanan');
Route::get('/layanan/detail/{id}','LandingPage\HomeController@layanan_detail')->name('layanan.detail');
Route::get('/aplikasi','LandingPage\HomeController@aplikasi')->name('aplikasi');
Route::get('/aplikasi/detail/{id}','LandingPage\HomeController@aplikasi_detail')->name('aplikasi.detail');
Route::get('/blog','LandingPage\HomeController@blog')->name('blog');
Route::get('/kontak','LandingPage\HomeController@kontak')->name('kontak');
Route::post('/kontak-kami','LandingPage\HomeController@kontak_kami')->name('kontak-kami');


Route::get('/login','Auth\RazenTeknologi\LoginController@showLoginForm')->name('razen-teknologi.login');
Route::post('/login', 'Auth\RazenTeknologi\LoginController@login')->name('razen-teknologi.login.submit');
Route::get('/logout', 'Auth\RazenTeknologi\LoginController@logout')->name('razen-teknologi.logout');

Route::group(['middleware' => 'auth:razen_teknologi'], function(){
    @include('razen-teknologi.php');
});
