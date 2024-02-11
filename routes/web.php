<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');

Route::prefix('contact')->group(function () {
    Route::get('/create', [ContactController::class, 'create'])->name('contact.create');
    Route::post('/store', [ContactController::class, 'store'])->name('contact.store');
    Route::get('/index', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/show/{contact}', [ContactController::class, 'show'])->name('contact.show');
    Route::get('/edit/{contact}', [ContactController::class, 'edit'])->name('contact.edit');
    Route::put('/update/{contact}', [ContactController::class, 'update'])->name('contact.update');
    Route::delete('/destroy/{contact}', [ContactController::class, 'destroy'])->name('contact.destroy');
});