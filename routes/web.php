<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\MeasureController;
use App\Http\Controllers\admin\QuestionController;
use App\Http\Controllers\admin\TagController;
use App\Http\Controllers\admin\SubTagController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\OperationController;




Auth::routes();

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/measures', [MeasureController::class, 'index'])->name('measures');
Route::get('/measures-list', [MeasureController::class, 'list'])->name('measures.list');
Route::delete('/measure/{id}', [MeasureController::class, 'destroy'])->name('measure.destroy');
Route::get('/questions', [QuestionController::class, 'index'])->name('questions');
Route::get('/questions-list', [QuestionController::class, 'list'])->name('questions.list');
Route::delete('/questions/{id}', [QuestionController::class, 'delete']);
Route::post('/questions/save', [QuestionController::class, 'save']);

Route::get('/tags', [TagController::class, 'index'])->name('tags.index');
Route::get('/tags-list', [TagController::class, 'list'])->name('tags.list'); // for DataTables ajax
Route::post('/tags/save', [TagController::class, 'save'])->name('tags.save'); // add & edit in one
Route::delete('/tags/{id}', [TagController::class, 'delete'])->name('tags.delete');

Route::get('/subtags', [SubTagController::class, 'index'])->name('subtags.index');
Route::get('/subtags/list', [SubTagController::class, 'list'])->name('subtags.list');
Route::post('/subtags/store', [SubTagController::class, 'store'])->name('subtags.store');
Route::delete('/subtags/{id}', [SubTagController::class, 'destroy'])->name('subtags.destroy');

Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/users-list', [UserController::class, 'list'])->name('users.list');
Route::get('/operations', [OperationController::class, 'index'])->name('operations.index');
Route::get('/operations-list', [OperationController::class, 'list'])->name('operations.list');
Route::get('/operation/{id?}', [OperationController::class, 'form'])->name('operations.form'); 
Route::post('operations/store/{id?}', [OperationController::class, 'store'])->name('operations.store');
Route::get('/users-by-role', [UserController::class, 'getUsersByRole'])->name('users.byRole');
Route::get('/measures/related-data', [OperationController::class, 'getRelatedData'])
     ->name('measures.relatedData');
Route::get('/get-sub-tags', [OperationController::class, 'getSubTags']);
