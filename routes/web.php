<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArmadaController;

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
Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/customers', [CustomerController::class, 'index']);
    Route::post('/customers', [CustomerController::class, 'store']);
    Route::get('/customers/create', [CustomerController::class, 'create']);
    Route::get('/customers/{id}/edit', [CustomerController::class, 'edit']);
    Route::put('/customers/{id}', [CustomerController::class, 'update']);
    Route::delete('/customers/{id}', [CustomerController::class, 'destroy']);

    Route::get('/armada', [ArmadaController::class, 'index']);
    Route::post('/armada', [ArmadaController::class, 'store']);
    Route::get('/armada/create', [ArmadaController::class, 'create']);
    Route::get('/armada/{id}/edit', [ArmadaController::class, 'edit']);
    Route::put('/armada/{id}', [ArmadaController::class, 'update']);
    Route::delete('/armada/{id}', [ArmadaController::class, 'destroy']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
