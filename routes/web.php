<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller72174435;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/72174435', [Controller72174435::class, 'index']);

