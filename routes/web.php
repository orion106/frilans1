<?php


use App\Http\Controllers\IndexController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profile\UserController;
use App\Http\Controllers\profile\OrderCreateController;

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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/q', function () {
    return view('q');
});
Route::get('order/{id}', [OrderController::class, 'index'])->name('order');

Route::get('profile/user/{id}', [UserController::class, 'index'])->name('user');

Route::middleware(['Customer'])->group(function () {

    Route::get('profile/order-create',[OrderCreateController::class, 'index'])->name('order-create');

    Route::post('profile/order-create',[OrderCreateController::class, 'create']);
});
require __DIR__.'/auth.php';

