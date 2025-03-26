<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Trainer;
use Illuminate\Support\Facades\DB;

class ProgramController extends Controller
{
   
    public function index()
    {
        $programs = Program::all();
        $totalprogram = Program::count();

        $categories = Category::all();
        
        $progCategory = Program::with('category')->get();

        //  dd($progCategory->category->name);
        $categories = DB::table('categories')
        ->leftJoin('program', 'program.category_id', '=', 'categories.id')
        ->select('categories.*', DB::raw('COUNT(program.id) as total'))
        ->groupBy('categories.id')
        ->get();
        
        return view('admin.program', compact('programs', 'totalprogram','categories','progCategory','categories'));
    }
   
   
    public function create()
    {
        return view('programs.create');
    }

    
    public function store(Request $request)
    {
        // Vérifier si les données arrivent correctement
        //  dd($request->all());
    
        // Validation des données
        $prog = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'level' => 'required|in:debutant,intermediaire,professionel',
            'price' => 'required|numeric|min:0',
            'duree' => 'required|integer|min:1|max:40',
            'image_url' => 'required|url',
            'trainer_id' => 'required|exists:trainers,id',
            'category_id'=> 'required|exists:categories,id',
        ]);
    
        // Vérification après validation
        //  dd($prog);
    
        // Insertion en base
        Program::create($prog);
    
        return redirect()->route('programs.store')->with('success', 'Programme ajouté avec succès.');
    }
    
    

   
    public function show(Program $program)
    {
        return view('programs.show', compact('program'));
    }

    
    public function edit(Program $program)
    {   
        $trainers = Trainer::all(); 
    $categories = Category::all(); 
        return view('admin.edit-program', compact('program', 'trainers', 'categories'));
    }

    public function update(Request $request, Program $program)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'level' => 'required|in:debutant,intermediaire,professionel',
            'duree' => 'required|integer|min:1|max:40',
            'price' => 'required|numeric|min:0',
            'image_url' => 'required|url',
            'trainer_id' => 'required|exists:trainers,id',
            'category_id'=> 'required|exists:categories,id',
        ]);

        $program->update($request->all());

        return redirect()->route('programs.index')->with('success', 'Programme mis à jour avec succès.');
    }

    
    public function destroy(Program $program)
    {
        $program->delete();
        return redirect()->route('programs.index')->with('success', 'Programme supprimé avec succès.');
    }
}
