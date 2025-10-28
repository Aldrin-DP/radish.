<?php

use App\Http\Controllers\RecipesController;
use Illuminate\Support\Facades\Route;

Route::post('/recipes', [RecipesController::class, 'store']);
