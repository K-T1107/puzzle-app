<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

Route::post('doLogin', [AccountController::class, 'doLogin']);
Route::get('index', [AccountController::class, 'index']);
Route::get('accounts/management', [AccountController::class, 'management']);
Route::get('scores', [AccountController::class, 'scores']);
Route::get('/{error_id?}', [AccountController::class, 'login']);
