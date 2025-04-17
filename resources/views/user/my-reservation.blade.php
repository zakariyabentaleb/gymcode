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
                        <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col justify-between h-full">
                            <div class="mb-4">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">
                                    {{ $reservation->trainer->full_name ?? 'Inconnu' }}
                                </h3>
                                <p class="text-gray-600"><strong>Date :</strong> {{ $reservation->date }}</p>
                                <p class="text-gray-600"><strong>Heure :</strong> {{ $reservation->time }}</p>
                                <p class="text-gray-600">
                                    <strong>Statut :</strong>
                                    <span class="@if($reservation->status == 'confirmed') text-green-600 @elseif($reservation->status == 'canceled') text-red-600 @else text-yellow-600 @endif">
                                        {{ ucfirst($reservation->status) }}
                                    </span>
                                </p>
                            </div>
                
                            <div class="flex flex-col sm:flex-row gap-3 mt-4">
                                <form action="{{ route('reservation.cancel', $reservation->id) }}" method="POST" onsubmit="return confirm('Confirmer l\'annulation ?')" class="flex-1">
                                    @csrf
                                    <button type="submit" class="w-full bg-yellow-500 hover:bg-yellow-600 text-white py-2 px-4 rounded-lg font-semibold transition duration-300">
                                        Annuler
                                    </button>
                                </form>
                
                                <form action="{{ route('reservation.destroy', $reservation->id) }}" method="POST" onsubmit="return confirm('Confirmer la suppression ?')" class="flex-1">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white py-2 px-4 rounded-lg font-semibold transition duration-300">
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <div class="bg-white rounded-xl shadow-lg p-6 text-center col-span-full">
                            <p class="text-gray-600">Aucune réservation pour le moment.</p>
                        </div>
                    @endforelse
                </div>
                
            </div>
        </section>
    </div>
@endsection
