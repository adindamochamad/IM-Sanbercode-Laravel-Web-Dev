<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('index');
});

Route::get('/form', function () {
    return view('form');
});

Route::post('/welcome', [FormController::class, 'welcome']);
