<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymTracker - Trainer Portal</title>
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
                    <span class="font-bold text-lg">GymTracker Trainer</span>
                </div>
            </div>
            <div class="p-4">
                <div class="flex items-center space-x-3 mb-6">
                    <img src="https://randomuser.me/api/portraits/men/23.jpg" alt="Trainer" class="w-10 h-10 rounded-full">
                    <div>
                        <p class="font-medium">Jean Martin</p>
                        <p class="text-xs text-gray-400">Musculation Trainer</p>
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
                                <i class="fas fa-users"></i>
                                <span>Mes clients</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded-lg text-gray-300 hover:bg-gray-800">
                                <i class="fas fa-calendar-alt"></i>
                                <span>Mes cours</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded-lg text-gray-300 hover:bg-gray-800">
                                <i class="fas fa-clipboard-list"></i>
                                <span>Suivi de progrès</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded-lg text-gray-300 hover:bg-gray-800">
                                <i class="fas fa-chart-line"></i>
                                <span>Statistiques</span>
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
                        <input type="text" class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent" placeholder="Rechercher un client...">
                    </div>
                    <div class="flex items-center space-x-4">
                        <button class="relative p-1 text-gray-400 hover:text-gray-600 focus:outline-none">
                            <i class="fas fa-bell text-xl"></i>
                            <span class="absolute top-0 right-0 h-4 w-4 bg-red-500 rounded-full text-xs text-white flex items-center justify-center">3</span>
                        </button>
                    </div>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="flex-1 overflow-y-auto p-6 bg-gray-100">
                <div class="mb-8">
                    <h1 class="text-2xl font-bold text-gray-800">Tableau de bord Entraîneur</h1>
                    <p class="text-gray-600">Suivez les progrès et la présence de vos clients</p>
                </div>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-gray-500 text-sm font-medium">Mes clients actifs</h3>
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2 py-1 rounded-full">+3 ce mois</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-3xl font-bold text-gray-800">32</span>
                            <div class="w-10 h-10 ml-auto bg-blue-500 text-white rounded-full flex items-center justify-center">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-gray-500 text-sm font-medium">Taux de présence</h3>
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2 py-1 rounded-full">+2%</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-3xl font-bold text-gray-800">87%</span>
                            <div class="w-10 h-10 ml-auto bg-purple-500 text-white rounded-full flex items-center justify-center">
                                <i class="fas fa-check-circle"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-gray-500 text-sm font-medium">Cours aujourd'hui</h3>
                        </div>
                        <div class="flex items-center">
                            <span class="text-3xl font-bold text-gray-800">3</span>
                            <div class="w-10 h-10 ml-auto bg-green-500 text-white rounded-full flex items-center justify-center">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-gray-500 text-sm font-medium">Avg. progrès client</h3>
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2 py-1 rounded-full">+8%</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-3xl font-bold text-gray-800">+12%</span>
                            <div class="w-10 h-10 ml-auto bg-red-500 text-white rounded-full flex items-center justify-center">
                                <i class="fas fa-chart-line"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                    <!-- Client Progress Tracking -->
                    <div class="lg:col-span-2 bg-white rounded-lg shadow">
                        <div class="p-6 border-b border-gray-200 flex justify-between items-center">
                            <h2 class="text-lg font-semibold text-gray-800">Suivi de progrès des clients</h2>
                            <div>
                                <select class="px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-red-500">
                                    <option>Ce mois</option>
                                    <option>Dernier mois</option>
                                    <option>3 derniers mois</option>
                                </select>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead>
                                        <tr>
                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Client</th>
                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Programme</th>
                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Progrès</th>
                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Présence</th>
                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <img class="h-8 w-8 rounded-full" src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">Thomas Dupont</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-500">Perte de poids</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                                    <div class="bg-green-500 h-2.5 rounded-full" style="width: 68%"></div>
                                                </div>
                                                <span class="text-xs text-gray-500">68%</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">90%</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <button class="text-blue-500 hover:text-blue-700 mr-3">
                                                    <i class="fas fa-chart-bar"></i>
                                                </button>
                                                <button class="text-green-500 hover:text-green-700">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <img class="h-8 w-8 rounded-full" src="https://randomuser.me/api/portraits/women/12.jpg" alt="">
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">Julie Martin</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-500">Musculation</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                                    <div class="bg-green-500 h-2.5 rounded-full" style="width: 85%"></div>
                                                </div>
                                                <span class="text-xs text-gray-500">85%</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">100%</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <button class="text-blue-500 hover:text-blue-700 mr-3">
                                                    <i class="fas fa-chart-bar"></i>
                                                </button>
                                                <button class="text-green-500 hover:text-green-700">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <img class="h-8 w-8 rounded-full" src="https://randomuser.me/api/portraits/men/67.jpg" alt="">
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">Pierre Dubois</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-500">Remise en forme</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                                    <div class="bg-yellow-500 h-2.5 rounded-full" style="width: 45%"></div>
                                                </div>
                                                <span class="text-xs text-gray-500">45%</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">75%</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <button class="text-blue-500 hover:text-blue-700 mr-3">
                                                    <i class="fas fa-chart-bar"></i>
                                                </button>
                                                <button class="text-green-500 hover:text-green-700">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-6">
                                <a href="#" class="text-red-500 text-sm font-medium hover:text-red-600">Voir tous les clients →</a>
                            </div>
                        </div>
                    </div>

                    <!-- Client Goals -->
                    <div class="bg-white rounded-lg shadow">
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-lg font-semibold text-gray-800">Objectifs à atteindre</h2>
                        </div>
                        <div class="p-6">
                            <div class="space-y-6">
                                <div class="flex items-center">
                                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client" class="w-10 h-10 rounded-full">
                                    <div class="ml-4 flex-1">
                                        <h3 class="font-medium text-gray-800">Thomas Dupont</h3>
                                        <p class="text-sm text-gray-500">Perdre 5kg • Échéance: 15/04/2025</p>
                                        <div class="w-full bg-gray-200 rounded-full h-2.5 mt-2">
                                            <div class="bg-green-500 h-2.5 rounded-full" style="width: 68%"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center">
                                    <img src="https://randomuser.me/api/portraits/women/12.jpg" alt="Client" class="w-10 h-10 rounded-full">
                                    <div class="ml-4 flex-1">
                                        <h3 class="font-medium text-gray-800">Julie Martin</h3>
                                        <p class="text-sm text-gray-500">+15% masse musculaire • Échéance: 30/05/2025</p>
                                        <div class="w-full bg-gray-200 rounded-full h-2.5 mt-2">
                                            <div class="bg-green-500 h-2.5 rounded-full" style="width: 85%"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center">
                                    <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Client" class="w-10 h-10 rounded-full">
                                    <div class="ml-4 flex-1">
                                        <h3 class="font-medium text-gray-800">Pierre Dubois</h3>
                                        <p class="text-sm text-gray-500">Améliorer endurance • Échéance: 10/04/2025</p>
                                        <div class="w-full bg-gray-200 rounded-full h-2.5 mt-2">
                                            <div class="bg-yellow-500 h-2.5 rounded-full" style="width: 45%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6">
                                <button class="px-4 py-2 bg-red-500 text-white rounded-lg text-sm hover:bg-red-600 transition duration-300 w-full">
                                    <i class="fas fa-plus mr-2"></i>Ajouter un objectif
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Attendance & Class Schedule -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Attendance Tracking -->
                    <div class="bg-white rounded-lg shadow">
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-lg font-semibold text-gray-800">Suivi de présence</h2>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="font-medium text-gray-700">Musculation - 09:00</h3>
                                <p class="text-sm text-gray-500">12 participants attendus</p>
                            </div>
                            <div class="space-y-3">
                                <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client" class="w-8 h-8 rounded-full">
                                    <div class="ml-3 flex-1">
                                        <p class="font-medium text-gray-800">Thomas Dupont</p>
                                    </div>
                                    <div class="flex space-x-2">
                                        <button class="px-3 py-1 bg-green-500 text-white rounded-lg text-xs hover:bg-green-600">
                                            <i class="fas fa-check mr-1"></i>Présent
                                        </button>
                                        <button class="px-3 py-1 bg-gray-300 text-gray-700 rounded-lg text-xs hover:bg-gray-400">
                                            <i class="fas fa-times mr-1"></i>Absent
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                                    <img src="https://randomuser.me/api/portraits/women/12.jpg" alt="Client" class="w-8 h-8 rounded-full">
                                    <div class="ml-3 flex-1">
                                        <p class="font-medium text-gray-800">Julie Martin</p>
                                    </div>
                                    <div class="flex space-x-2">
                                        <button class="px-3 py-1 bg-green-500 text-white rounded-lg text-xs hover:bg-green-600">
                                            <i class="fas fa-check mr-1"></i>Présent
                                        </button>
                                        <button class="px-3 py-1 bg-gray-300 text-gray-700 rounded-lg text-xs hover:bg-gray-400">
                                            <i class="fas fa-times mr-1"></i>Absent
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                                    <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Client" class="w-8 h-8 rounded-full">
                                    <div class="ml-3 flex-1">
                                        <p class="font-medium text-gray-800">Pierre Dubois</p>
                                    </div>
                                    <div class="flex space-x-2">
                                        <button class="px-3 py-1 bg-gray-300 text-gray-700 rounded-lg text-xs hover:bg-gray-400">
                                            <i class="fas fa-check mr-1"></i>Présent
                                        </button>
                                        <button class="px-3 py-1 bg-red-500 text-white rounded-lg text-xs hover:bg-red-600">
                                            <i class="fas fa-times mr-1"></i>Absent
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-6 flex justify-end">
                                <button class="px-4 py-2 bg-red-500 text-white rounded-lg text-sm hover:bg-red-600 transition duration-300">
                                    Sauvegarder la présence
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Client Progress Metrics -->
                    <div class="bg-white rounded-lg shadow">
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-lg font-semibold text-gray-800">Métriques de progrès</h2>
                        </div>
                        <div class="p-6">
                            <div class="flex mb-4">
                                <select class="px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-red-500">
                                    <option>Thomas Dupont</option>
                                    <option>Julie Martin</option>
                                    <option>Pierre Dubois</option>
                                </select>
                            </div>
                            
                            <div class="space-y-6">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <h3 class="font-medium text-gray-700">Poids (kg)</h3>
                                        <p class="text-sm text-green-500">-3.2 kg</p>
                                    </div>
                                    <div class="h-10 bg-gray-100 rounded-lg overflow-hidden">
                                        <div class="flex items-center h-full">
                                            <div class="h-full bg-blue-500" style="width: 85%"></div>
                                            <div class="h-full bg-green-500" style="width: 15%"></div>
                                        </div>
                                    </div>
                                    <div class="flex justify-between text-xs text-gray-500 mt-1">
                                        <span>Début: 82kg</span>
                                        <span>Actuel: 78.8kg</span>
                                        <span>Objectif: 77kg</span>
                                    </div>
                                </div>
                                
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <h3 class="font-medium text-gray-700">% de graisse corporelle</h3>
                                        <p class="text-sm text-green-500">-2.4%</p>
                                    </div>
                                    <div class="h-10 bg-gray-100 rounded-lg overflow-hidden">
                                        <div class="flex items-center h-full">
                                            <div class="h-full bg-blue-500" style="width: 70%"></div>
                                            <div class="h-full bg-green-500" style="width: 30%"></div>
                                        </div>
                                    </div>
                                    <div class="flex justify-between text-xs text-gray-500 mt-1">
                                        <span>Début: 22%</span>
                                        <span>Actuel: 19.6%</span>
                                        <span>Objectif: 18%</span>
                                    </div>
                                </div>
                                
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <h3 class="font-medium text-gray-700">Tours de taille (cm)</h3>
                                        <p class="text-sm text-green-500">-4.5cm</p>
                                    </div>
                                    <div class="h-10 bg-gray-100 rounded-lg overflow-hidden">
                                        <div class="flex items-center h-full">
                                            <div class="h-full bg-blue-500" style="width: 90%"></div>
                                            <div class="h-full bg-green-500" style="width: 10%"></div>
                                        </div>
                                    </div>
                                    <div class="flex justify-between text-xs text-gray-500 mt-1">
                                        <span>Début: 94cm</span>
                                        <span>Actuel: 89.5cm</span>
                                        <span>Objectif: 88cm</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-6">
                                <button class="px-4 py-2 bg-red-500 text-white rounded-lg text-sm hover:bg-red-600 transition duration-300 w-full">
                                    <i class="fas fa-plus mr-2"></i>Ajouter une mesure