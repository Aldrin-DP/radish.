<?php

use App\Http\Controllers\RecipesController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth:sanctum'])->group(function (){
    Route::post('/recipes', [RecipesController::class,'store']);
});
