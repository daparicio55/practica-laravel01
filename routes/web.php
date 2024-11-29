<?php

use App\Http\Controllers\Controller43053643;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/43053643',[Controller43053643::class,'index']);