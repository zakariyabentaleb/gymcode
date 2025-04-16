<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use App\Models\Category;
use App\Models\User;
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
    
        // Hashage du mot de passe
       
    
        // Création du trainer
        $trainer = Trainer::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'specialty' => $validated['specialty'] ?? null,
            'role' => 'trainer',
            'description' => $validated['description'] ?? null,
            'password' => $validated['password'],
            'terms_accepted' => true,
        ]); 
    
        // Création d'un utilisateur lié (si nécessaire)
        User::create([
            'full_name' => $validated['name'],
            'email' => $validated['email'],
            'role' => 'trainer',
            'password' => $validated['password'],
            'terms_accepted' => true,
        ]);
    
        // Envoi de l'email
        try {
            Mail::to($trainer->email)->send(new TrainerWelcomeMail($trainer));
            return redirect()->route('programs.store')->with('success', 'Entraîneur ajouté avec succès et email envoyé.');
        } catch (\Exception $e) {
            Log::error('Failed to send email to trainer: ' . $e->getMessage());
            return redirect()->route('trainer.index')->with('error', 'Entraîneur ajouté mais l\'email n\'a pas pu être envoyé.');
        }
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
