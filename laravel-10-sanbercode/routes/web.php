<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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
