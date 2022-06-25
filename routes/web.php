<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Models\Feedback;

Route::get('/', function () {
    return view('welcome', [
        'feedbacks' => Feedback::all()
    ]);
});
Route::get('/success', function () {
    return view('success');
});

Route::get('/feedbacks/create', [MainController::class, 'create'])->name('create');
Route::post('/feedbacks', [MainController::class, 'store']);
