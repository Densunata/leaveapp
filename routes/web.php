<?php


use App\Http\Controllers\LeaveController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\PaldoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AdminAuthController;


Route::get('/employee', function () {
    return view('welcome');
});


Route::resource("/employee", EmployeeController::class);






Route::get('/dashboard', [LayoutController::class, 'index'])->name('dashboard.index');

Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance.index');

Route::get('/leave', [LeaveController::class, 'index'])->name('leave.index');

//Route::get('/paldo', [PaldoController::class, 'index'])->name('paldo.index');


Route::prefix('paldo')->group(function () {
    Route::get('/', [PaldoController::class,'index'])->name('paldo.index');

    Route::get('/create',[PaldoController::class, 'create'])->name('paldo.create');

    Route::get('/edit', [PaldoController::class, 'edit'])->name('paldo.edit');

    Route::get('/update', [PaldoController::class, 'update'])->name('paldo.update');
});

// /paldo
// /paldo/create
// /paldo/update

// admin auth
Route::prefix('admin')->group(function () {

    Route::get('/register', [AdminAuthController::class, 'showRegister']);
    Route::post('/register', [AdminAuthController::class, 'register']);

    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login']);

    Route::get('/dashboard', [AdminAuthController::class, 'dashboard'])
        ->middleware('auth:admin');

    Route::get('/logout', [AdminAuthController::class, 'logout']);
});

