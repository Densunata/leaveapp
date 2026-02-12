<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\PaldoController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'registerPost']);


Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'loginPost']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/hr/dashboard', function () {
    return "Welcome HR!";
})->middleware('auth');

Route::get('/employee/dashboard', function () {
    return "Welcome Employee!";
})->middleware('auth');

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/', function () {
    return view('auth.register');
});




Route::get('/dashboard', [LayoutController::class, 'index'])->name('dashboard.index');

Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance.index');

Route::get('/leave', [LeaveController::class, 'index'])->name('leave.index');

Route::get('/paldo', [PaldoController::class, 'index'])->name('paldo.index');
