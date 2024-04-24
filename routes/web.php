<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profile\OrderController;

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
Route::middleware('Customer')->group(function () {
    Route::get('profile/order', [OrderController::class, 'create'])->name('order');
    Route::post('profile/order', [OrderController::class, 'create']);
});
require __DIR__.'/auth.php';

