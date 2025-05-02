<?php

namespace App\Http\Controllers;
use App\Models\Trainer;
use App\Models\Membre;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Password::defaults()],
            //  'role' => ['required', Rule::in(['member', 'trainer'])], 
            'terms' => ['required', 'accepted'],
        ]);
        $validated['role'] = 'member';
       

        $user = User::create([
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' =>  $validated['role'],
            'terms_accepted' => true,
        ]);
       
        
        // if ($validated['role'] === 'trainer') {
        //     $user = Trainer::create([
        //         'full_name' => $validated['full_name'],
        //         'email' => $validated['email'],
        //         'password' => Hash::make($validated['password']),
        //         'role' => 'trainer',
        //         'terms_accepted' => true,
        //     ]);
        // } else {
        //     $user = Membre::create([
        //         'full_name' => $validated['full_name'],
        //         'email' => $validated['email'],
        //         'password' => Hash::make($validated['password']),
        //         'role' => 'member',
        //         'terms_accepted' => true,
        //     ]);
        // }

        Auth::login($user);

        return redirect()->route('home')->with('success', 'Compte créé avec succès!');
    }
}
