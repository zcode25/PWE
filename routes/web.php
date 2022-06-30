<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('mahasiswa/index');
// });

Route::controller(MahasiswaController::class)->group(function() {
    Route::get('/', 'index')->name("home");
    Route::get('/mahasiswa', 'index')->name("home");
    Route::get('/mahasiswa/create', 'create')->name('create');
    Route::post('/mahasiswa/store', 'store')->name('store');
    Route::get('/mahasiswa/edit/{nim}', 'edit')->name('edit');
    Route::put('/mahasiswa/update/{nim}', 'update')->name('update');
    Route::delete('/mahasiswa/delete/{nim}', 'destroy')->name('delete');
    Route::get('/mahasiswa/cetak', 'cetak')->name('cetak');
});
