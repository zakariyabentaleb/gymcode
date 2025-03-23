<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
   
    public function index()
    {
        $programs = Program::all();
        return view('programs.index', compact('programs'));
    }

   
    public function create()
    {
        return view('programs.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'level' => 'required|in:debutant,intermediaire,professionel',
            'price' => 'required|numeric|min:0',
            'image_url' => 'required|url',
        ]);

        Program::create($request->all());

        return redirect()->route('programs.index')->with('success', 'Programme ajouté avec succès.');
    }

   
    public function show(Program $program)
    {
        return view('programs.show', compact('program'));
    }

    
    public function edit(Program $program)
    {
        return view('programs.edit', compact('program'));
    }

   
    public function update(Request $request, Program $program)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'level' => 'required|in:debutant,intermediaire,professionel',
            'price' => 'required|numeric|min:0',
            'image_url' => 'required|url',
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
