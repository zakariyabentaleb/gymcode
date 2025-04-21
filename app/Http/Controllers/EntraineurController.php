<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;
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
        // $trainers = Trainer::all(); 
        $trainers = User::where('role', 'trainer')->get(); 
        return view('admin.trainer', compact('trainers')); 
    }
    // public function showTrainer()
    // {
    //     $trainers = User::where('role', 'trainer')->get(); 
    //     return view('entraineur', compact('trainers')); 
    // }
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
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'password' => 'required|string|min:8',
        'description' => 'nullable|string',
    ]);

    // Stockage du mot de passe en clair temporairement
    $plainPassword = $validated['password'];
     
    // Création du trainer avec mot de passe haché
    $trainer = Trainer::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'specialty' => $validated['specialty'] ?? null,
        'role' => 'trainer',
        'description' => $validated['description'] ?? null,
        'password' => bcrypt($plainPassword),
        'terms_accepted' => true,
    ]); 
     
    // Création d'un utilisateur lié (si nécessaire)
    // User::create([
    //     'full_name' => $validated['name'],
    //     'email' => $validated['email'],
    //     'role' => 'trainer',
    //     'password' => bcrypt($plainPassword),
    //     'terms_accepted' => true,
    // ]);
    $photoPath = null;

if ($request->hasFile('photo')) {
    $photoPath = $request->file('photo')->store('photos', 'public'); // Stock dans storage/app/public/photos
}

    try {
        User::create([
            'full_name' => $validated['name'],
            'email' => $validated['email'],
            'role' => 'trainer',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'specialty' => $validated['specialty'] ?? null,
            'description' => $request->description ?? null,
            'password' => bcrypt($plainPassword),
            'photo' => $photoPath, 
            'terms_accepted' => true,
        ]);
    } catch (\Exception $e) {
        dd('Erreur création user :', $e->getMessage());
    }

    // Envoi de l'e-mail avec le mot de passe en clair
    try {
        Mail::to($trainer->email)->send(new TrainerWelcomeMail($trainer, $plainPassword));
        return redirect()->route('programs.store')->with('success', 'Entraîneur ajouté avec succès et email envoyé.');
    } catch (\Exception $e) {
        Log::error('Échec de l\'envoi de l\'email à l\'entraîneur : ' . $e->getMessage());
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
    public function trainerDashboard()
{
    $trainer_id = Auth::id();
    
    // Get reservation stats
    $totalReservations = Reservation::where('trainer_id', $trainer_id)->count();
    $pendingReservations = Reservation::where('trainer_id', $trainer_id)
                            ->where('status', 'pending')->count();
    $confirmedReservations = Reservation::where('trainer_id', $trainer_id)
                            ->where('status', 'confirmed')->count();
    $canceledReservations = Reservation::where('trainer_id', $trainer_id)
                            ->where('status', 'canceled')->count();
    
    // Get pending reservations for approval
    $pendingList = Reservation::where('trainer_id', $trainer_id)
                    ->where('status', 'pending')
                    ->with('membre')
                    ->orderBy('date')
                    ->orderBy('time')
                    ->get();
    
    // Get today's confirmed sessions
    $today = date('Y-m-d');
    $todaysSessions = Reservation::where('trainer_id', $trainer_id)
                      ->where('status', 'confirmed')
                      ->where('date', $today)
                      ->with('membre')
                      ->orderBy('time')
                      ->get();
    
    // Get recent canceled sessions
    $recentCanceled = Reservation::where('trainer_id', $trainer_id)
                      ->where('status', 'canceled')
                      ->where('date', '>=', date('Y-m-d', strtotime('-7 days')))
                      ->with('membre')
                      ->orderBy('date', 'desc')
                      ->orderBy('time')
                      ->limit(5)
                      ->get();
    
    // Weekly schedule (simplified)
    $weekStart = request('week') ? date('Y-m-d', strtotime(request('week'))) : date('Y-m-d', strtotime('monday this week'));
$weekEnd = date('Y-m-d', strtotime($weekStart . ' +6 days'));

$weeklySchedule = Reservation::where('trainer_id', $trainer_id)
                  ->whereBetween('date', [$weekStart, $weekEnd])
                  ->where('status', 'confirmed')
                  ->with('membre')
                  ->orderBy('date')
                  ->orderBy('time')
                  ->get();
    
    return view('trainer.dashboard', compact(
        'totalReservations', 
        'pendingReservations', 
        'confirmedReservations', 
        'canceledReservations',
        'pendingList',
        'todaysSessions',
        'recentCanceled',
        'weeklySchedule',
        'weekStart'
    ));
}

public function confirmReservation(Reservation $reservation)
{

    if ($reservation->trainer_id !== Auth::id()) {
        return redirect()->back()->with('error', 'Unauthorized action.');
    }
    
    
    if ($reservation->status !== 'pending') {
        return redirect()->back()->with('warning', 'Only pending reservations can be confirmed.');
    }
    
   
    $reservation->status = 'confirmed';
    $reservation->save();
    
    
    
    return redirect()->back()->with('success', 'Reservation confirmed successfully.');
}
public function cancelReservation(Reservation $reservation)
{

    if ($reservation->trainer_id !== Auth::id()) {
        return redirect()->back()->with('error', 'Unauthorized action.');
    }
    
  
    if (!in_array($reservation->status, ['pending', 'confirmed'])) {
        return redirect()->back()->with('warning', 'This reservation cannot be canceled.');
    }
    
    
    $reservation->status = 'canceled';
    $reservation->save();
    
    
    return redirect()->back()->with('success', 'Reservation canceled successfully.');
}
}
