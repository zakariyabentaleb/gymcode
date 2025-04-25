<!-- Navigation -->
<nav class="bg-brand-dark text-white shadow-lg fixed w-full z-50">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <div class="flex items-center space-x-2">
                <i class="fas fa-dumbbell text-brand-red text-2xl"></i>
                <span class="font-bold text-xl tracking-wider">GYM<span class="text-brand-red">TRACKER</span></span>
            </div>
            <div class="hidden md:flex items-center space-x-10">
                <a href="{{ route('homee') }}" class="nav-link {{ request()->routeIs('homee') ? 'text-brand-red' : 'hover:text-brand-red transition duration-300' }} font-medium">Accueil</a>
                <a href="{{ route('programmes') }}" class="nav-link {{ request()->routeIs('programmes') ? 'text-brand-red' : 'hover:text-brand-red transition duration-300' }} font-medium">Programmes</a>
                <a href="{{ route('entraineur') }}" class="nav-link {{ request()->routeIs('entraineur') ? 'text-brand-red' : 'hover:text-brand-red transition duration-300' }} font-medium">Entraîneurs</a>
                <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'text-brand-red' : 'hover:text-brand-red transition duration-300' }} font-medium">Contact</a>
                @auth
                <a href="{{ route('reservation') }}" class="nav-link {{ request()->routeIs('reservation') ? 'text-brand-red' : 'hover:text-brand-red transition duration-300' }} font-medium">Mes Réservations</a>
                <a href="{{ route('payment.show') }}" class="nav-link {{ request()->routeIs('payment.show') ? 'text-brand-red' : 'hover:text-brand-red transition duration-300' }} font-medium">Mes Payments</a>

                <a href="{{ route('profile.show') }}" class="nav-link {{ request()->routeIs('profile.show') ? 'text-brand-red' : 'hover:text-brand-red transition duration-300' }} font-medium">Profil</a>
                
            @else
                <a href="{{ route('login') }}" class="bg-brand-red hover:bg-red-700 transition duration-300 py-2 px-6 rounded-lg font-semibold">Se connecter</a>
            @endauth
            </div>
            <div class="md:hidden">
                <button class="text-white focus:outline-none" id="mobile-menu-button">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
        <!-- Mobile Menu (Hidden by default) -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="flex flex-col space-y-4 py-4">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-brand-red' : 'text-white' }} font-medium">Accueil</a>
                <a href="{{ route('programmes') }}" class="{{ request()->routeIs('programmes') ? 'text-brand-red' : 'text-white' }} font-medium">Programmes</a>
                <a href="{{ route('entraineur') }}" class="{{ request()->routeIs('entraineur') ? 'text-brand-red' : 'text-white' }} font-medium">Entraîneurs</a>
                <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-brand-red' : 'text-white' }} font-medium">Contact</a>
                @auth
                <a href="{{ route('reservation') }}" class="nav-link {{ request()->routeIs('reservation') ? 'text-brand-red' : 'hover:text-brand-red transition duration-300' }} font-medium">Mes Réservations</a>
                <a href="{{ route('profile.show') }}" class="nav-link {{ request()->routeIs('profile.show') ? 'text-brand-red' : 'hover:text-brand-red transition duration-300' }} font-medium">Mon Profil</a>
                <a href="{{ route('profile.edit') }}" class="nav-link {{ request()->routeIs('profile.edit') ? 'text-brand-red' : 'hover:text-brand-red transition duration-300' }} font-medium">Modifier Profil</a>

                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="bg-brand-red hover:bg-red-700 transition duration-300 py-2 px-6 rounded-lg font-semibold">Déconnexion</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="bg-brand-red hover:bg-red-700 transition duration-300 py-2 px-6 rounded-lg font-semibold">Se connecter</a>
            @endauth
            </div>
        </div>
       
    </div>
</nav>

@push('scripts')
<script>
    // Mobile menu toggle functionality
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });
</script>
@endpush