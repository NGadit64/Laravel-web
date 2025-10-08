<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\HomeController; ////////////////////////////////////
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\ClassroomController;

Route::get('/guardians', [GuardianController::class, 'guardians']);
Route::get('/', [ProfilController::class, 'index']);
Route::get('/profil', [ProfilController::class, 'profil']);
Route::get('/kontak', [KontakController::class, 'kontak']);
Route::get('/home', [HomeController::class, 'home']);
Route::get('/classroom', [ClassroomController::class, 'classroom']);
Route::get('/student', [StudentController::class, 'index']);

// Route::get('/profil', function () {
//     return view('profil', [
//         'title' => 'profil',
//         'nama' => 'adi',
//     ]);
// });
// Route::get('/kontak', function () {
//     return view('kontak', [
//         'title' => 'kontak',
//     ]);
// });
// Route::get('/home', function () {
//     return view('home', [
//         'title' => 'home',
//     ]);
// });


