@extends('layouts.app')

@section('title', 'GymTracker - Paiements')

@section('content')
    <div class="bg-gradient-to-b from-brand-light to-white py-24">
        <!-- Payments Section -->
        <section class="container mx-auto px-4">
            <div class="text-center mb-12 ">
                <h2 class="text-4xl font-bold text-brand-dark mb-3 ">Mes paiements</h2>
                <div class="w-24 h-1 bg-brand-primary mx-auto mb-6 rounded-full"></div>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">Consultez l'historique de vos transactions en toute transparence.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($payments as $payment)
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                        <div class="bg-gradient-to-r from-brand-primary to-brand-secondary p-4">
                            <h3 class="text-xl font-bold ">
                               Programme : {{ $payment->program->title ?? 'Programme inconnu' }}
                            </h3>
                        </div>
                        <div class="p-6">
                            <div class="mb-6 space-y-3">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-brand-primary mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <p class="text-gray-700"><strong>Date:</strong> {{ $payment->created_at->format('d/m/Y à H:i') }}</p>
                                </div>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-brand-primary mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2v2m0 16v2m10-10h-2M4 12H2" />
                                    </svg>
                                    <p class="text-gray-700"><strong>Montant:</strong> {{ number_format($payment->program->price, 2) }} MAD</p>
                                </div>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-brand-primary mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0-1.105.895-2 2-2h4a2 2 0 012 2v0a2 2 0 01-2 2h-4c-1.105 0-2-.895-2-2z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 12h6M5 9l3 3-3 3" />
                                    </svg>
                                    <p class="text-gray-700"><strong>Méthode:</strong> online</p>
                                </div>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-brand-primary mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                                    </svg>
                                    <p class="text-gray-700"><strong>Référence:</strong> #{{ $payment->id }}</p>
                                </div>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-brand-primary mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <p class="text-gray-700">
                                        <strong>Statut: Paid</strong>
                                        
                                    </p>
                                </div>
                            </div>
                
                            <div class="flex gap-3 mt-4">
                                <a href="" class="flex-1 bg-brand-primary hover:bg-brand-secondary  bg-red-600 hover:bg-red-700 text-white py-2 px-4 rounded-lg font-semibold transition duration-300 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    Télécharger
                                </a>
                
                                <a href="" class="flex-1 bg-yellow-500 hover:bg-yellow-600 text-white py-2 px-4 rounded-lg font-semibold transition duration-300 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                    Détails
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="bg-white rounded-xl shadow-lg p-8 text-center col-span-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-400 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="text-gray-600 text-lg mb-4">Aucun paiement enregistré pour le moment.</p>
                       
                    </div>
                @endforelse
            </div>
            
            @if(count($payments) > 0)
            <div class="mt-12 text-center">
                <a href="" class="inline-block bg-brand-primary hover:bg-brand-secondary text-white font-bold py-3 px-8 rounded-lg transition duration-300">
                    Voir l'historique complet
                </a>
            </div>
            @endif
        </section>
    </div>
@endsection