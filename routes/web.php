<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\listbarangController;
use App\Http\Controllers\DatabarangController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/user/{id}', function ($id) {
    return 'Users dengan ID ' . $id;
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Dashboard Admin';
    });

    Route::get('/users', function () {
        return 'Admin User';
    });
});

//Route::get('/listbarang/{id}/{nama}', function ($id, $nama) {
//   return view('list_barang', compact('id', 'nama'));
//});

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);
Route::get('/databarang', [DataBarangController::class, 'tampilkan']);