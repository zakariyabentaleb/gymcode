@php
    use Illuminate\Support\Str;
@endphp
@extends('layouts.app')

@section('title', 'GymTracker - Paiement Annulé')

@section('content')
    <body class="bg-brand-light font-sans">
        <!-- Cancel Payment Section -->
        <section class="pt-28 pb-20">
            <div class="container mx-auto px-4">
                <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden">
                    <!-- Cancel Header -->
                    <div class="bg-gradient-to-r from-gray-700 to-gray-900 py-8 px-6 text-white text-center">
                        <div class="mb-4 inline-flex items-center justify-center w-16 h-16 bg-white rounded-full">
                            <i class="fas fa-times text-3xl text-gray-700"></i>
                        </div>
                        <h2 class="text-2xl font-bold">Paiement Annulé</h2>
                        <div class="mt-2 inline-flex items-center bg-white bg-opacity-20 px-3 py-1 rounded-full">
                            <i class="fas fa-map-marker-alt mr-1"></i>
                            <span class="text-sm font-medium">Programme Présentiel</span>
                        </div>
                    </div>
                    
                    <!-- Cancel Content -->
                    <div class="p-8">
                        <div class="text-center mb-8">
                            <p class="text-gray-600 mb-2">Votre transaction a été annulée ou n'a pas pu être complétée.</p>
                            <p class="text-brand-dark font-semibold text-lg">Aucun prélèvement n'a été effectué sur votre compte.</p>
                        </div>
                        
                        <!-- Cancel Information -->
                        <div class="bg-red-50 border border-red-100 rounded-lg p-6 mb-8">
                            <h3 class="font-semibold text-brand-dark mb-4">Que s'est-il passé ?</h3>
                            <p class="text-gray-600 mb-4">Votre paiement pour le programme présentiel n'a pas pu être finalisé pour l'une des raisons suivantes :</p>
                            <ul class="space-y-2 list-disc list-inside text-gray-600">
                                <li>Vous avez choisi d'annuler la transaction</li>
                                <li>Un problème est survenu avec votre moyen de paiement</li>
                                <li>La connexion a été interrompue pendant le processus</li>
                                <li>Une erreur technique s'est produite lors du traitement</li>
                            </ul>
                        </div>
                        
                        <!-- Options Section -->
                        <div class="border border-gray-200 rounded-lg mb-8">
                            <div class="border-b border-gray-200 p-4">
                                <h3 class="font-semibold text-brand-dark">Options disponibles</h3>
                            </div>
                            <div class="p-4">
                                <div class="flex items-start py-3">
                                    <div class="flex-shrink-0 text-brand-red mr-3 mt-1"><i class="fas fa-redo"></i></div>
                                    <div>
                                        <h4 class="font-medium text-brand-dark">Réessayer le paiement</h4>
                                        <p class="text-gray-600 text-sm">Vous pouvez réessayer le processus de paiement en utilisant le même ou un autre moyen de paiement.</p>
                                    </div>
                                </div>
                                <div class="flex items-start py-3 border-t border-gray-200">
                                    <div class="flex-shrink-0 text-brand-red mr-3 mt-1"><i class="fas fa-phone-alt"></i></div>
                                    <div>
                                        <h4 class="font-medium text-brand-dark">Contacter notre service client</h4>
                                        <p class="text-gray-600 text-sm">Notre équipe est disponible pour vous aider si vous rencontrez des difficultés avec le paiement.</p>
                                    </div>
                                </div>
                                <div class="flex items-start py-3 border-t border-gray-200">
                                    <div class="flex-shrink-0 text-brand-red mr-3 mt-1"><i class="fas fa-calendar-alt"></i></div>
                                    <div>
                                        <h4 class="font-medium text-brand-dark">Programmer une visite</h4>
                                        <p class="text-gray-600 text-sm">Vous préférez payer sur place ? Programmez une visite à notre salle pour finaliser votre inscription.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Action Buttons -->
                        <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                           
                            <a href="{{route('programmes')}}" class="btn-primary bg-transparent border-2 border-brand-dark hover:bg-brand-dark hover:text-white text-brand-dark py-3 px-8 rounded-lg font-semibold tracking-wide transition duration-300 text-center flex-1">
                                Retour à l'accueil
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Alternative Programs -->
              
            </div>
        </section>
        
        <!-- Help Section -->
        <section class="py-12 bg-brand-dark text-white">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto">
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold mb-4">Besoin d'assistance pour votre paiement ?</h3>
                        <p class="text-gray-300">Notre équipe de support est disponible pour vous aider à résoudre tout problème lié à votre paiement.</p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                        <div class="bg-gray-800 p-6 rounded-xl text-center">
                            <div class="text-3xl text-brand-red mb-4"><i class="fas fa-envelope"></i></div>
                            <h4 class="font-semibold mb-2">Email</h4>
                            <p class="text-gray-300 text-sm mb-4">Réponse sous 24h</p>
                            <a href="mailto:support@gymtracker.com" class="text-brand-red hover:text-white transition duration-300">support@gymtracker.com</a>
                        </div>
                        
                        <div class="bg-gray-800 p-6 rounded-xl text-center">
                            <div class="text-3xl text-brand-red mb-4"><i class="fas fa-phone-alt"></i></div>
                            <h4 class="font-semibold mb-2">Téléphone</h4>
                            <p class="text-gray-300 text-sm mb-4">Lun-Ven: 9h-18h</p>
                            <a href="tel:+212522123456" class="text-brand-red hover:text-white transition duration-300">+212 522 123 456</a>
                        </div>
                        
                        <div class="bg-gray-800 p-6 rounded-xl text-center">
                            <div class="text-3xl text-brand-red mb-4"><i class="fas fa-comments"></i></div>
                            <h4 class="font-semibold mb-2">Chat en direct</h4>
                            <p class="text-gray-300 text-sm mb-4">Assistance immédiate</p>
                            <a href="#" class="bg-brand-red hover:bg-red-700 text-white py-2 px-6 rounded-lg font-medium text-sm transition duration-300 inline-block">Démarrer un chat</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- FAQ Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="max-w-3xl mx-auto">
                    <h3 class="text-center text-2xl font-bold mb-10 text-brand-dark">Questions fréquentes sur les paiements</h3>
                    
                    <div class="space-y-4">
                        <div class="border border-gray-200 rounded-lg overflow-hidden">
                            <div class="p-4 bg-gray-50 font-medium text-brand-dark flex justify-between items-center cursor-pointer">
                                <span>Quels moyens de paiement acceptez-vous ?</span>
                                <i class="fas fa-chevron-down text-brand-red"></i>
                            </div>
                            <div class="p-4 border-t border-gray-200">
                                <p class="text-gray-600">Nous acceptons les cartes Visa, Mastercard, les virements bancaires et les paiements en espèces directement à notre salle. Pour plus d'informations, n'hésitez pas à contacter notre service client.</p>
                            </div>
                        </div>
                        
                        <div class="border border-gray-200 rounded-lg overflow-hidden">
                            <div class="p-4 bg-gray-50 font-medium text-brand-dark flex justify-between items-center cursor-pointer">
                                <span>Pourquoi mon paiement a-t-il échoué ?</span>
                                <i class="fas fa-chevron-down text-brand-red"></i>
                            </div>
                            <div class="p-4 border-t border-gray-200">
                                <p class="text-gray-600">Les échecs de paiement peuvent être dus à plusieurs raisons : fonds insuffisants, informations incorrectes, restrictions de la banque ou problèmes techniques. Nous vous recommandons de vérifier vos informations et de réessayer ou d'utiliser un autre moyen de paiement.</p>
                            </div>
                        </div>
                        
                        <div class="border border-gray-200 rounded-lg overflow-hidden">
                            <div class="p-4 bg-gray-50 font-medium text-brand-dark flex justify-between items-center cursor-pointer">
                                <span>Puis-je payer en plusieurs fois ?</span>
                                <i class="fas fa-chevron-down text-brand-red"></i>
                            </div>
                            <div class="p-4 border-t border-gray-200">
                                <p class="text-gray-600">Oui, pour certains programmes, nous proposons des options de paiement échelonné. Contactez notre équipe commerciale pour discuter des modalités disponibles pour le programme qui vous intéresse.</p>
                            </div>
                        </div>
                        
                        <div class="border border-gray-200 rounded-lg overflow-hidden">
                            <div class="p-4 bg-gray-50 font-medium text-brand-dark flex justify-between items-center cursor-pointer">
                                <span>Est-ce que je peux payer directement à la salle ?</span>
                                <i class="fas fa-chevron-down text-brand-red"></i>
                            </div>
                            <div class="p-4 border-t border-gray-200">
                                <p class="text-gray-600">Absolument ! Vous pouvez vous rendre directement dans notre salle pour effectuer votre paiement et finaliser votre inscription. Nous vous recommandons d'appeler à l'avance pour vous assurer de la disponibilité des places dans le programme choisi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
@endsection