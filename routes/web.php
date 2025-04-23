<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'index'])->name('index');

Route::get('/users/create', [UserController::class, 'create'])->name('create');
Route::post('/users/store', [UserController::class, 'store'])->name('store');

Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('edit');
Route::post('/users/update/{id}', [UserController::class, 'update'])->name('update');

Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('destroy');

Route::resource('/produits', ProduitController::class);
