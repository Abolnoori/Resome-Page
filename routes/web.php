<?php

use App\Http\Controllers\HomeController;
use function PHPSTORM_META\type;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\Route;






Route::get('/en',[HomeController::class , 'indexen']);
Route::get('/{name}',[HomeController::class , 'index']);




Route::post('/SendMesage',[HomeController::class , 'sendmesage']);










