<?php

namespace App\Http\Controllers;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request;

class ReservationController  extends Controller
{
    public function index()
    {
        $user = Auth::user(); 
        
        $reservations = Reservation::where('membre_id', $user->id)->get();

        return view('user.my-reservation', compact('reservations'));
    }
}
