<!-- Footer -->
<footer class="bg-brand-dark text-white py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <div class="flex items-center space-x-2 mb-6">
                    <i class="fas fa-dumbbell text-brand-red text-2xl"></i>
                    <span class="font-bold text-xl tracking-wider">GYM<span class="text-brand-red">TRACKER</span></span>
                </div>
                <p class="text-gray-400">Transformez votre expérience fitness avec notre plateforme innovante de suivi d'entraînement et de réservation.</p>
                <div class="mt-6">
                    <a href="#" class="bg-brand-red text-white px-4 py-2 rounded-lg font-medium">Télécharger l'App</a>
                </div>
            </div>

            <div>
                <h3 class="font-semibold text-lg mb-6 text-brand-red">Liens rapides</h3>
                <ul class="space-y-3 text-gray-400">
                    <li><a href="{{ route('home') }}" class="hover:text-brand-red transition duration-300 flex items-center"><i class="fas fa-chevron-right mr-2 text-xs text-brand-red"></i> Accueil</a></li>
                    <li><a href="{{ route('programmes') }}" class="hover:text-brand-red transition duration-300 flex items-center"><i class="fas fa-chevron-right mr-2 text-xs text-brand-red"></i> Programmes</a></li>
                    <li><a href="{{ route('entraineur') }}" class="hover:text-brand-red transition duration-300 flex items-center"><i class="fas fa-chevron-right mr-2 text-xs text-brand-red"></i> Entraîneurs</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-brand-red transition duration-300 flex items-center"><i class="fas fa-chevron-right mr-2 text-xs text-brand-red"></i> Contact</a></li>
                    
                </ul>
            </div>

            <div>
                <h3 class="font-semibold text-lg mb-6 text-brand-red">Contact</h3>
                <ul class="space-y-3 text-gray-400">
                    <li class="flex items-start space-x-3">
                        <i class="fas fa-map-marker-alt mt-1 text-brand-red"></i>
                        <span>123 Rue du Fitness, 75001 Paris, France</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-phone text-brand-red"></i>
                        <span>+33 1 23 45 67 89</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-envelope text-brand-red"></i>
                        <span>contact@gymtracker.com</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-clock text-brand-red"></i>
                        <span>Lun-Ven: 8h-20h | Sam: 9h-18h</span>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold text-lg mb-6 text-brand-red">Newsletter</h3>
                <p class="text-gray-400 mb-4">Inscrivez-vous pour recevoir nos actualités et offres spéciales.</p>
                <form action="" method="POST" class="flex mb-4">
                    @csrf
                    <input type="email" name="email" placeholder="Votre email" class="bg-gray-800 px-4 py-2 rounded-l-lg w-full focus:outline-none focus:ring-2 focus:ring-brand-red">
                    <button type="submit" class="bg-brand-red px-4 py-2 rounded-r-lg">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
                <h3 class="font-semibold text-lg mb-4 text-brand-red">Suivez-nous</h3>
                <div class="flex space-x-3">
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-brand-red transition duration-300">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-brand-red transition duration-300">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-brand-red transition duration-300">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-brand-red transition duration-300">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
            <p>&copy; {{ date('Y') }} GymTracker. Tous droits réservés. Développé par <span class="text-brand-red font-medium">ZAKARIYA BENTALEB</span></p>
        </div>
    </div>
</footer>