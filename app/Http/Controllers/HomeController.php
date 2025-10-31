<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('home');
    
    }

    public function getRecipe() {
        $recipes = Recipe::with('user')->latest()->get();

        return response()->json($recipes, 200);
    }
}
