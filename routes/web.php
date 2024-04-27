<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Pelanggan;
use App\Http\Controllers\Produk;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.loginadmin');
});

//Layout
Route::get('loginadmin',[Admin::class,'loginadmin']);
Route::post('loginadmin',[Admin::class,'loginadmi']);

//Produk
Route::get('produk', [Produk::class, 'produk']);
Route::get('/tambahproduk', [Produk::class, 'tambahprodu']);
Route::post('/tambahproduk', [Produk::class, 'tambahproduk']);
Route::get('editproduk/{id}', [Produk::class, 'editproduk']);
Route::Post('editproduk/{id}', [Produk::class, 'editprodu']);
Route::get('hapusproduk/{id}', [Produk::class, 'hapusproduk']);

//Pelanggan
Route::get('Pelanggan',[Pelanggan::class,'Pelanggan']);
Route::get('/tambahpelanggan',[Pelanggan::class,'tambahpelangga']);
Route::post('/tambahpelanggan',[Pelanggan::class,'tambahpelanggan']);
Route::get('editpelanggan/{id}',[Pelanggan::class,'editpelanggan']);
Route::post('editpelanggan/{id}',[Pelanggan::class,'editpelangga']);
Route::get('hapuspelanggan/{id}',[Pelanggan::class,'hapuspelanggan']);

//Admin
Route::get('admin',[Admin::class,'admin']);
Route::get('tambahadmin',[Admin::class,'tambahadmi']);
Route::post('tambahadmin',[Admin::class,'tambahadmin']);
Route::get('editadmin/{id}',[Admin::class,'editadmin']);
Route::post('editadmin/{id}',[Admin::class, 'editadmi']);
Route::get('hapusadmin/{id}',[Admin::class,'hapusadmin']);
