<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\TrainerWelcomeMail;

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
    // public function store(Request $request)
    // {
        
    //     //  dd($request->all());
    
       
    //     $trainer = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email',
    //         'specialty' => 'required|string',
    //     ]);
    
       
    //     //  dd($trainer);
    
       
    //     Trainer::create($trainer);
    
    
    //     return redirect()->route('trainer.show');
    // }

    public function showTrainer()
    {
        $trainers = Trainer::all(); 
        return view('entraineur', compact('trainers')); 
    }

public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:trainers,email',
        'specialty' => 'nullable|string|max:255',
        'password' => 'required|string|min:8',
        'description' => 'nullable|string',
    ]);
    
    // Générer un mot de passe
    // $plainPassword = Str::random(10);

    // Création du trainer
    $trainer = Trainer::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'specialty' => $validated['specialty'],
        'role' => 'trainer',
        'description' => $validated['description'],
        'password' => $validated['password'],
        'terms_accepted' => true,
    ]);
    
 // 'password' => Hash::make($plainPassword),
  
    try {
        Mail::to($trainer->email)->send(new TrainerWelcomeMail($trainer));
        return redirect()->route('programs.store')->with('success', 'Entraîneur ajouté avec succès et email envoyé.');
    } catch (\Exception $e) {
        Log::error('Failed to send email to trainer: ' . $e->getMessage());
        return redirect()->route('trainer.index')->with('error', 'Entraîneur ajouté mais l\'email n\'a pas pu être envoyé.');
    }
        return redirect()->route('trainer.index')->with('error', 'Entraîneur ajouté mais l\'email n\'a pas pu être envoyé : ' . $e->getMessage());
    
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
    
      
        return redirect()->route('trainer.show');
    }

    public function destroy(Trainer $trainer)
    {
        $trainer->delete();
    
        return redirect()->route('trainer.show');
    }
}
