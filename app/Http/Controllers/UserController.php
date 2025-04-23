<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
   
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

  
    public function create()
    {
        return view('users.create');
    }

   
  
    // public function store(Request $request)
    // {
    //         $validated = $request->validate([
    //             'full_name' => ['required', 'string', 'max:255'],
    //             'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //             'password' => ['required', 'confirmed', Password::defaults()],
    //             'role' => ['required', Rule::in(['member', 'trainer'])],
    //             'terms' => ['required', 'accepted'],
    //         ]);
    
    //         $user = User::create([
    //             'full_name' => $validated['full_name'],
    //             'email' => $validated['email'],
    //             'password' => Hash::make($validated['password']),
    //             'role' => $validated['role'],
    //             'terms_accepted' => true,
    //         ]);
    
    //         Auth::login($user);
    
    //         return redirect()->route('home')->with('success', 'Compte créé avec succès!');
    //  }
    
     public function login(Request $request)
     {
         $credentials = $request->validate([
             'email' => ['required', 'email'],
             'password' => ['required'],
         ]);
     
         if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            // return redirect()->intended('');
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect()->intended('/admin-dashboard'); 
            } else if ($user->role === 'member') {
                return redirect()->intended('');
            } else if ($user->role === 'trainer') {
                return redirect()->intended('/trainer');
            } else {
                return redirect()->intended(''); 
            }
        }
     
         return back()->withErrors([
             'email' => 'Ces identifiants ne correspondent pas à nos enregistrements.',
         ]);
     }
     
     public function show()
     {
         $user = Auth::user();
         return view('profile.show', compact('user'));
     }
 
     public function edit()
     {
         $user = Auth::user();
         return view('profile.edit', compact('user'));
     }
 
     public function update(Request $request)
     {
         $user = Auth::user();
 
         $request->validate([
             'name' => 'required|string|max:255',
             'email' => 'required|email|max:255|unique:users,email,' . $user->id,
             'password' => 'nullable|min:6|confirmed',
         ]);
 
         $user->full_name = $request->name;
         $user->email = $request->email;
 
         if ($request->filled('password')) {
             $user->password = Hash::make($request->password);
         }
 
         $user->save();
 
         return redirect()->route('profile.show')->with('success', 'Profil mis à jour avec succès.');
     }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function reservation()
    {
        return view('user.my-reservation');
    }
    public function showPayingMembers()
{
    $users = User::whereHas('payments')->with('payments.program')->get();
   
    return view('admin.membres', compact('users'));
}
    
}
