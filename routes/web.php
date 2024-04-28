<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profile\OrderController;
use App\Http\Controllers\profile\OrderCreateController;
use App\Http\Controllers\profile\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/q', function () {
    return view('q');
});

Route::get('profile/user/{id}', [UserController::class, 'index'])->name('user');

Route::middleware('Customer')->group(function () {

    Route::get('profile/order', [OrderController::class, 'create'])->name('order');

    Route::post('profile/order', [OrderController::class, 'create']);

    Route::get('profile/order-create',[OrderCreateController::class, 'create'])->name('order-create');
});
require __DIR__.'/auth.php';

