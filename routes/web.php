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

//landing page
Route::get('/', function () {
    return view('home');
});

//kelas
Route::get('kelas', 'HomeController@tampilkanKelas');
Route::get('kelas/{id}', 'HomeController@lihatKelas')->middleware('cekLogin');
Route::post('kelas/{id}', 'HomeController@ambilKelas')->middleware('cekTipeUser');
Route::get('tambah-kelas', function (){
    return view('tambahKelas');
});
Route::post('tambah-kelas', 'DashboardController@tambahKelas');
Route::get('cari-kelas', 'HomeController@cariKelas');

//register
Route::get('register', function () {
    return view('tipeRegister');
});
Route::get('register/pelajar', 'AuthController@siswaRegisPage');
Route::get('register/pengajar', 'AuthController@pengajarRegisPage');
Route::post('register/pelajar', 'AuthController@regisSiswa');
Route::post('register/pengajar', 'AuthController@regisPengajar');

//login
Route::get('login', function () {
    return view('login');
});
Route::post('login', 'AuthController@login');

//logout
Route::get('logout', function () {
    Session::flush();
    return redirect('/');
});

//dashboard
Route::get('dashboard/pelajar/{id}', 'DashboardController@siswa');
Route::get('dashboard/pengajar/{id}', 'DashboardController@pengajar');
