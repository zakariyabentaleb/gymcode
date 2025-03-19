@extends('layouts.app')

@section('title', 'GymTracker - No Pain, No Gain')

@section('content')
    <!-- Hero Section -->
    <section class="relative hero-pattern pt-20">
        <div class="absolute inset-0 gradient-overlay z-10"></div>
        <div class="container mx-auto px-4 py-32 md:py-40 relative z-20">
            <div class="max-w-2xl">
                <h5 class="text-brand-red font-semibold mb-4 tracking-wider">TRANSFORMEZ VOTRE CORPS</h5>
                <h1 class="text-4xl md:text-6xl font-extrabold mb-6 text-white text-shadow leading-tight">NO PAIN, <span class="text-brand-red">NO GAIN.</span><br>IT'S TIME TO WORKOUT</h1>
                <p class="text-lg mb-10 text-gray-200 max-w-xl">Rejoignez GymTracker pour transformer votre corps et votre esprit. Réservez des séances, suivez vos progrès et atteignez vos objectifs fitness.</p>
                <div class="flex space-x-4">
                    <a href="{{ route('register') }}" class="btn-primary bg-brand-red hover:bg-red-700 transition duration-500 py-3 px-8 rounded-lg font-semibold text-white uppercase tracking-wide">S'inscrire</a>
                    <a href="#features" class="border-2 border-white hover:border-brand-red hover:text-brand-red transition duration-300 py-3 px-8 rounded-lg font-semibold text-white uppercase tracking-wide">En savoir plus</a>
                </div>
            </div>
            <div class="absolute bottom-0 right-0 hidden lg:block">
                <div class="relative w-64 h-64 bg-brand-red rounded-full opacity-10 animate-pulse-slow -mb-32 -mr-20"></div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h5 class="text-brand-red font-semibold mb-2 tracking-wider">CE QUE NOUS OFFRONS</h5>
                <h2 class="text-3xl font-bold mb-4 text-brand-dark">Fonctionnalités Innovantes</h2>
                <p class="max-w-2xl mx-auto text-gray-600">GymTracker simplifie votre expérience fitness avec des outils innovants pour les membres, les entraîneurs et les administrateurs.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-500 feature-card border-t-4 border-brand-red">
                    <div class="w-16 h-16 bg-brand-red text-white rounded-xl flex items-center justify-center mb-6 transform -rotate-6">
                        <i class="fas fa-calendar-alt text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-brand-dark">Réservation de Créneaux</h3>
                    <p class="text-gray-600">Réservez vos séances d'entraînement en quelques clics selon votre disponibilité et recevez des rappels automatiques.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-500 feature-card border-t-4 border-brand-red">
                    <div class="w-16 h-16 bg-brand-red text-white rounded-xl flex items-center justify-center mb-6 transform -rotate-6">
                        <i class="fas fa-user-friends text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-brand-dark">Entraîneurs Personnels</h3>
                    <p class="text-gray-600">Choisissez parmi nos entraîneurs qualifiés et suivez vos séances personnalisées adaptées à vos objectifs spécifiques.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-500 feature-card border-t-4 border-brand-red">
                    <div class="w-16 h-16 bg-brand-red text-white rounded-xl flex items-center justify-center mb-6 transform -rotate-6">
                        <i class="fas fa-chart-line text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-brand-dark">Suivi des Progrès</h3>
                    <p class="text-gray-600">Visualisez vos performances avec des graphiques détaillés et suivez vos progrès sur le long terme avec des analyses personnalisées.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-brand-dark text-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-4xl font-bold mb-2 text-brand-red">10k+</div>
                    <p class="text-gray-300">Utilisateurs actifs</p>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2 text-brand-red">50+</div>
                    <p class="text-gray-300">Entraîneurs certifiés</p>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2 text-brand-red">1M+</div>
                    <p class="text-gray-300">Séances réservées</p>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2 text-brand-red">95%</div>
                    <p class="text-gray-300">Taux de satisfaction</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-brand-light">
        <div class="container mx-auto px-4 text-center">
            <h5 class="text-brand-red font-semibold mb-2 tracking-wider">TÉMOIGNAGES</h5>
            <h2 class="text-3xl font-bold mb-10 text-brand-dark">Ce que disent nos clients</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white p-8 rounded-xl shadow-lg testimonial-card transition duration-500 relative">
                    <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                        <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Client 1" class="w-16 h-16 rounded-full object-cover border-4 border-brand-red">
                    </div>
                    <div class="text-brand-red text-2xl pt-6 pb-4">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="text-gray-600 mb-6">"GymTracker a complètement transformé ma façon de m'entraîner. Les réservations sont simples et l'application est super pratique pour suivre mes progrès."</p>
                    <div>
                        <h4 class="font-semibold text-brand-dark">Jean Dupont</h4>
                        <p class="text-gray-500 text-sm">Client depuis 2 ans</p>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white p-8 rounded-xl shadow-lg testimonial-card transition duration-500 relative">
                    <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                        <img src="https://randomuser.me/api/portraits/women/2.jpg" alt="Client 2" class="w-16 h-16 rounded-full object-cover border-4 border-brand-red">
                    </div>
                    <div class="text-brand-red text-2xl pt-6 pb-4">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="text-gray-600 mb-6">"Les entraîneurs sont très compétents, et l'expérience est vraiment personnalisée. Je recommande vivement GymTracker à tous les sportifs."</p>
                    <div>
                        <h4 class="font-semibold text-brand-dark">Sophie Martin</h4>
                        <p class="text-gray-500 text-sm">Athlète amateur</p>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white p-8 rounded-xl shadow-lg testimonial-card transition duration-500 relative">
                    <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                        <img src="https://randomuser.me/api/portraits/men/3.jpg" alt="Client 3" class="w-16 h-16 rounded-full object-cover border-4 border-brand-red">
                    </div>
                    <div class="text-brand-red text-2xl pt-6 pb-4">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="text-gray-600 mb-6">"L'application GymTracker m'a permis de rester motivé et de suivre mes progrès chaque semaine. J'ai atteint des objectifs que je pensais impossibles !"</p>
                    <div>
                        <h4 class="font-semibold text-brand-dark">Marc Lemoine</h4>
                        <p class="text-gray-500 text-sm">Coach personnel</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Partners Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h5 class="text-brand-red font-semibold mb-2 tracking-wider">COLLABORATIONS</h5>
            <h2 class="text-3xl font-bold mb-10 text-brand-dark">Nos Partenaires</h2>
            <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16">
                <img src="https://via.placeholder.com/150x50?text=Partenaire+1" alt="Partner 1" class="max-w-full h-auto grayscale hover:grayscale-0 transition duration-300">
                <img src="https://via.placeholder.com/150x50?text=Partenaire+2" alt="Partner 2" class="max-w-full h-auto grayscale hover:grayscale-0 transition duration-300">
                <img src="https://via.placeholder.com/150x50?text=Partenaire+3" alt="Partner 3" class="max-w-full h-auto grayscale hover:grayscale-0 transition duration-300">
                <img src="https://via.placeholder.com/150x50?text=Partenaire+4" alt="Partner 4" class="max-w-full h-auto grayscale hover:grayscale-0 transition duration-300">
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-gradient-to-r from-brand-red to-red-700 text-white">
        <div class="container mx-auto px-4 text-center">
            <h5 class="font-semibold mb-2 tracking-wider uppercase">Commencez dès maintenant</h5>
            <h2 class="text-4xl font-bold mb-6">Prêt à transformer votre corps ?</h2>
            <p class="max-w-2xl mx-auto mb-10 text-lg">Inscrivez-vous dès aujourd'hui et bénéficiez d'un accès à toutes nos fonctionnalités avec 30 jours d'essai gratuit.</p>
            <a href="{{ route('register') }}" class="bg-white text-brand-red hover:bg-gray-100 transition duration-300 py-3 px-8 rounded-lg font-semibold text-lg shadow-lg hover:shadow-xl">S'inscrire maintenant</a>
            <p class="mt-4 text-sm">Aucune carte de crédit requise • Annulez à tout moment</p>
        </div>
    </section>
@endsection