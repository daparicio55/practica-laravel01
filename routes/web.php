<?php
use App\Http\Controllers\Controller43053643;
use App\Http\Controllers\Controller75623496;
use app\Http\Controllers\Controller76731601;
use App\Http\Controllers\Controller76816143;
use App\Http\Controllers\Controller74566493;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Controller72807549;
use App\Http\Controllers\Controller73832729;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller72732505;
use App\Http\Controllers\controller74558654;
use App\Http\Controllers\Controller72174435;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/43053643',[Controller43053643::class,'index']);
route::get('75623496',[Controller76731601::class, 'index']);
Route::get('/76731601',[Controller76731601::class,'index']);
Route::get('/72732505',[Controller72732505::class,'index']); 
Route::get('/76816143',[Controller76816143::class,'index']);
Route::get('/74566493',[Controller74566493::class,'index']);
Route::get('/74558654',[Controller74558654::class,'index']);
Route::get('/73832729',[Controller73832729::class,'index']);
Route::get('/72807549',[Controller72807549::class,'index']);
Route::get('/72174435',[Controller72174435::class,'index']);
Route::get('/72174435',[Controller72174435::class,'index']);

