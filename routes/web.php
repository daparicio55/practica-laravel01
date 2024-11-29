<?php
use App\Http\Controllers\Controller76816143;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/76816143',[Controller76816143::class]);