<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KesepakatanController;
use App\Http\Controllers\requestController;

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

// home
Route::get('/', [HomeController::class, 'createHome']);
Route::get('/home', [HomeController::class, 'createHome']);

// login dan daftar
Route::get('/login', [UserController::class, 'createLogin']);
Route::get('/daftar', [UserController::class, 'createDaftar']);
Route::get('/daftar-petani', [UserController::class, 'createDaftarPetani']);
Route::get('/daftar-swalayan', [UserController::class, 'createDaftarSwalayan']);

Route::post('/login', [UserController::class, 'checkLogin']);
Route::post('/daftar-petani', [UserController::class, 'checkDaftarPetani']);
Route::post('/daftar-swalayan', [UserController::class, 'checkDaftarSwalayan']);

// logout
Route::get('/logout', [UserController::class, 'logout']);

// profile
Route::get('/profile', [UserManagementController::class, 'profil']);
Route::get('/change-password', [UserManagementController::class, 'createChangePassword']);
Route::get('/change-data', [UserManagementController::class, 'createChangeData']);

Route::post('/change-password', [UserManagementController::class, 'checkChangePassword']);
Route::post('/change-data', [UserManagementController::class, 'checkChangeData']);

// Petani (produk)
Route::get('/daftar-produk', [ProdukController::class, 'daftarProduk']);

Route::get('/tambah-produk', [ProdukController::class, 'createTambahProduk']);
Route::post('/tambah-produk', [ProdukController::class, 'checkTambahProduk']);

Route::get('/edit-produk/{id}', [ProdukController::class, 'createEditProduk']);
Route::post('/edit-produk/{id}', [ProdukController::class, 'checkEditProduk']);

Route::get('/hapus-produk/{id}', [ProdukController::class, 'hapusProduk']);

// Swalayan (produk)
Route::get('/detail-produk/{id}', [ProdukController::class, 'detailProduk']);

// Kesepakatan
Route::get('/daftar-kesepakatan', [KesepakatanController::class, 'daftarKesepakatan']);
Route::get('/terima-kesepakatan/{id}', [KesepakatanController::class, 'terimaKesepakatan']);
Route::get('/tolak-kesepakatan/{id}', [KesepakatanController::class, 'tolakKesepakatan']);
Route::get('/submit-kesepakatan/{id}', [KesepakatanController::class, 'submitKesepakatan']);

// request kesepakatan
Route::get('/request-petani', [requestController::class, 'requestPetani']);
Route::get('/request-swalayan', [requestController::class, 'requestSwalayan']);