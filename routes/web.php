<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'main'])->name('main');


// Guardar Formularios
Route::post('/san-lorenzo', [MainController::class, 'sanLorenzo'])->name('save.san-lorenzo');
Route::post('/arroyo', [MainController::class, 'arroyo'])->name('save.arroyo');
Route::post('/bsas', [MainController::class, 'bsas'])->name('save.bsas');
Route::post('/bahia', [MainController::class, 'bahia'])->name('save.bahia');