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

        <!-- Search and Filter Section -->
       
        
        <!-- Popular Programs Section -->
        <section id="programmes" class="py-20 bg-brand-light">
            <div class="container mx-auto px-4">
                <!-- Section Header -->
                <div class="text-center mb-12">
                    <h5 class="text-brand-red font-semibold mb-2 tracking-wider uppercase">Catalogue Complet</h5>
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-brand-dark">Tous nos programmes fitness</h2>
                    <p class="max-w-2xl mx-auto text-gray-600">Découvrez notre gamme complète de programmes fitness, conçus par des experts pour s'adapter à vos objectifs, votre emploi du temps et votre niveau d'expérience.</p>
                </div>
                
                <!-- Filter Section -->
                <div class="bg-white rounded-lg shadow-md mb-10 p-6">
                    <form action="{{ route('home') }}" method="GET" id="program-filter-form">
                        <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4">
                            <!-- Search Bar -->
                            <div class="md:w-1/3">
                                <div class="flex w-full">
                                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Rechercher un programme..." 
                                        class="w-full px-4 py-2 rounded-l-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-brand-red">
                                    <button type="submit" class="bg-brand-red hover:bg-red-700 text-white px-4 py-2 rounded-r-lg transition duration-300 flex items-center justify-center">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Filters -->
                            <div class="md:w-2/3 flex flex-wrap gap-3">
                                <select name="level" id="level-filter" class="px-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-brand-red text-sm flex-grow">
                                    <option value="">Niveau</option>
                                    <option value="debutant" {{ request('level') == 'debutant' ? 'selected' : '' }}>Débutant</option>
                                    <option value="intermediaire" {{ request('level') == 'intermediaire' ? 'selected' : '' }}>Intermédiaire</option>
                                    <option value="professionel" {{ request('level') == 'professionel' ? 'selected' : '' }}>Professionel</option>
                                </select>
                                
                                <select name="category" id="category-filter" class="px-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-brand-red text-sm flex-grow">
                                    <option value="">Catégorie</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                
                                <button type="submit" class="bg-brand-dark hover:bg-gray-800 text-white px-6 py-2 rounded-lg transition duration-300 text-sm font-medium">
                                    Filtrer
                                </button>
                    
                                @if(request('search') || request('level') || request('duration') || request('category'))
                                <a href="{{ route('home') }}" class="text-brand-red hover:text-red-700 px-4 py-2 text-sm flex items-center font-medium">
                                    <i class="fas fa-times mr-1"></i> Réinitialiser
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
                
                <!-- Program Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                    @forelse ($programs as $program)
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden program-card hover:shadow-xl transition-all duration-300">
                        <div class="relative">
                            <img src="{{ asset('storage/' . $program->image_url) }}" alt="{{ $program->title }}" class="w-full h-64 object-cover" />
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
                            <a href="{{route('programmes-details',['id' => $program->id])}}" class="block">
                                <h3 class="text-xl font-semibold mb-2 hover:text-brand-red transition duration-300">{{ $program->title ?? 'Cardio Intensif ' . $program->duree . ' Semaines' }}</h3>
                            </a>
                            <p class="text-gray-600 mb-4 line-clamp-2">{{ $program->description }}</p>
                            <div class="flex justify-between items-center">
                                <span class="text-brand-red font-bold text-xl">{{$program->price}} DH</span>
                                <a href="#" class="bg-brand-red hover:bg-red-700 text-white py-2 px-5 rounded-lg font-semibold transition duration-300 inline-block">S'inscrire</a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-span-full">
                        <div class="bg-white rounded-xl shadow p-10 text-center max-w-lg mx-auto">
                            <div class="text-5xl text-gray-300 mb-4"><i class="fas fa-search"></i></div>
                            <h3 class="text-xl font-semibold text-gray-500 mb-2">Aucun programme trouvé</h3>
                            <p class="text-gray-500 mb-6">Essayez de modifier vos critères de recherche</p>
                            <a href="{{ route('home') }}" class="bg-brand-red hover:bg-red-700 text-white py-2 px-6 rounded-lg font-semibold transition duration-300 inline-block">
                                Voir tous les programmes
                            </a>
                        </div>
                    </div>
                    @endforelse
                </div>
        
                <!-- Pagination -->
                <div class="flex justify-center mt-12">
                    {{ $programs->links('pagination::tailwind') }}
                </div>
            </div>
        </section>
        
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle filter removal
            const removeFilterButtons = document.querySelectorAll('.remove-filter');
            removeFilterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const filterName = this.getAttribute('data-filter');
                    const filterForm = document.getElementById('program-filter-form');
                    const filterInput = filterForm.querySelector(`[name="${filterName}"]`);
                    
                    if (filterInput) {
                        if (filterInput.tagName === 'SELECT') {
                            filterInput.value = '';
                        } else {
                            filterInput.value = '';
                        }
                        filterForm.submit();
                    }
                });
            });
        });
        </script>
        

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
       
     
        <!-- JavaScript for filters and menu toggle -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Mobile Menu Toggle
                const mobileMenuButton = document.getElementById('mobile-menu-button');
                const mobileMenu = document.getElementById('mobile-menu');
                
                if (mobileMenuButton && mobileMenu) {
                    mobileMenuButton.addEventListener('click', function() {
                        mobileMenu.classList.toggle('hidden');
                    });
                }

                // Apply filters
                const applyFiltersBtn = document.getElementById('apply-filters');
                if (applyFiltersBtn) {
                    applyFiltersBtn.addEventListener('click', function() {
                        applyFilters();
                    });
                }

                // Remove individual filters
                const removeFilterBtns = document.querySelectorAll('.remove-filter');
                removeFilterBtns.forEach(btn => {
                    btn.addEventListener('click', function() {
                        const filterType = this.getAttribute('data-filter');
                        removeFilter(filterType);
                    });
                });

                function applyFilters() {
                    const level = document.getElementById('level-filter').value;
                    const duration = document.getElementById('duration-filter').value;
                    const category = document.getElementById('category-filter').value;
                    const search = document.querySelector('input[name="search"]').value;
                    
                    // Build query string
                    let queryParams = new URLSearchParams(window.location.search);
                    
                    if (search) {
                        queryParams.set('search', search);
                    } else {
                        queryParams.delete('search');
                    }
                    
                    if (level) {
                        queryParams.set('level', level);
                    } else {
                        queryParams.delete('level');
                    }
                    
                    if (duration) {
                        queryParams.set('duration', duration);
                    } else {
                        queryParams.delete('duration');
                    }
                    
                    if (category) {
                        queryParams.set('category', category);
                    } else {
                        queryParams.delete('category');
                    }
                    
                    // Redirect with query params
                    window.location.href = '{{ route("home") }}' + (queryParams.toString() ? '?' + queryParams.toString() : '');
                }

                function removeFilter(filterType) {
                    let queryParams = new URLSearchParams(window.location.search);
                    queryParams.delete(filterType);
                    
                    // Redirect with updated query params
                    window.location.href = '{{ route("home") }}' + (queryParams.toString() ? '?' + queryParams.toString() : '');
                }
            });

        </script>
        
    </body>
@endsection
