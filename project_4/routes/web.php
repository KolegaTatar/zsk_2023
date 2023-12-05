<?php

use App\Http\Controllers\ShowDBController;
use App\Http\Controllers\DBController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get("db",[ShowDBController::class,"ShowTableUsers"]);
Route::get("db2",[DBController::class,"ShowTableUser"]);
Route::resource('product', ProductController::class);
Route::get("create",[ProductController::class, "create"]);
Route::get("show_p",[ProductController::class,"show_products"]);