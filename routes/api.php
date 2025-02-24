<?php

use App\Http\Controllers\APIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/{name}',[APIController::class , 'index']);
Route::post('/SendMesage',[APIController::class, 'sendmesage']);
