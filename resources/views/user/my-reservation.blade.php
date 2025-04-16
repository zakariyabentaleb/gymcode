@extends('layouts.app')

@section('title', 'GymTracker - Réservations')

@section('content')
    <div class="bg-brand-light py-20">
        <!-- Reservation Section -->
        
        <!-- Current Reservations Section -->
        <section class="py-20 bg-brand-light">
            <div class="container mx-auto px-4">
                <div class="text-center mb-10">
                    <h2 class="text-3xl font-bold text-brand-dark mb-4">Mes réservations</h2>
                    <p class="text-gray-600">Voici la liste de vos réservations actuelles.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @forelse ($reservations as $reservation)
                        <div class="bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-xl font-semibold text-brand-dark mb-2"> {{ $reservation->trainer->full_name ?? 'Inconnu' }}</h3>
                            <p class="text-gray-600 mb-4">Date: {{ $reservation->date }}</p>
                            <p class="text-gray-600 mb-4">Date: {{ $reservation->time }}</p>
                            <p class="text-gray-600 mb-4">Status: <span class="text-brand-red">{{ ucfirst($reservation->status) }}</span></p>
                            <div class="flex justify-between items-center">
                                <a href="" class="bg-red-700 text-white py-2 px-6 rounded-lg font-semibold hover:bg-red-800 transition duration-300">
                                    Annuler
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="bg-white rounded-xl shadow-lg p-6 text-center">
                            <p class="text-gray-600">Aucune réservation pour le moment.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>
    </div>
@endsection
