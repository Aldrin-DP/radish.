<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\RecipesController;
use Illuminate\Support\Facades\Route;


// Route::get('/home', function () {
//     return view('home');
// })->name('home');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/api/recipes', [HomeController::class,'getRecipe']);

Route::middleware('guest')->group(function (){ 
    Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
    
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');    
    Route::post('/login', [LoginController::class,'login']);
});

Route::middleware('auth')->group(function (){
    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

    Route::get('/recipes', [RecipesController::class, 'index'])->name('recipes.index');
    Route::post('/recipes', [RecipesController::class, 'store']);

});




