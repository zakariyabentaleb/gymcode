<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use App\Models\Reservation;
use App\Models\Payment;


class AdminController extends Controller
{
    public function index()
    {
        // $totalMembers = User::where('role', 'member')->count();
        $totalMembers = User::whereHas('payments')->with('payments.program')->get();
        $totalMembers = $totalMembers->count();
       
        $totalTrainers =User::where('role', 'trainer')->count();
       
        $todayReservations = Reservation::whereDate('date', date('Y-m-d'))->count();
       
        
        $currentMonth = date('m');
        $currentYear = date('Y');
        
       
        $monthlyRevenue = Payment::join('program', 'payments.program_id', '=', 'program.id')
        ->whereMonth('payments.created_at', $currentMonth)
        ->whereYear('payments.created_at', $currentYear)
        ->sum('program.price');
        
        $monthlyRevenue;
       
       

        $recentMembers = User::where('role', 'member')
            ->latest()
            ->take(3)
            ->get();
        
        // Recent payments
        $recentPayments = Payment::with('user')
            ->latest()
            ->take(3)
            ->get();
        
       
        
    
        return view('admin.dashboard', compact(
            'totalMembers', 
            'totalTrainers', 
            'todayReservations', 
            'monthlyRevenue', 
            'recentMembers',
            'recentPayments',

        ));
    }
}
