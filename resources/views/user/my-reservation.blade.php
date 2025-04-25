@extends('layouts.app')

@section('title', 'GymTracker - Réservations')

@section('content')
    <div class="bg-gradient-to-b from-brand-light to-white py-24">
        <!-- Current Reservations Section -->
        <section class="container mx-auto px-4">
            <div class="text-center mb-12 ">
                <h2 class="text-4xl font-bold text-brand-dark mb-3 ">Mes réservations</h2>
                <div class="w-24 h-1 bg-brand-primary mx-auto mb-6 rounded-full"></div>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">Consultez et gérez vos réservations d'entraînement en un seul endroit.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($reservations as $reservation)
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                        <div class="bg-gradient-to-r from-brand-primary to-brand-secondary p-4">
                            <h3 class="text-xl font-bold ">
                               Entraineur : {{ $reservation->trainer->full_name ?? 'Inconnu' }}
                            </h3>
                        </div>
                        <div class="p-6">
                            <div class="mb-6 space-y-3">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-brand-primary mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <p class="text-gray-700"><strong>Date:</strong> {{ $reservation->date }}</p>
                                </div>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-brand-primary mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <p class="text-gray-700"><strong>Heure:</strong> {{ $reservation->time }}</p>
                                </div>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-brand-primary mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <p class="text-gray-700">
                                        <strong>Statut:</strong>
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                            @if($reservation->status == 'confirmed') bg-green-100 text-green-800
                                            @elseif($reservation->status == 'canceled') bg-red-100 text-red-800
                                            @else bg-yellow-100 text-yellow-800 @endif">
                                            {{ ucfirst($reservation->status) }}
                                        </span>
                                    </p>
                                </div>
                            </div>
                
                            <div class="flex gap-3 mt-4">
                                <form action="{{ route('reservation.cancel', $reservation->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir annuler cette réservation ?')" class="flex-1">
                                    @csrf
                                    <button type="submit" class="w-full bg-yellow-500 hover:bg-yellow-600 text-white py-2 px-4 rounded-lg font-semibold transition duration-300 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                        Annuler
                                    </button>
                                </form>
                
                                <form action="{{ route('reservation.destroy', $reservation->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer définitivement cette réservation ?')" class="flex-1">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white py-2 px-4 rounded-lg font-semibold transition duration-300 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="bg-white rounded-xl shadow-lg p-8 text-center col-span-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-400 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="text-gray-600 text-lg mb-4">Aucune réservation pour le moment.</p>
                        <a href="{{ route('trainers.index') }}" class="inline-block bg-brand-primary hover:bg-brand-secondary text-white font-bold py-3 px-6 rounded-lg transition duration-300">
                            Réserver une séance
                        </a>
                    </div>
                @endforelse
            </div>
            
            @if(count($reservations) > 0)
            <div class="mt-12 text-center">
                <a href="" class="inline-block bg-brand-primary hover:bg-brand-secondary text-white font-bold py-3 px-8 rounded-lg transition duration-300">
                    Réserver une nouvelle séance
                </a>
            </div>
            @endif
        </section>
    </div>
@endsection