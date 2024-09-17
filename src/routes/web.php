<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/submit', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
Route::get('/thanks', [ContactController::class, 'thanks'])->name('contact.thanks');

//copy

Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'store'])->name('auth.store');
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');

//copy

Route::middleware(['auth', 'can:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/users', [AdminController::class, 'manageUsers'])->name('admin.manageUsers');
    Route::get('/admin/reports', [AdminController::class, 'viewReports'])->name('admin.viewReports');
});

//copy