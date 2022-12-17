<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PendonorController;
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
    return view('welcome');

})->name("homepage");
// ->middleware(["withauth"]);

Route::any("/login", [AuthController::class, "login"])->name("login")->middleware(["noauth"]);
Route::any("/logout", [AuthController::class, "logout"])->name("logout")->middleware(["withauth"]);

Route::prefix('pendonor')
    ->name('pendonor.')
    ->controller(pendonorController::class)
    ->group(function () {
        Route::get('/', 'index')->name('list'); // pendonor.list
        Route::get('/show/{pendonor}', 'show')->name('show');
        Route::get('/edit/{pendonor}', 'edit')->name('edit');
        Route::get('/create', 'create')->name('create');
        Route::get('/checkformcreate', 'checkformcreate')->name('checkformcreate');
        Route::post('/store', 'store')->name('store');
        Route::put('/update/{pendonor}', 'update')->name('update');
        Route::delete('/destroy/{pendonor}', 'destroy')->name('destroy');
        Route::put('/check', 'check')->name('check');
        Route::put('/checkform', 'checkform')->name('checkform');
    });

// Route::prefix('form')
//     ->name('form.')
//     ->controller(formController::class)
//     ->group(function () {
//         Route::get('/', 'index')->name('list'); // form.list
//         Route::get('/show/{form}', 'show')->name('show');
//         Route::get('/edit/{form}', 'edit')->name('edit');
//         Route::get('/create', 'create')->name('create');
//         Route::post('/store', 'store')->name('store');
//         Route::put('/update/{form}', 'update')->name('update');
//         Route::delete('/destroy/{form}', 'destroy')->name('destroy');
// });
