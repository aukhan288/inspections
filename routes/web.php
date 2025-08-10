<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\OperationController;




Auth::routes();

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/users-list', [UserController::class, 'list'])->name('users.list');
Route::get('/operations', [OperationController::class, 'index'])->name('operations.index');
Route::get('/operations-list', [OperationController::class, 'list'])->name('operations.list');
Route::get('/operation/{id?}', [OperationController::class, 'form'])->name('operations.form'); 
Route::post('operations/store/{id?}', [OperationController::class, 'store'])->name('operations.store');
Route::get('/users-by-role', [UserController::class, 'getUsersByRole'])->name('users.byRole');
Route::get('/measures/related-data', [OperationController::class, 'getRelatedData'])
     ->name('measures.relatedData');
