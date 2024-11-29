<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Controller72807549;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/72807549', [Controller72807549::class,'index']);