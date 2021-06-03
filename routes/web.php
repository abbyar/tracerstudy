<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\KuesionerController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\DB;


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


Route::get('/main', function () {
    return view('layout/main');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/postlogin','App\Http\Controllers\LoginController@login')->name('login');

Route::group(['middleware'=>['auth']], function () {
    Route::get('/biodata', [BiodataController::class, 'index']);
    Route::post('/biodata',  [BiodataController::class, 'store'])->name('store'); //Memasukan Data Ke Database
    Route::get('/kuesioner', [KuesionerController::class, 'index']);

});

Route::get('/alumni',  [AlumniController::class, 'index']); //Menampilkan Data Tabel
Route::post('/alumni',  [AlumniController::class, 'store'])->name('index'); //Memasukan Data Ke Database
Route::get('/alumni/{alumni}',  [AlumniController::class, 'show']); //Menampilkan Data Sesuai Id
Route::get('/create',  [AlumniController::class, 'create']); //Relasi Jurusan
Route::delete('/alumni/{alumni}',  [AlumniController::class, 'destroy'])->name('index'); //Hapus Data
Route::get('/alumni/{alumni}/edit',  [AlumniController::class, 'edit']); //Menampilkan Form Edit Data
Route::patch('/alumni/{alumni}',  [AlumniController::class, 'update'])->name('index'); //Merubah Data

Route::get('/logout','App\Http\Controllers\LoginController@logout')->name('logout');


Route::get('/',[HomeController::class, 'index']);

