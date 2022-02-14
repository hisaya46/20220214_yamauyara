<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;



Route::get('/', [ContactController::class, 'index']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/thanks', [ContactController::class, 'thanks']);

Route::get('/management',[ContactController::class, 'management']);
Route::get('/management/find', [ContactController::class, 'find']);
Route::post('management/find', [ContactController::class, 'search']);