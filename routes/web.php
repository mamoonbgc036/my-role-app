<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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
    dd('check');
});

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'store']);
Route::get('register', [AuthController::class, 'register'])->name('register');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('create-user', [DashboardController::class, 'createUser'])->name('create-user')->middleware(['auth', 'checkRole:manage-user']);
Route::post('create-user', [DashboardController::class, 'create_user'])->middleware(['auth', 'checkRole:manage-user']);

Route::get('create-permission', [DashboardController::class, 'createPermission'])->name('create-permission')->middleware('checkRole:manage-permissions');
Route::post('create-permission', [DashboardController::class, 'create_permission'])->middleware('checkRole:manage-permissions');

Route::get('create-role', [DashboardController::class, 'createRole'])->name('create-role');
Route::post('create-role', [DashboardController::class, 'create_role']);
