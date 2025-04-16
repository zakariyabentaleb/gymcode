<?php

namespace App\Http\Controllers;
use App\Models\Reservation;
use App\Models\Trainer;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request;

class ReservationController  extends Controller
{

    public function store(Request $request)
    {    
        dd(Auth::id());
        dd($request->all());
        $request->validate([
            'full_name' => 'required|string|max:255', 
            'email' => 'required|email',
            'phone' => 'required|string',
            'trainer_id' => 'required|exists:trainers,id',
            'date' => 'required|date',
            'time' => 'required',
            'price' => 'required|numeric|min:0',
            'status' => 'in:pending,confirmed,canceled',
        ]);
    
        $reservation = new Reservation();
        $reservation->membre_id = Auth::id(); 
        $reservation->trainer_id = $request->trainer_id;
        $reservation->date = $request->date;
        $reservation->time = $request->time;
        $reservation->price = $request->price;
        $reservation->status = $request->status ?? 'pending';
         dd($reservation);
        $reservation->save();

        return redirect()->back()->with('success', 'Votre réservation a bien été enregistrée.');
    }


    public function index()
    {
        $user = Auth::user(); 
        
        $reservations = Reservation::where('membre_id', $user->id)->get();

        return view('user.my-reservation', compact('reservations'));
    }
    public function showTrainer()
    {
        $trainers = Trainer::all(); 
        return view('entraineur', compact('trainers')); 
    }
}
