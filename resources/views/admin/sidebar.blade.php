<div class="bg-black text-white w-64 flex-shrink-0 hidden md:block">
    <div class="flex items-center justify-center h-16 border-b border-gray-700">
        <div class="flex items-center space-x-2">
            <i class="fas fa-dumbbell text-red-500 text-xl"></i>
            <span class="font-bold text-lg">GymTracker Admin</span>
        </div>
    </div>
    <div class="p-4">
        <div class="flex items-center space-x-3 mb-6">
            <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Admin" class="w-10 h-10 rounded-full">
            <div>
                <p class="font-medium">{{ Auth::user()->full_name }}</p>
                <p class="text-xs text-gray-400">Super Administrateur</p>
            </div>
        </div>
        
        <nav>
            <ul class="space-y-2">
                <li>
                    <a href="{{route('admin-dashboard')}}" class="flex items-center space-x-3 px-3 py-2 rounded-lg {{ request()->routeIs('admin-dashboard') ? 'bg-red-500 text-white' : 'text-gray-300 hover:bg-gray-800' }}">
                        <i class="fas fa-th-large"></i>
                        <span>Tableau de bord</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded-lg text-gray-300 hover:bg-gray-800">
                        <i class="fas fa-users"></i>
                        <span>Membres</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('trainer.show')}}" class="flex items-center space-x-3 px-3 py-2 rounded-lg {{ request()->routeIs('trainer.*') ? 'bg-red-500 text-white' : 'text-gray-300 hover:bg-gray-800' }}">
                        <i class="fas fa-user-tie"></i>
                        <span>Entraîneurs</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('programs.index')}}" class="flex items-center space-x-3 px-3 py-2 rounded-lg {{ request()->routeIs('programs.*') ? 'bg-red-500 text-white' : 'text-gray-300 hover:bg-gray-800' }}">
                        <i class="fas fa-dumbbell"></i>
                        <span>Programmes</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded-lg text-gray-300 hover:bg-gray-800">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Réservations</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded-lg text-gray-300 hover:bg-gray-800">
                        <i class="fas fa-credit-card"></i>
                        <span>Paiements</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded-lg text-gray-300 hover:bg-gray-800">
                        <i class="fas fa-cog"></i>
                        <span>Paramètres</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="absolute bottom-0 w-64 p-4 border-t border-gray-700">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="flex items-center space-x-3 px-3 py-2 rounded-lg text-gray-300 hover:bg-gray-800">
                <i class="fas fa-sign-out-alt"></i>
                <span>Déconnexion</span>
            </button>
        </form>
    </div>
</div>