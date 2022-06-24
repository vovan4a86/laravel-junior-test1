<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/feedbacks/create', [MainController::class, 'create'])->name('feedbacks');

Route::get('/feedbacks', [MainController::class, 'index']);
Route::post('/feedbacks', [MainController::class, 'store']);
