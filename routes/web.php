<?php

use App\Http\Controllers\controller73832729;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
route::get('/73832729',[controller73832729::class,'index']);