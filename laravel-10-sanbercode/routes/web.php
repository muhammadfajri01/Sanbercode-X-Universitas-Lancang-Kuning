<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CastController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/index', [HomeController::class, 'index'])->name('index');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/send', [AuthController::class, 'send'])->name('send');
Route::get('/welcome', [AuthController::class, 'welcome'])->name('welcome');

// Route::get('/master', function () {
//     return view('layout.master');
// });

Route::get('/table', function () {
    return view('halaman.table');
})->name('table');

Route::get('/data-tables', function () {
    return view('halaman.datatable');
})->name('data-tables');


Route::get('/cast', [CastController::class, 'index'])->name('cast');
Route::get('/cast/create', [CastController::class, 'create'])->name('cast.create');
Route::post('/cast', [CastController::class, 'store'])->name('cast.store');
Route::get('/cast/{cast_id}', [CastController::class, 'show'])->name('cast.show');
Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit'])->name('cast.edit');
Route::put('/cast/{cast_id}', [CastController::class, 'update'])->name('cast.update');
Route::delete('/cast/{cast_id}', [CastController::class, 'destroy'])->name('cast.destroy');
