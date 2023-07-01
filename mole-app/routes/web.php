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
// Route::resource('/difficulties', DifficultController::class);
Route::get('/difficulties',[DifficultController::class, 'index']);
Route::post('/difficulties',[DifficultController::class, 'store']);
Route::get('/difficulties/create',[DifficultController::class, 'create']);
Route::get('/difficulties/{difficult}/edit',[DifficultController::class, 'edit']);
Route::delete('/difficulties/{difficult}',[DifficultController::class, 'destroy']);
Route::put('/difficulties/{difficult}',[DifficultController::class, 'update']);


// For Roles
Route::resource('/roles', RoleController::class);


// For Specialties
Route::get('/specialties',[SpecialController::class, 'index']);
Route::post('/specialties',[SpecialController::class, 'store']);
Route::get('/specialties/create',[SpecialController::class, 'create']);
Route::get('/specialties/{special}/edit',[SpecialController::class, 'edit']);
Route::delete('/specialties/{special}',[SpecialController::class, 'destroy']);
Route::put('/specialties/{special}',[SpecialController::class, 'update']);


// For Favorits Hero
Route::resource('/favorits', FavoritController::class);



