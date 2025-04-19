<?php

namespace App\Http\Controllers;
use App\Models\Reservation;
use App\Models\User;
use App\Models\Trainer;         
use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request;

class ReservationController  extends Controller
{

    public function store(Request $request)
    {    
       
        $request->validate([
            'full_name' => 'required|string|max:255', 
            'email' => 'required|email',
            'trainer_id' => 'required|exists:users,id',
            'date' => 'required|date',
            'time' => 'required',
        ]);
        
        $reservation = new Reservation();
        $reservation->membre_id = Auth::id(); 
        $reservation->trainer_id = $request->trainer_id;
        $reservation->date = $request->date;
        $reservation->time = $request->time;
        $reservation->status = $request->status ?? 'pending';

        
        $reservation->save();

        return redirect()->back()->with('success', 'Votre réservation a bien été enregistrée.');
    }


    public function index()
    {
        $user = Auth::user(); 
        
        // $reservations = Reservation::where('membre_id', $user->id)->get();
        $reservations = Reservation::where('membre_id', $user->id)
        ->with('trainer') 
        ->get();
        return view('user.my-reservation', compact('reservations'));
    }
    public function showTrainer()
    {
        $trainers = User::where('role', 'trainer')->get(); 
        return view('entraineur', compact('trainers')); 
    }
    public function cancel($id)
{
    $reservation = Reservation::findOrFail($id);

    // Vérifie que c'est bien le membre connecté qui tente d'annuler
    if ($reservation->membre_id !== Auth::id()) {
        abort(403, 'Action non autorisée.');
    }

    // Met à jour le statut
    $reservation->status = 'canceled';
    $reservation->save();

    return redirect()->back()->with('success', 'Réservation annulée avec succès.');
}
public function destroy($id)
{
    $reservation = Reservation::findOrFail($id);

    // Vérifie que l'utilisateur connecté est bien le propriétaire de la réservation
    if ($reservation->membre_id !== Auth::id()) {
        abort(403, 'Action non autorisée.');
    }

    $reservation->delete();

    return redirect()->back()->with('success', 'Réservation supprimée avec succès.');
}
public function showAllReservations()
{
    $reservations = Reservation::with(['membre', 'trainer'])->get();
 
    return view('admin.reservations', compact('reservations'));
}

}

