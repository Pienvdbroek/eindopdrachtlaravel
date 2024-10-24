<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BearController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [BearController::class, 'index'])->name('bears.index'); //index


Route::get('/create', [BearController::class, 'create'])->name('bears.create');
Route::post('/bears', [BearController::class, 'store'])->name('bears.store');

Route::get('/{id}', [BearController::class, 'show'])->name('bears.show');

Route::get('/{id}/edit', [BearController::class, 'edit'])->name('bears.edit');
Route::put('/{id}', [BearController::class, 'update'])->name('bears.update');

Route::delete('/{id}', [BearController::class, 'destroy'])->name('bears.destroy');

