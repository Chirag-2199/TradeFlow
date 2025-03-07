<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\FinanceController;

// Home Route
Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected Routes (Require Authentication)
Route::middleware(['auth'])->group(function () {
    // Dashboard Route
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // User Profile & Settings
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
    Route::get('/settings', [DashboardController::class, 'settings'])->name('settings');

    // Reports & Notifications
    Route::get('/reports', [DashboardController::class, 'reports'])->name('reports');
    Route::get('/notifications', [DashboardController::class, 'notifications'])->name('notifications');

    // Client, Employee & Stock Management
    Route::resource('/clients', ClientController::class);
    Route::resource('/employees', EmployeeController::class);
    Route::resource('/stocks', StockController::class);

    // Finance Management
    Route::get('/finance', [FinanceController::class, 'index'])->name('finance');
});

