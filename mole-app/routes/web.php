<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DifficultController;
use App\Http\Controllers\FavoritController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SpecialController;
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

// Home(landingpage)
Route::get('/',[HomeController::class, 'index']);



// For Dasboard
Route::get('/dasboard', function () {
    return view('dasboard/index');
});

Route::get('/heroes', function () {
    return view('heroes/index');
});

// For User
Route::resource('/users',AuthController::class);


// For Authentication
Route::get('/register',[AuthController::class, 'registerForm']);
Route::post('/register',[AuthController::class, 'register']);
Route::get('/login',[AuthController::class, 'loginForm']);
Route::post('/login',[AuthController::class, 'login']);


// For Heroes
Route::resource('/heroes', HeroController::class);


// For Difficulties
Route::resource('/difficulties', DifficultController::class);


// For Roles
Route::resource('/roles', RoleController::class);


// For Specialties
Route::resource('/specialties', SpecialController::class);


// For Favorits Hero
Route::resource('/favorits', FavoritController::class);



