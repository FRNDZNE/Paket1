<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Models\Kelas;
use App\Models\Spp;
use App\Models\Siswa;

// use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SppController;
use App\Http\Controllers\SiswaController;






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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home' , function(){
    if (Auth::user()->hasRole('superadmin')) {
        return redirect()->route('index.superadmin');
    }else if (Auth::user()->hasRole('admin')) {
        return redirect()->route('index.admin');
    }else {
        return 'siswa';
    }
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth' , 'role:superadmin'])->prefix('superadmin')->group(function(){

    Route::get('/dashboard' , [App\Http\Controllers\HomeController::class ,'index'])->name('index.superadmin');
    // Halaman Siswa
    Route::get('/siswa' , [App\Http\Controllers\SiswaController::class , 'index'])->name('index.siswa');
    Route::post('/siswa/store' , [App\Http\Controllers\SiswaController::class , 'store'])->name('store.siswa');

    //Halaman Kelas
    Route::get('/kelas' , [App\Http\Controllers\KelasController::class , 'index'])->name('index.kelas');
    Route::post('/kelas/store' , [App\Http\Controllers\KelasController::class , 'store'])->name('store.kelas');
    Route::post('/kelas/update', [App\Http\Controllers\KelasController::class , 'update'])->name('update.kelas');
    Route::post('/kelas/destroy/{id}', [App\Http\Controllers\KelasController::class , 'destroy'])->name('destroy.kelas'); 
    
    //Halaman Angkatan SPP
    Route::get('/spp' , [App\Http\Controllers\SppController::class , 'index'])->name('index.spp');
    Route::post('/spp/store' , [App\Http\Controllers\SppController::class , 'store'])->name('store.spp');
    Route::post('/spp/update', [App\Http\Controllers\SppController::class , 'update'])->name('update.spp');
    Route::post('/spp/destroy/{id}', [App\Http\Controllers\SppController::class , 'destroy'])->name('destroy.spp');

});

Route::middleware(['auth' , 'role:admin'])->prefix('admin')->group(function(){
    Route::get('/dashboard' , [App\Http\Controllers\HomeController::class ,'index'])->name('index.admin');
});