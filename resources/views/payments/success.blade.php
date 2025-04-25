@php
    use Illuminate\Support\Str;
@endphp
@extends('layouts.app')

@section('title', 'GymTracker - Paiement Réussi - Programme Présentiel')

@section('content')
    <body class="bg-brand-light font-sans">
        <!-- Success Section -->
        <section class="pt-28 pb-20">
            <div class="container mx-auto px-4">
                <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden">
                    <!-- Success Header -->
                    <div class="bg-gradient-to-r from-brand-red to-red-700 py-8 px-6 text-white text-center">
                        <div class="mb-4 inline-flex items-center justify-center w-16 h-16 bg-white rounded-full">
                            <i class="fas fa-check text-3xl text-brand-red"></i>
                        </div>
                        <h2 class="text-2xl font-bold">Paiement Réussi</h2>
                        <div class="mt-2 inline-flex items-center bg-white bg-opacity-20 px-3 py-1 rounded-full">
                            <i class="fas fa-map-marker-alt mr-1"></i>
                            <span class="text-sm font-medium">Programme Présentiel</span>
                        </div>
                    </div>
                    
                    <!-- Success Content -->
                    <div class="p-8">
                        <div class="text-center mb-8">
                            <p class="text-gray-600 mb-2">Votre inscription au programme présentiel a été confirmée.</p>
                            <p class="text-brand-dark font-semibold text-lg">Merci pour votre confiance !</p>
                        </div>
                        
                        <!-- Order Details -->
                        <div class="border border-gray-200 rounded-lg mb-8">
                            <div class="border-b border-gray-200 p-4">
                                <h3 class="font-semibold text-brand-dark">Détails de la commande</h3>
                            </div>
                            <div class="p-4">
                                <div class="flex justify-between py-2">
                                    <span class="text-gray-600">Numéro de commande:</span>
                                    <span class="text-brand-dark font-medium">{{ Str::random(8) }}</span>
                                </div>
                                <div class="flex justify-between py-2 border-t border-gray-200">
                                    <span class="text-gray-600">Date:</span>
                                    <span class="text-brand-dark font-medium">{{ date('d/m/Y') }}</span>
                                </div>
                                <div class="flex justify-between py-2 border-t border-gray-200">
                                    <span class="text-gray-600">Programme:</span>
                                    <span class="text-brand-dark font-medium">{{ $program->title ?? 'Programme Fitness Présentiel' }}</span>
                                </div>
                                <div class="flex justify-between py-2 border-t border-gray-200">
                                    <span class="text-gray-600">Lieu:</span>
                                    <span class="text-brand-dark font-medium">{{ $program->location ?? 'Salle GymTracker' }}</span>
                                </div>
                                <div class="flex justify-between py-2 border-t border-gray-200">
                                    <span class="text-gray-600">Méthode de paiement:</span>
                                    <span class="text-brand-dark font-medium">Carte bancaire</span>
                                </div>
                                <div class="flex justify-between py-2 border-t border-gray-200">
                                    <span class="text-gray-600 font-semibold">Total:</span>
                                    <span class="text-brand-red font-bold">{{ $program->price ?? '650' }} DH</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Location Information -->
                        <div class="bg-brand-light rounded-lg p-6 mb-8">
                            <h3 class="font-semibold text-brand-dark mb-4">Informations sur votre programme présentiel</h3>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <div class="flex-shrink-0 text-brand-red mr-2"><i class="fas fa-map-marker-alt"></i></div>
                                    <p class="text-gray-600">Adresse: <span class="font-medium">{{ $program->address ?? '123 Avenue Mohammed V, Casablanca' }}</span></p>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0 text-brand-red mr-2"><i class="fas fa-calendar-alt"></i></div>
                                    <p class="text-gray-600">Date de début: <span class="font-medium">{{ $program->start_date ?? '03/05/2025' }}</span></p>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0 text-brand-red mr-2"><i class="fas fa-clock"></i></div>
                                    <p class="text-gray-600">Horaires: <span class="font-medium">{{ $program->schedule ?? 'Lundi, Mercredi, Vendredi (18h00 - 19h30)' }}</span></p>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0 text-brand-red mr-2"><i class="fas fa-user"></i></div>
                                    <p class="text-gray-600">Coach: <span class="font-medium">{{ $program->coach ?? 'Youssef Benali' }}</span></p>
                                </li>
                            </ul>
                        </div>
                        
                        <!-- What's Next -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 mb-8">
                            <h3 class="font-semibold text-brand-dark mb-4">Étapes suivantes</h3>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <div class="flex-shrink-0 text-brand-red mr-2"><i class="fas fa-envelope"></i></div>
                                    <p class="text-gray-600">Vous recevrez un email de confirmation avec tous les détails et documents nécessaires.</p>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0 text-brand-red mr-2"><i class="fas fa-clipboard-list"></i></div>
                                    <p class="text-gray-600">Veuillez apporter une pièce d'identité lors de votre première séance.</p>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0 text-brand-red mr-2"><i class="fas fa-tshirt"></i></div>
                                    <p class="text-gray-600">N'oubliez pas votre tenue de sport et une bouteille d'eau.</p>
                                </li>
                            </ul>
                        </div>
                        
                        <!-- Action Buttons -->
                        <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                          
                            <a href="{{route('programmes')}}" class="btn-primary bg-transparent border-2 border-brand-dark hover:bg-brand-dark hover:text-white text-brand-dark py-3 px-8 rounded-lg font-semibold tracking-wide transition duration-300 text-center flex-1">
                                Retour à l'accueil
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Related Products -->
               
            </div>
        </section>
        
        <!-- Maps Section -->
        <section class="py-12 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold text-brand-dark">Comment nous trouver</h3>
                    <p class="text-gray-600 mt-2">Voici l'emplacement de notre salle où se déroulera votre programme</p>
                </div>
                <div class="rounded-xl overflow-hidden shadow-lg" style="height: 400px;">
                    <!-- Placeholder for the map - in production, you would integrate Google Maps or similar -->
                    <div class="bg-gray-200 w-full h-full flex items-center justify-center">
                        <div class="text-center">
                            <div class="text-5xl text-brand-red mb-4"><i class="fas fa-map-marker-alt"></i></div>
                            <p class="text-brand-dark font-medium">{{ $program->address ?? '123 Avenue Mohammed V, Casablanca' }}</p>
                            <p class="text-gray-500 mt-2">Pour voir la carte complète, cliquez sur le bouton ci-dessous</p>
                            <a href="https://maps.google.com" target="_blank" class="inline-block mt-4 bg-brand-red hover:bg-red-700 text-white py-2 px-5 rounded-lg font-semibold transition duration-300">
                                <i class="fas fa-directions mr-1"></i> Obtenir l'itinéraire
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Support Banner -->
        <section class="py-12 bg-brand-dark text-white">
            <div class="container mx-auto px-4 text-center">
                <h3 class="text-2xl font-bold mb-4">Besoin d'aide ?</h3>
                <p class="mb-6 max-w-2xl mx-auto">Notre équipe est disponible pour répondre à toutes vos questions concernant votre programme présentiel.</p>
                <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
                    <a href="{{ route('contact') }}" class="bg-brand-red hover:bg-red-700 text-white py-2 px-6 rounded-lg font-semibold transition duration-300 inline-flex items-center justify-center">
                        <i class="fas fa-envelope mr-2"></i> Contacter le support
                    </a>
                    <a href="tel:+212522123456" class="bg-transparent border-2 border-white hover:bg-white hover:text-brand-dark text-white py-2 px-6 rounded-lg font-semibold transition duration-300 inline-flex items-center justify-center">
                        <i class="fas fa-phone-alt mr-2"></i> +212 522 123 456
                    </a>
                </div>
            </div>
        </section>
    </body>
@endsection