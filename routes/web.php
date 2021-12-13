<?php

use App\Http\Controllers\{EmployeeController, SheduleController, ItemController, DashboardController};
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

// Route::view('dashboard', 'dashboard/dashboard')->name('dashboard');;
Route::get('/dashboard', [DashboardController::class, 'generalSearch'])->name('dashboard');
Route::redirect('/', 'dashboard', 301);

Route::get('/items', [ItemController::class, 'index'])->name('items');
Route::get('/items/{id}', [ItemController::class, 'search'])->name('searchItems');
Route::get('/funcionario', [EmployeeController::class, 'getAll'])->name('employee');
Route::get('/funcionario/{id}', [EmployeeController::class, 'search'])->name('searchEmployee');
Route::get('/horario', [SheduleController::class, 'getShedule'])->name('shedule');
