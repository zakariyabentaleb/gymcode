<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use App\Models\Program;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as LaravelSession; // Renommer pour éviter les conflits

class PaymentController extends Controller
{
    public function checkout(Request $request, Program $program)
    {
        Stripe::setApiKey(config('services.stripe.secret'));
        
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'unit_amount' => $program->price * 100, // Prix en centimes
                    'product_data' => [
                        'name' => $program->title,
                    ],
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('payment.success'),
            'cancel_url' => route('payment.cancel'),
        ]);
    
        // Stocker dans la session Laravel
        session([
            'stripe_session_id' => $session->id,
            'program_id' => $program->id,
        ]);
    
        return redirect($session->url);
    }
    

    public function success()
    {
        $stripeSessionId = session('stripe_session_id');
        $programId = session('program_id');
    
        if (!$stripeSessionId || !$programId) {
            return redirect()->route('programs.index')->with('error', 'Session expirée.');
        }
    
        Stripe::setApiKey(config('services.stripe.secret'));
    
        $session = \Stripe\Checkout\Session::retrieve($stripeSessionId);
    
        if ($session->payment_status === 'paid') {
            // Évite les doublons
            $exists = Payment::where('stripe_session_id', $stripeSessionId)->exists();
            
            if (!$exists) {
                Payment::create([
                    'user_id' => auth()->id(),
                    'program_id' => $programId,
                    'stripe_session_id' => $stripeSessionId,
                ]);
            }
    
            return view('payments.success'); // Affiche la vue de succès
        }
    
        return redirect()->route('payment.cancel');
    }
    

    public function cancel()
    {
        return view('payments.cancel');
    }
}

