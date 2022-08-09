<?php

use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
//Route::get('/mahasiswa', function(){
//    return view('mhs');
//});
//Route::view('viewmhs', 'welcome');
//Route::get('/prodi/all', [ProdiController::class, 'index']);
//Route::get('/prodi/detail', [ProdiController::class, 'show']);

Route::view('/pertemuan2', 'view-pertemuan2');






