<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\profile\ProfileController;
use App\Http\Controllers\profile\MessageController;
use App\Http\Controllers\profile\MessagesController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\profile\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\teg\TegCreateController;

Route::middleware('guest')->group(function () {

    Route::get('/registration', [RegisterController::class, 'create'])->name('registration');

    Route::post('/registration', [RegisterController::class, 'store']);

    Route::get('/login', [LoginController::class, 'create'])->name('login');

    Route::post('/login', [LoginController::class, 'store']);
});

Route::middleware('auth')->group(function () {

    Route::get('/profile/order', [OrderController::class, 'index'])->name('order');

    Route::get('/profile/message/{id}',[MessageController::class, 'index'] )->name('message');

    Route::post('/profile/message/{id}',[MessageController::class, 'create']);

    Route::get('/profile/messages',[MessagesController::class, 'index'] )->name('messages');

    Route::get('/profile',[ProfileController::class, 'create'] )->name('profile');

    Route::post('/profile',[ProfileController::class, 'update']);

    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout');
});
Route::middleware('admin')->group(function (){

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/teg/create', [TegCreateController::class, 'index'])->name('teg-create');

    Route::post('/teg/create', [TegCreateController::class, 'store']);
});
