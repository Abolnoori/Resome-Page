<?php

use App\Http\Controllers\HomeController;
use function PHPSTORM_META\type;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\Route;


Route::post('/SendMesage',[HomeController::class , 'sendmesage']);
Route::get('/abol',[HomeController::class , 'abol_fa']);
Route::get('/mehran',[HomeController::class , 'mehran_fa']);
Route::get('/amin',[HomeController::class , 'amin_fa']);
Route::get('/en',[HomeController::class , 'index_en']);










