<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\HomeController; ////////////////////////////////////
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\admin\AdminClassroomController;
use App\Http\Controllers\Admin\AdminStudentController;
use App\Http\Controllers\Admin\AdminTeacherController;
use App\Http\Controllers\Admin\AdminSubjectController;
use App\Http\Controllers\Admin\AdminGuardianController;


Route::get('/guardians', [GuardianController::class, 'guardians']);
Route::get('/', [ProfilController::class, 'index']);
Route::get('/profil', [ProfilController::class, 'profil']);
Route::get('/kontak', [KontakController::class, 'kontak']);
Route::get('/home', [HomeController::class, 'home']);
Route::get('/classroom', [ClassroomController::class, 'classroom']);
Route::get('/student', [StudentController::class, 'index']);
Route::get('/teacher', [TeacherController::class, 'teacher']);
Route::get('/subject', [SubjectController::class, 'subject']);

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('classroom', AdminClassroomController::class);
    Route::resource('student', AdminStudentController::class);
    Route::resource('teacher', AdminTeacherController::class);
    Route::resource('subject', AdminSubjectController::class);
    Route::resource('guardian', AdminGuardianController::class);
});

Route::get('/dashboard', function(){
    return view('admin.dashboard');
});

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


// adityajayakusuma@MacBook-Pro-aditya myapp % php artisan make:model Teacher -mfscr    


//php artisan migrate:fresh --seed 
//php artisan make:model Guardian -mfscr

//php artisan migrate:rollback      
//php artisan migrate:refresh --seed  
//php artisan db:seed --class=StudentSeeder
//php artisan make:model Student -mf   
//php artisan make:controller StudentController --resource
//php artisan make:controller StudentController    
//php artisan make:components NavLinkMobile                 
//php artisan make:components nav-link-mobile
//git add .

//git commit -m "Update tampilan tabel student dan tambah relasi classroom"
//git push
//git push origin main

