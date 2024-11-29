<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller72732505;

Route::get('/', function () {
    return view('welcome');
});
Route::get ('/72732505', [Controller72732505::class,'index']); 