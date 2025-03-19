<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymTracker - Tableau de Bord</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="bg-black text-white w-64 flex-shrink-0 hidden md:block">
            <div class="flex items-center justify-center h-16 border-b border-gray-700">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-dumbbell text-red-500 text-xl"></i>
                    <span class="font-bold text-lg">GymTracker</span>
                </div>
            </div>
            <div class="p-4">
                <div class="flex items-center space-x-3 mb-6">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Profile" class="w-10 h-10 rounded-full">
                    <div>
                        <p class="font-medium">Thomas Dupont</p>
                        <p class="text-xs text-gray-400">Membre Premium</p>
                    </div>
                </div>
                
                <nav>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded-lg bg-red-500 text-white">
                                <i class="fas fa-th-large"></i>
                                <span>Tableau de bord</span>
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
                                <i class="fas fa-users"></i>
                                <span>Entraîneurs</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded-lg text-gray-300 hover:bg-gray-800">
                                <i class="fas fa-dumbbell"></i>
                                <span>Programmes</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded-lg text-gray-300 hover:bg-gray-800">
                                <i class="fas fa-chart-line"></i>
                                <span>Progrès</span>
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
                <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded-lg text-gray-300 hover:bg-gray-800">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Déconnexion</span>
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Navigation -->
            <header class="bg-white shadow-sm z-10">
                <div class="flex items-center justify-between h-16 px-6">
                    <div class="flex items-center md:hidden">
                        <button class="text-gray-500 focus:outline-none">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    <div class="relative w-64 md:w-96">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <i class="fas fa-search text-gray-400"></i>
                        </span>
                        <input type="text" class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent" placeholder="Rechercher...">
                    </div>
                    <div class="flex items-center space-x-4">
                        <button class="relative p-1 text-gray-400 hover:text-gray-600 focus:outline-none">
                            <i class="fas fa-bell text-xl"></i>
                            <span class="absolute top-0 right-0 h-4 w-4 bg-red-500 rounded-full text-xs text-white flex items-center justify-center">3</span>
                        </button>
                        <button class="relative p-1 text-gray-400 hover:text-gray-600 focus:outline-none">
                            <i class="fas fa-envelope text-xl"></i>
                            <span class="absolute top-0 right-0 h-4 w-4 bg-red-500 rounded-full text-xs text-white flex items-center justify-center">2</span>
                        </button>
                    </div>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="flex-1 overflow-y-auto p-6 bg-gray-100">
                <div class="mb-8">
                    <h1 class="text-2xl font-bold text-gray-800">Bonjour, Thomas 👋</h1>
                    <p class="text-gray-600">Voici un aperçu de votre activité fitness</p>
                </div>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-gray-500 text-sm font-medium">Séances ce mois</h3>
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2 py-1 rounded-full">+12%</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-3xl font-bold text-gray-800">12</span>
                            <div class="w-10 h-10 ml-auto bg-red-500 text-white rounded-full flex items-center justify-center">
                                <i class="fas fa-dumbbell"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-gray-500 text-sm font-medium">Prochaine séance</h3>
                        </div>
                        <div class="flex items-center">
                            <div>
                                <span class="text-lg font-bold text-gray-800">Demain, 18:00</span>
                                <p class="text-sm text-gray-500">Musculation avec Jean</p>
                            </div>
                            <div class="w-10 h-10 ml-auto bg-blue-500 text-white rounded-full flex items-center justify-center">
                                <i class="fas fa-calendar"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-gray-500 text-sm font-medium">Calories brûlées</h3>
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2 py-1 rounded-full">+5%</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-3xl font-bold text-gray-800">4,320</span>
                            <div class="w-10 h-10 ml-auto bg-yellow-500 text-white rounded-full flex items-center justify-center">
                                <i class="fas fa-fire"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-gray-500 text-sm font-medium">Poids actuel</h3>
                            <span class="bg-red-100 text-red-800 text-xs font-medium px-2 py-1 rounded-full">-2%</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-3xl font-bold text-gray-800">78 kg</span>
                            <div class="w-10 h-10 ml-auto bg-purple-500 text-white rounded-full flex items-center justify-center">
                                <i class="fas fa-weight"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Upcoming Sessions -->
                    <div class="lg:col-span-2 bg-white rounded-lg shadow">
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-lg font-semibold text-gray-800">Séances à venir</h2>
                        </div>
                        <div class="p-6">
                            <div class="space-y-6">
                                <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                                    <div class="w-12 h-12 bg-red-500 text-white rounded-full flex items-center justify-center">
                                        <i class="fas fa-dumbbell"></i>
                                    </div>
                                    <div class="ml-4 flex-1">
                                        <h3 class="font-medium text-gray-800">Musculation</h3>
                                        <p class="text-sm text-gray-500">Demain à 18:00 • Jean Martin</p>
                                    </div>
                                    <div>
                                        <button class="px-3 py-1 bg-red-500 text-white rounded-lg text-sm hover:bg-red-600 transition duration-300">Annuler</button>
                                    </div>
                                </div>

                                <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                                    <div class="w-12 h-12 bg-blue-500 text-white rounded-full flex items-center justify-center">
                                        <i class="fas fa-running"></i>
                                    </div>
                                    <div class="ml-4 flex-1">
                                        <h3 class="font-medium text-gray-800">Cardio</h3>
                                        <p class="text-sm text-gray-500">05/03 à 10:00 • Sophie Dubois</p>
                                    </div>
                                    <div>
                                        <button class="px-3 py-1 bg-red-500 text-white rounded-lg text-sm hover:bg-red-600 transition duration-300">Annuler</button>
                                    </div>
                                </div>

                                <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                                    <div class="w-12 h-12 bg-green-500 text-white rounded-full flex items-center justify-center">
                                        <i class="fas fa-yoga"></i>
                                    </div>
                                    <div class="ml-4 flex-1">
                                        <h3 class="font-medium text-gray-800">Yoga</h3>
                                        <p class="text-sm text-gray-500">08/03 à 17:30 • Marie Leclerc</p>
                                    </div>
                                    <div>
                                        <button class="px-3 py-1 bg-red-500 text-white rounded-lg text-sm hover:bg-red-600 transition duration-300">Annuler</button>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6">
                                <a href="#" class="text-red-500 text-sm font-medium hover:text-red-600">Voir toutes les réservations →</a>
                            </div>
                        </div>
                    </div>

                    <!-- Trainers -->
                    <div class="bg-white rounded-lg shadow">
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-lg font-semibold text-gray-800">Vos entraîneurs</h2>
                        </div>
                        <div class="p-6">
                            <div class="space-y-6">
                                <div class="flex items-center">
                                    <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="Trainer" class="w-12 h-12 rounded-full">
                                    <div class="ml-4">
                                        <h3 class="font-medium text-gray-800">Jean Martin
                                        </h3>
                                        <p class="text-sm text-gray-500">Musculation, 5 ans d'expérience</p>
                                    </div>
                                    <div class="ml-auto">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded-lg text-sm hover:bg-red-600 transition duration-300">Contacter</button>
                                    </div>
                                </div>

                                <div class="flex items-center">
                                    <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Trainer" class="w-12 h-12 rounded-full">
                                    <div class="ml-4">
                                        <h3 class="font-medium text-gray-800">Sophie Dubois</h3>
                                        <p class="text-sm text-gray-500">Cardio, 7 ans d'expérience</p>
                                    </div>
                                    <div class="ml-auto">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded-lg text-sm hover:bg-red-600 transition duration-300">Contacter</button>
                                    </div>
                                </div>

                                <div class="flex items-center">
                                    <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Trainer" class="w-12 h-12 rounded-full">
                                    <div class="ml-4">
                                        <h3 class="font-medium text-gray-800">Marie Leclerc</h3>
                                        <p class="text-sm text-gray-500">Yoga, 4 ans d'expérience</p>
                                    </div>
                                    <div class="ml-auto">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded-lg text-sm hover:bg-red-600 transition duration-300">Contacter</button>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6">
                                <a href="#" class="text-red-500 text-sm font-medium hover:text-red-600">Découvrir tous les entraîneurs →</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fitness Progress Chart -->
                <div class="mt-6 bg-white rounded-lg shadow">
                    <div class="p-6 border-b border-gray-200">
                        <h2 class="text-lg font-semibold text-gray-800">Suivi de progrès</h2>
                    </div>
                    <div class="p-6">
                        <!-- Placeholder for chart (would use JS libraries like Chart.js in actual implementation) -->
                        <div class="h-64 bg-gray-50 rounded-lg flex items-center justify-center">
                            <div class="text-center">
                                <div class="text-gray-400 mb-2"><i class="fas fa-chart-line text-4xl"></i></div>
                                <p class="text-gray-500">Graphique de progression</p>
                            </div>
                        </div>
                        <div class="mt-4 grid grid-cols-3 gap-4">
                            <div class="bg-gray-50 p-4 rounded-lg text-center">
                                <p class="text-gray-500 text-sm">Poids</p>
                                <p class="font-bold text-lg">78 kg</p>
                                <p class="text-red-500 text-xs">-2kg ce mois</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg text-center">
                                <p class="text-gray-500 text-sm">IMC</p>
                                <p class="font-bold text-lg">24.1</p>
                                <p class="text-green-500 text-xs">Normal</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg text-center">
                                <p class="text-gray-500 text-sm">Taux de graisse</p>
                                <p class="font-bold text-lg">18%</p>
                                <p class="text-red-500 text-xs">-0.5% ce mois</p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>