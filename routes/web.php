<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/admin/login', function () {
    return view('admin.login');
});

use App\Http\Controllers\AdminAuthController;

Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.authenticate');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::get('/admin/login', function () {
    return view('admin.login'); // La página de login
});

// Protegemos el acceso al panel de administración
Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard'); // El panel de administración
    });
});