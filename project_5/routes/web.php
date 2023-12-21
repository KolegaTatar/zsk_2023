<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CarController;
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


//Route::view("klient/{firstname?}/{lastname?}","user.klient");

Route::get("klient/{firstname?}/{lastname?}", function($firstname=null, $lastname= null){
    $data=[
        'firstname' => $firstname,
        "lastname" => $lastname
    ];
    return view("user.klient",['data'=>$data]);
});

Route::resource("cars",CarController::class);
Route::view("create","cars.car_create");
Route::get("CarController",[CarController::class,"store"]);

route::get("fake", [CarController::class,"add"]);

Route::resource("show",BookController::class);