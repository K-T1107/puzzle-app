<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserItemController;
use Illuminate\Support\Facades\Route;

#ログイン
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);

#作成とか
Route::get('create', [ItemController::class, 'create'])->name('items.create');
Route::post('store', [ItemController::class, 'store'])->name('store');
Route::get('complete', [ItemController::class, 'complete'])->name('items.complete');

Route::get('auth/index', [AuthController::class, 'index']);
Route::get('players', [AuthController::class, 'players']);
Route::get('accounts/management', [AccountController::class, 'management'])->name('accounts.management');
Route::get('scores', [AccountController::class, 'scores']);
Route::get('auth/create', [CreateController::class, 'create']);
Route::get('/items', [ItemController::class, 'itemList'])->name('items.list');
Route::get('/users', [UserController::class, 'userList'])->name('users.list');
Route::get('/users_item', [UserItemController::class, 'userItemList']);

//Route::get('/{error_id?}', [AuthController::class, 'index']);
