<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Trainer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

    public function showProgram()
    {
        $programs = Program::paginate(6);
        $categories = Category::all();
        return view('program', compact('programs', 'categories'));
    }
    public function showProgramDetails($id)
    {
        $program = Program::findOrFail($id);
        return view('program-details', compact('program'));
    }
   
   
    public function create()
    {
        return view('programs.create');
    }

    
    public function store(Request $request)
    {
        
        //  dd($request->all());
    
        // Validation des données
        $prog = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'level' => 'required|in:debutant,intermediaire,professionel',
            'price' => 'required|numeric|min:0',
            'duree' => 'required|integer|min:1|max:40',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'trainer_id' => 'required|exists:trainers,id',
            'category_id'=> 'required|exists:categories,id',
        ]);
    
        // Vérification après validation
        //  dd($prog);
    
       
        $path = $request->file('image')->store('program_images', 'public');

       
        Program::create([
            'title' => $request->title,
            'description' => $request->description,
            'level' => $request->level,
            'price' => $request->price,
            'duree' => $request->duree,
            'image_url' => $path, 
            'category_id' => $request->category_id,
            'trainer_id' => $request->trainer_id,
        ]);
    
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

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'title' => 'required|string|max:255',
        //     'description' => 'required|string',
        //     'level' => 'required|in:debutant,intermediaire,professionel',
        //     'duree' => 'required|integer|min:1|max:40',
        //     'price' => 'required|numeric|min:0',
        //     'image_url' => 'required|url',
        //     'trainer_id' => 'required|exists:trainers,id',
        //     'category_id'=> 'required|exists:categories,id',
        // ]);

        // $program->update($request->all());
        $prog = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'level' => 'required|in:debutant,intermediaire,professionel',
            'price' => 'required|numeric|min:0',
            'duree' => 'required|integer|min:1|max:40',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
            'trainer_id' => 'required|exists:trainers,id',
            'category_id'=> 'required|exists:categories,id',
        ]);
    
       
        $program = Program::findOrFail($id);
    
      
        if ($request->hasFile('image')) {
            
            if ($program->image_url && Storage::exists('public/' . $program->image_url)) {
                Storage::delete('public/' . $program->image_url);
            }
          
            $path = $request->file('image')->store('program_images', 'public');
        } else {
           
            $path = $program->image_url;
        }
    
       
        $program->update([
            'title' => $request->title,
            'description' => $request->description,
            'level' => $request->level,
            'price' => $request->price,
            'duree' => $request->duree,
            'image_url' => $path,  
            'category_id' => $request->category_id,
            'trainer_id' => $request->trainer_id,
        ]);

        return redirect()->route('programs.index')->with('success', 'Programme mis à jour avec succès.');
    }

    
    public function destroy(Program $program)
    {
        $program->delete();
        return redirect()->route('programs.index')->with('success', 'Programme supprimé avec succès.');
    }
    public function indexx(Request $request)
    {
        // Start with a base query
        $query = Program::query();
        
        // Apply search filter if provided
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }
        
        // Apply level filter if provided
        if ($request->has('level') && !empty($request->level)) {
            $query->where('level', $request->level);
        }
        
        // Apply category filter if provided
        if ($request->has('category') && !empty($request->category)) {
            $query->where('category_id', $request->category);
        }
        
        // Apply duration filter if it exists in your form (not in your current view but mentioned in JS)
        if ($request->has('duration') && !empty($request->duration)) {
            $query->where('duree', $request->duration);
        }
        
        // Get filtered results with pagination
        $programs = $query->latest()->paginate(9);
        
        // Get all categories for the filter dropdown
        $categories = Category::all();
        
        // Pass data to the view
        return view('program', compact('programs', 'categories'));
    }
    
    public function shows($id)
    {
        $program = Program::findOrFail($id);
        return view('program-details', compact('program'));
    }
}

