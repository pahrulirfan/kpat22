<?php

use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PraktikumController;

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

Route::get('/praktikum', [PraktikumController::class, 'index']);
Route::get('/praktikum/kpat', [PraktikumController::class, 'kpat']);

Route::view('/portofolio', 'portofolio');

Route::get('soal', [\App\Http\Controllers\SoalController::class, 'index'])->name('soal.index');
Route::get('soal/create', [\App\Http\Controllers\SoalController::class, 'create'])->name('soal.create');
Route::post('soal/save', [\App\Http\Controllers\SoalController::class, 'save'])->name('soal.save');





