<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymTracker - Programmes</title>
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
                    <span class="font-bold text-lg">GymTracker Admin</span>
                </div>
            </div>
            <div class="p-4">
                <div class="flex items-center space-x-3 mb-6">
                    <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Admin" class="w-10 h-10 rounded-full">
                    <div>
                        <p class="font-medium">Admin</p>
                        <p class="text-xs text-gray-400">Super Administrateur</p>
                    </div>
                </div>
                
                <nav>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded-lg text-gray-300 hover:bg-gray-800">
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
                            <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded-lg text-gray-300 hover:bg-gray-800">
                                <i class="fas fa-user-tie"></i>
                                <span>Entraîneurs</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded-lg bg-red-500 text-white">
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
                        <input type="text" class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent" placeholder="Rechercher un programme...">
                    </div>
                    <div class="flex items-center space-x-4">
                        <button class="relative p-1 text-gray-400 hover:text-gray-600 focus:outline-none">
                            <i class="fas fa-bell text-xl"></i>
                            <span class="absolute top-0 right-0 h-4 w-4 bg-red-500 rounded-full text-xs text-white flex items-center justify-center">5</span>
                        </button>
                    </div>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="flex-1 overflow-y-auto p-6 bg-gray-100">
                <div class="mb-8 flex justify-between items-center">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800">Gestion des Programmes</h1>
                        <p class="text-gray-600">Créez et gérez les programmes d'entraînement</p>
                    </div>
                    <button class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition duration-300">
                        <i class="fas fa-plus mr-2"></i>Nouveau Programme
                    </button>
                </div>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-gray-500 text-sm font-medium">Total Programmes</h3>
                        </div>
                        <div class="flex items-center">
                            <span class="text-3xl font-bold text-gray-800">24</span>
                            <div class="w-10 h-10 ml-auto bg-blue-500 text-white rounded-full flex items-center justify-center">
                                <i class="fas fa-dumbbell"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-gray-500 text-sm font-medium">Inscriptions ce mois</h3>
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2 py-1 rounded-full">+15%</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-3xl font-bold text-gray-800">87</span>
                            <div class="w-10 h-10 ml-auto bg-green-500 text-white rounded-full flex items-center justify-center">
                                <i class="fas fa-user-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-gray-500 text-sm font-medium">Programme le plus populaire</h3>
                        </div>
                        <div class="flex items-center">
                            <span class="text-xl font-bold text-gray-800">Musculation</span>
                            <div class="w-10 h-10 ml-auto bg-purple-500 text-white rounded-full flex items-center justify-center">
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-gray-500 text-sm font-medium">Revenus programmes</h3>
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2 py-1 rounded-full">+8%</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-3xl font-bold text-gray-800">3,250€</span>
                            <div class="w-10 h-10 ml-auto bg-red-500 text-white rounded-full flex items-center justify-center">
                                <i class="fas fa-euro-sign"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                    <!-- Program List -->
                    <div class="lg:col-span-2 bg-white rounded-lg shadow">
                        <div class="p-6 border-b border-gray-200 flex justify-between items-center">
                            <h2 class="text-lg font-semibold text-gray-800">Liste des programmes</h2>
                            <div>
                                <select class="px-4 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent">
                                    <option>Tous les types</option>
                                    <option>Musculation</option>
                                    <option>Cardio</option>
                                    <option>Yoga</option>
                                    <option>Pilates</option>
                                </select>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead>
                                        <tr>
                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Programme</th>
                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Catégorie</th>
                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Durée</th>
                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Prix</th>
                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="h-10 w-10 rounded-full bg-blue-500 flex items-center justify-center text-white">
                                                        <i class="fas fa-dumbbell"></i>
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">Force & Endurance</div>
                                                        <div class="text-xs text-gray-500">Par Jean Martin</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Musculation</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-500">8 semaines</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm font-medium">89,00 €</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <button class="text-blue-500 hover:text-blue-700 mr-3">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="text-red-500 hover:text-red-700">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="h-10 w-10 rounded-full bg-green-500 flex items-center justify-center text-white">
                                                        <i class="fas fa-running"></i>
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">30 Jours Cardio</div>
                                                        <div class="text-xs text-gray-500">Par Sophie Dubois</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Cardio</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-500">4 semaines</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm font-medium">59,00 €</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <button class="text-blue-500 hover:text-blue-700 mr-3">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="text-red-500 hover:text-red-700">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="h-10 w-10 rounded-full bg-purple-500 flex items-center justify-center text-white">
                                                        <i class="fas fa-spa"></i>
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">Yoga Débutant</div>
                                                        <div class="text-xs text-gray-500">Par Marie Leclerc</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">Yoga</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-500">6 semaines</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm font-medium">49,00 €</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <button class="text-blue-500 hover:text-blue-700 mr-3">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="text-red-500 hover:text-red-700">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="h-10 w-10 rounded-full bg-yellow-500 flex items-center justify-center text-white">
                                                        <i class="fas fa-fire-alt"></i>
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">HIIT Intensif</div>
                                                        <div class="text-xs text-gray-500">Par Paul Blanc</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">HIIT</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-500">4 semaines</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm font-medium">69,00 €</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <button class="text-blue-500 hover:text-blue-700 mr-3">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="text-red-500 hover:text-red-700">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-6 flex justify-between">
                                <a href="#" class="text-red-500 text-sm font-medium hover:text-red-600">Voir tous les programmes →</a>
                                <div class="flex space-x-2">
                                    <button class="px-3 py-1 border border-gray-300 rounded-md">1</button>
                                    <button class="px-3 py-1 border border-gray-300 rounded-md bg-red-500 text-white">2</button>
                                    <button class="px-3 py-1 border border-gray-300 rounded-md">3</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Program Stats -->
                    <div class="bg-white rounded-lg shadow">
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-lg font-semibold text-gray-800">Statistiques des programmes</h2>
                        </div>
                        <div class="p-6">
                            <div class="mb-6">
                                <h3 class="text-sm font-medium text-gray-500 mb-2">Répartition par catégorie</h3>
                                <div class="space-y-2">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm font-medium">Musculation</span>
                                            <span class="text-sm font-medium">35%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-blue-500 h-2 rounded-full" style="width: 35%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm font-medium">Cardio</span>
                                            <span class="text-sm font-medium">25%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-green-500 h-2 rounded-full" style="width: 25%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm font-medium">Yoga</span>
                                            <span class="text-sm font-medium">20%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-purple-500 h-2 rounded-full" style="width: 20%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm font-medium">HIIT</span>
                                            <span class="text-sm font-medium">15%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 15%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm font-medium">Pilates</span>
                                            <span class="text-sm font-medium">5%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-red-500 h-2 rounded-full" style="width: 5%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-6">
                                <h3 class="text-sm font-medium text-gray-500 mb-4">Inscriptions mensuelles</h3>
                                <div class="h-40 flex items-end space-x-2">
                                    <div class="flex-1 flex flex-col items-center">
                                        <div class="w-full bg-blue-500 rounded-t-sm" style="height: 25%"></div>
                                        <span class="text-xs mt-1">Jan</span>
                                    </div>
                                    <div class="flex-1 flex flex-col items-center">
                                        <div class="w-full bg-blue-500 rounded-t-sm" style="height: 40%"></div>
                                        <span class="text-xs mt-1">Fév</span>
                                    </div>
                                    <div class="flex-1 flex flex-col items-center">
                                        <div class="w-full bg-blue-500 rounded-t-sm" style="height: 60%"></div>
                                        <span class="text-xs mt-1">Mar</span>
                                    </div>
                                    <div class="flex-1 flex flex-col items-center">
                                        <div class="w-full bg-blue-500 rounded-t-sm" style="height: 45%"></div>
                                        <span class="text-xs mt-1">Avr</span>
                                    </div>
                                    <div class="flex-1 flex flex-col items-center">
                                        <div class="w-full bg-blue-500 rounded-t-sm" style="height: 50%"></div>
                                        <span class="text-xs mt-1">Mai</span>
                                    </div>
                                    <div class="flex-1 flex flex-col items-center">
                                        <div class="w-full bg-blue-500 rounded-t-sm" style="height: 75%"></div>
                                        <span class="text-xs mt-1">Jui</span>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h3 class="text-sm font-medium text-gray-500 mb-4">Meilleurs entraîneurs</h3>
                                <div class="space-y-4">
                                    <div class="flex items-center">
                                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Trainer" class="w-8 h-8 rounded-full">
                                        <div class="ml-3 flex-1">
                                            <p class="font-medium text-sm">Jean Martin</p>
                                            <p class="text-xs text-gray-500">8 programmes</p>
                                        </div>
                                        <div class="flex text-yellow-400 text-xs">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <img src="https://randomuser.me/api/portraits/women/12.jpg" alt="Trainer" class="w-8 h-8 rounded-full">
                                        <div class="ml-3 flex-1">
                                            <p class="font-medium text-sm">Marie Leclerc</p>
                                            <p class="text-xs text-gray-500">6 programmes</p>
                                        </div>
                                        <div class="flex text-yellow-400 text-xs">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Program Categories -->
                <div class="bg-white rounded-lg shadow">
                    <div class="p-6 border-b border-gray-200 flex justify-between items-center">
                        <h2 class="text-lg font-semibold text-gray-800">Catégories de programmes</h2>
                        <button class="px-4 py-2 bg-red-500 text-white rounded-lg text-sm hover:bg-red-600 transition duration-300">
                            <i class="fas fa-plus mr-2"></i>Nouvelle catégorie
                        </button>
                    </div>
                    <div class="p-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-4">
                            <div class="bg-gray-50 rounded-lg p-4 text-center">
                                <div class="h-12 w-12 bg-blue-500 mx-auto rounded-full flex items-center justify-center text-white mb-3">
                                    <i class="fas fa-dumbbell"></i>
                                </div>
                                <h3 class="font-medium text-gray-800">Musculation</h3>
                                <p class="text-sm text-gray-500 mt-1">8 programmes</p>
                            </div>
                            
                            <div class="bg-gray-50 rounded-lg p-4 text-center">
                                <div class="h-12 w-12 bg-green-500 mx-auto rounded-full flex items-center justify-center text-white mb-3">
                                    <i class="fas fa-running"></i>
                                </div>
                                <h3 class="font-medium text-gray-800">Cardio</h3>
                                <p class="text-sm text-gray-500 mt-1">6 programmes</p>
                            </div>
                            
                            <div class="bg-gray-50 rounded-lg p-4 text-center">
                                <div class="h-12 w-12 bg-purple-500 mx-auto rounded-full flex items-center justify-center text-white mb-3">
                                    <i class="fas fa-spa"></i>
                                </div>
                                <h3 class="font-medium text-gray-800">Yoga</h3>