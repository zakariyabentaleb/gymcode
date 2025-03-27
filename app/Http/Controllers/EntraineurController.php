<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use App\Models\Category;
use Illuminate\Http\Request;

class EntraineurController extends Controller
{
    public function index()
    {
       
        $trainers = Trainer::all();
          
        $categories = Category::all();
        
        return view('admin.create-program', compact('trainers','categories'));
    }
    public function show()
    {
        $trainers = Trainer::all(); 
        return view('admin.trainer', compact('trainers')); 
    }
    public function store(Request $request)
    {
        
        //  dd($request->all());
    
       
        $trainer = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'specialty' => 'required|string',
        ]);
    
       
        //  dd($trainer);
    
       
        Trainer::create($trainer);
    
    
        return redirect()->route('create-program');
    }
    public function edit(Trainer $trainer)
    {
        return view('admin.edit-trainer', compact('trainer'));
    }
    public function update(Request $request, Trainer $trainer)
    {
    
        $trainerData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'specialty' => 'required|string',
        ]);
    
      
        $trainer->update($trainerData);
    
      
        return redirect()->route('create-program');
    }
    public function destroy(Trainer $trainer)
    {
        $trainer->delete();
    
        return redirect()->route('create-program');
    }
    
    
}
