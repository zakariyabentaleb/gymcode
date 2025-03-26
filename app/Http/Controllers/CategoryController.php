<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{   
    public function index()
    {   
        // $categories = Category::all();
        // return view('admin.program', compact('categories'));
       
    }
    public function show()
    {
        return view('admin.create-categories');
    }
    public function store(Request $request)
    {
      
       $newCat= $request->validate([
            'name' => 'required|string|max:255|unique:categories',
            
        ]);

        Category::create($newCat);

        return redirect()->route('programs.store')->with('success', 'Programme ajouté avec succès.');
    }

    public function destroy(Category $categorie)
    {
        $categorie->delete();
        return redirect()->route('programs.index')->with('success', 'Programme supprimé avec succès.');
    }
}

