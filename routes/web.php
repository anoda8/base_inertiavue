<?php

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

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'welcome'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
    Route::get('/', [App\Http\Controllers\Admin\AppController::class, 'index'])->name('admin');
});

Route::group(['prefix' => 'manager', 'middleware' => ['role:manager']], function() {
    Route::get('/', [App\Http\Controllers\Manager\AppController::class, 'index'])->name('manager');
});

Route::group(['prefix' => 'guru', 'middleware' => ['role:guru']], function() {
    Route::get('/', [App\Http\Controllers\Guru\AppController::class, 'index'])->name('guru');
});

Route::group(['prefix' => 'siswa', 'middleware' => ['role:siswa']], function() {
    Route::get('/', [App\Http\Controllers\Siswa\AppController::class, 'index'])->name('siswa');
});
