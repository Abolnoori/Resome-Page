<?php

use App\Http\Controllers\HomeController;
use function PHPSTORM_META\type;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\Route;

Route::get('/{name}',[HomeController::class , 'index']);
// Route::get('/mehran',[HomeController::class , 'mehran_fa']);
// Route::get('/amin',[HomeController::class , 'amin_fa']);


Route::post('/SendMesage',[HomeController::class , 'sendmesage']);

// Route::get('/abol-en',[HomeController::class , 'abol_en']);
// Route::get('/mehran-en',[HomeController::class , 'mehran_en']);
// Route::get('/amin-en',[HomeController::class , 'amin_en']);










