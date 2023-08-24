<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
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
    return view('welcome');
});

Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/helpdesk', [HomeController::class, 'helpDesk'])->name('helpdesk');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/purchasing', [HomeController::class, 'purchasing'])->name('purchasing');
Route::get('/employeeform', [HomeController::class, 'employeeform'])->name('employeeform');
Route::get('/testdrive', [HomeController::class, 'testdrive'])->name('testdrive');
Route::get('/costumercard', [HomeController::class, 'costumercard'])->name('costumercard');
Route::get('/kpi', [HomeController::class, 'kpi'])->name('kpi');
