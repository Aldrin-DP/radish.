<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRecipeRequest;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function index() {
        return view('recipes.index');
    }

    public function store(StoreRecipeRequest $request) {
    
        $data = $request->validated();

        return response()->json([
            'success' => true,
            'data' => $data
        ], 200);    
    }   
}
