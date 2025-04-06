@php
    use Illuminate\Support\Str;
@endphp
@extends('layouts.app')

@section('title', 'GymTracker - No Pain, No Gain')

@section('content')
    <body class="bg-brand-light font-sans">
        <!-- Navigation -->
        

        <!-- Hero Section -->
        <section class="hero-pattern pt-28 pb-20">
            <div class="gradient-overlay w-full h-full py-20">
                <div class="container mx-auto px-4 flex flex-col items-center">
                    <h5 class="text-brand-red font-semibold mb-2 tracking-wider text-center">TRANSFORMEZ VOTRE CORPS</h5>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 text-white text-center text-shadow max-w-4xl">Programmes d'entraînement adaptés à vos objectifs</h1>
                    <p class="text-gray-300 max-w-2xl text-center mb-10">Découvrez nos programmes sur mesure créés par des professionnels du fitness pour vous aider à atteindre vos objectifs plus rapidement et efficacement.</p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="#programmes" class="btn-primary bg-brand-red hover:bg-red-700 text-white py-3 px-8 rounded-lg font-semibold tracking-wide transition duration-300 text-center">
                            Explorer les programmes
                        </a>
                        <a href="{{route('contact')}}" class="btn-primary bg-transparent border-2 border-white hover:bg-white hover:text-brand-dark text-white py-3 px-8 rounded-lg font-semibold tracking-wide transition duration-300 text-center">
                            Contacter un coach
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Popular Programs Section -->
        <section id="programmes" class="py-20 bg-brand-light">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h5 class="text-brand-red font-semibold mb-2 tracking-wider">PROGRAMMES POPULAIRES</h5>
                    <h2 class="text-3xl font-bold mb-4 text-brand-dark">Nos programmes les plus demandés</h2>
                    <p class="max-w-2xl mx-auto text-gray-600">Des programmes adaptés à tous les niveaux pour vous aider à atteindre vos objectifs fitness plus rapidement et efficacement.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach ($programs as $program)
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden program-card">
                        <div class="relative">
                           
                            <img src="{{ asset('storage/' . $program->image_url) }}" alt="Programme"  class="w-full h-64 object-cover" />

                            <div class="absolute top-4 right-4 bg-brand-red text-white text-xs font-semibold px-3 py-1 rounded-lg">POPULAIRE</div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center mb-3">
                                <div class="text-brand-red mr-2"><i class="fas fa-fire-alt"></i></div>
                                <span class="text-sm text-gray-500">Niveau: {{$program->level}}</span>
                                <div class="ml-auto flex">
                                    <span class="sr-only">4.5 étoiles sur 5</span>
                                    <div class="text-yellow-500"><i class="fas fa-star"></i></div>
                                    <div class="text-yellow-500"><i class="fas fa-star"></i></div>
                                    <div class="text-yellow-500"><i class="fas fa-star"></i></div>
                                    <div class="text-yellow-500"><i class="fas fa-star"></i></div>
                                    <div class="text-yellow-500"><i class="fas fa-star-half-alt"></i></div>
                                </div>
                            </div>
                            <a href="{{route('programmes-details',['id' => $program->id])}}"><h3 class="text-xl font-semibold mb-2 hover:text-brand-red transition duration-300">Cardio Intensif {{$program->duree}} Semaines</h3></a>
                            <p class="text-gray-600 mb-4">{{ Str::limit($program->description, 20) }} </p>
                            <div class="flex justify-between items-center">
                                <span class="text-brand-red font-bold text-xl">{{$program->price}} DH</span>
                                <a href="#" class="btn-primary bg-brand-red hover:bg-red-700 text-white py-2 px-5 rounded-lg font-semibold transition duration-300">S'inscrire</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- <div class="flex justify-center mt-12">
                    <a href="#" class="btn-primary bg-brand-dark hover:bg-gray-800 text-white py-3 px-8 rounded-lg font-semibold tracking-wide transition duration-300 flex items-center">
                        <span>Voir tous les programmes</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div> --}}
                <div class="flex justify-center mt-12">
                    {{ $programs->links('pagination::tailwind') }}
                </div>
                
            </div>
        </section>

        <!-- Programs Stats Section -->
        <section class="py-16 bg-brand-dark text-white">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
                    <div class="p-6">
                        <div class="text-4xl text-brand-red mb-4"><i class="fas fa-users"></i></div>
                        <h3 class="text-3xl font-bold mb-2">15,000+</h3>
                        <p class="text-gray-400">Utilisateurs actifs</p>
                    </div>
                    <div class="p-6">
                        <div class="text-4xl text-brand-red mb-4"><i class="fas fa-clipboard-list"></i></div>
                        <h3 class="text-3xl font-bold mb-2">25+</h3>
                        <p class="text-gray-400">Programmes fitness</p>
                    </div>
                    <div class="p-6">
                        <div class="text-4xl text-brand-red mb-4"><i class="fas fa-medal"></i></div>
                        <h3 class="text-3xl font-bold mb-2">92%</h3>
                        <p class="text-gray-400">Taux de réussite</p>
                    </div>
                    <div class="p-6">
                        <div class="text-4xl text-brand-red mb-4"><i class="fas fa-star"></i></div>
                        <h3 class="text-3xl font-bold mb-2">4.8/5</h3>
                        <p class="text-gray-400">Note moyenne</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials about programs -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-4 text-center">
                <h5 class="text-brand-red font-semibold mb-2 tracking-wider">TÉMOIGNAGES</h5>
                <h2 class="text-3xl font-bold mb-10 text-brand-dark">Ce que disent nos membres</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Testimonial 1 -->
                    <div class="bg-brand-light p-8 rounded-xl shadow-lg transition duration-500 relative hover:shadow-xl">
                        <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                            <img src="https://randomuser.me/api/portraits/women/33.jpg" alt="Client 1" class="w-16 h-16 rounded-full object-cover border-4 border-brand-red">
                        </div>
                        <div class="text-brand-red text-2xl pt-6 pb-4">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p class="text-gray-600 mb-6">"Le programme Cardio Intensif a transformé ma condition physique en seulement 8 semaines. Je n'ai jamais eu autant d'énergie !"</p>
                        <div>
                            <h4 class="font-semibold text-brand-dark">Marie Dubois</h4>
                            <p class="text-gray-500 text-sm">Programme Cardio Intensif</p>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="bg-brand-light p-8 rounded-xl shadow-lg transition duration-500 relative hover:shadow-xl">
                        <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                            <img src="https://randomuser.me/api/portraits/men/44.jpg" alt="Client 2" class="w-16 h-16 rounded-full object-cover border-4 border-brand-red">
                        </div>
                        <div class="text-brand-red text-2xl pt-6 pb-4">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p class="text-gray-600 mb-6">"J'ai pris 7kg de muscle en suivant le programme Force & Hypertrophie. Les exercices sont très bien expliqués et efficaces."</p>
                        <div>
                            <h4 class="font-semibold text-brand-dark">Thomas Moreau</h4>
                            <p class="text-gray-500 text-sm">Programme Force & Hypertrophie</p>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="bg-brand-light p-8 rounded-xl shadow-lg transition duration-500 relative hover:shadow-xl">
                        <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                            <img src="https://randomuser.me/api/portraits/women/66.jpg" alt="Client 3" class="w-16 h-16 rounded-full object-cover border-4 border-brand-red">
                        </div>
                        <div class="text-brand-red text-2xl pt-6 pb-4">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p class="text-gray-600 mb-6">"Le programme Yoga & Bien-être m'a aidé à réduire mon stress et à améliorer ma souplesse. Je me sens tellement mieux dans mon corps !"</p>
                        <div>
                            <h4 class="font-semibold text-brand-dark">Chloé Bernard</h4>
                            <p class="text-gray-500 text-sm">Programme Yoga & Bien-être</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="py-20 bg-gradient-to-r from-brand-red to-red-700 text-white">
            <div class="container mx-auto px-4 text-center">
                <h5 class="font-semibold mb-2 tracking-wider uppercase">Commencez dès maintenant</h5>
                <h2 class="text-4xl font-bold mb-6">Prêt à transformer votre corps ?</h2>
                <p class="max-w-2xl mx-auto mb-10 text-lg">Inscrivez-vous à l'un de nos programmes et bénéficiez d'un accès à notre application pour suivre vos progrès.</p>
                <a href="#" class="bg-white text-brand-red hover:bg-gray-100 transition duration-300 py-3 px-8 rounded-lg font-semibold text-lg shadow-lg hover:shadow-xl">Commencer maintenant</a>
                <p class="mt-4 text-sm">Garantie satisfait ou remboursé pendant 30 jours</p>
            </div>
        </section>

        <!-- Footer -->
       
     
        <!-- JavaScript for Mobile Menu Toggle -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    });
    @endsection