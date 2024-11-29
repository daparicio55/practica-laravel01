<?php
use app\Http\Controllers\Controller76731601;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
 route::get('76731601',[Controller76731601::class, 'index']);

 