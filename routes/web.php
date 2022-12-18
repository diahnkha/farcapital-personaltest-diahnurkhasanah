<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PendonorController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\FormController;

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

Route::get('/', function(){
    return redirect()->route('pendonor.dashboard');

})->name("homepage");

// Route::get('/', function(){
//     return view('welcome');

// })->name("homepage")
// ->middleware(["withauth"]);

Route::any("/login", [AuthController::class, "login"])->name("login")->middleware(["noauth"]);
Route::any("/logout", [AuthController::class, "logout"])->name("logout")->middleware(["withauth"]);

Route::prefix('pendonor')
    ->name('pendonor.')
    ->controller(pendonorController::class)
    ->group(function () {
        Route::get('/', 'index')->name('dashboard'); // pendonor.dashboard
        Route::get('/list', 'list')->name('list')->middleware(["withauth"]); // pendonor.list
        Route::get('/show/{pendonor}', 'show')->name('show')->middleware(["withauth"]);
        Route::get('/edit/{pendonor}', 'edit')->name('edit')->middleware(["withauth"]);
        Route::get('/create', 'create')->name('create');
        Route::get('/checkformcreate', 'checkformcreate')->name('checkformcreate');
        Route::post('/store', 'store')->name('store');
        Route::put('/update/{pendonor}', 'update')->name('update');
        Route::delete('/destroy/{pendonor}', 'destroy')->name('destroy');
    });

Route::prefix('petugas')
    ->name('petugas.')
    ->controller(PetugasController::class)
    ->group(function () {
        Route::get('/', 'index')->name('dashboard'); // petugas.dashboard
        Route::get('/listpendonor', 'listpendonor')->name('listpendonor'); // petugas.listpendonor
        Route::get('/detail/{pendonor:email}', 'detailpendonor')->name('detailpendonor'); //petugas.detailpendonor
    });


