<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TambahKegiatanController;
use App\Http\Controllers\KoorController;
use App\Http\Controllers\DosenController;

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

//Route::get('/home', [HomeController::class,'index']);
//Route ::get('/', [LoginController::class,'index'])->name('login')->middleware('guest');
Route ::get('/daftar', [LoginController::class,'daftar'])->middleware('guest');


 Route::get('/home', [HomeController::class,'index'])->middleware('mahasiswa');
 Route::get('/tambahkegiatan', [TambahKegiatanController::class,'index'])->middleware('mahasiswa');
 Route::get('/bukti', [TambahKegiatanController::class,'BuktiMBKMindex'])->middleware('mahasiswa');

 Route::get('/homekoor', [KoorController::class,'index'])->middleware('koor');
 Route::get('/datakoor', [KoorController::class,'getData'])->name('getData');
 //Route::get('/cekkoor', [KoorController::class,'getData'])->name('cekkoor');
 Route::get('/cekkoor/{id}', [KoorController::class,'getCek'])->name('cekkoor');
 Route::get('/tambahkegiatankoor', [KoorController::class,'tambahKegiatanKoorView'])->middleware('koor');
 Route::get('/konfirmasimhs', [KoorController::class,'konfirmasiMhsKoorView'])->middleware('koor');
 Route::post('/tambahkegiatankoor', [KoorController::class,'store']);

 
 Route::get('/homedosen', [DosenController::class,'index'])->middleware('dosen');


Route ::get('/', [LoginController::class,'index'])->name('login');


Route ::post('/login', [LoginController::class,'authenticate']);
Route ::post('/logout', [LoginController::class,'logout']);
Route ::post('/daftar', [LoginController::class,'store']);




//Route ::get('/login/tentang', [LoginController::class,'tentang']);