<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRecipeRequest;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function index() {
        return view('recipes.index');
    }

    public function store(StoreRecipeRequest $request) {
    
        // $user = auth()->user();
        
        $data = $request->validated();
        $data['user_id'] = auth()->id();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images/recipes', 'public');
            $pathName = basename($path);
            $data['image'] = $pathName;
        }

        $recipe = Recipe::create($data);

        return response()->json([
            'success' => true,
            'data' => $recipe
        ], 201);    
    }   
}
