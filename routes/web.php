<?php

use App\Http\Controllers\Controller74566493;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/74566493',[Controller74566493::class,'index']);