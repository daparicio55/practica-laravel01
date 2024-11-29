<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Controller75926437;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/75926437', [Controller75926437::class, 'index']);
