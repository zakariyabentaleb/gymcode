<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymTracker - Administration</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex h-screen">
        <!-- Sidebar -->
        @include('admin.sidebar')

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
                   
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="flex-1 overflow-y-auto p-6 bg-gray-100">
                <div class="mb-8">
                    <h1 class="text-2xl font-bold text-gray-800">Tableau de bord Administrateur</h1>
                    <p class="text-gray-600">Gérez votre club de sport efficacement</p>
                </div>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-gray-500 text-sm font-medium">Total Membres</h3>
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2 py-1 rounded-full">+8%</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-3xl font-bold text-gray-800">248</span>
                            <div class="w-10 h-10 ml-auto bg-blue-500 text-white rounded-full flex items-center justify-center">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-gray-500 text-sm font-medium">Total Entraîneurs</h3>
                        </div>
                        <div class="flex items-center">
                            <span class="text-3xl font-bold text-gray-800">12</span>
                            <div class="w-10 h-10 ml-auto bg-purple-500 text-white rounded-full flex items-center justify-center">
                                <i class="fas fa-user-tie"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-gray-500 text-sm font-medium">Réservations du jour</h3>
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2 py-1 rounded-full">+12%</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-3xl font-bold text-gray-800">36</span>
                            <div class="w-10 h-10 ml-auto bg-green-500 text-white rounded-full flex items-center justify-center">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-gray-500 text-sm font-medium">Revenus mensuels</h3>
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2 py-1 rounded-full">+5%</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-3xl font-bold text-gray-800">7,580€</span>
                            <div class="w-10 h-10 ml-auto bg-red-500 text-white rounded-full flex items-center justify-center">
                                <i class="fas fa-euro-sign"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                    <!-- Member Management -->
                    <div class="lg:col-span-2 bg-white rounded-lg shadow">
                        <div class="p-6 border-b border-gray-200 flex justify-between items-center">
                            <h2 class="text-lg font-semibold text-gray-800">Gestion des membres</h2>
                            <button class="px-4 py-2 bg-red-500 text-white rounded-lg text-sm hover:bg-red-600 transition duration-300">
                                <i class="fas fa-plus mr-2"></i>Ajouter
                            </button>
                        </div>
                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead>
                                        <tr>
                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
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
                                                <div class="text-sm text-gray-500">thomas.dupont@example.com</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Actif</span>
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
                                                    <img class="h-8 w-8 rounded-full" src="https://randomuser.me/api/portraits/women/12.jpg" alt="">
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">Julie Martin</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-500">julie.martin@example.com</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Actif</span>
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
                                                    <img class="h-8 w-8 rounded-full" src="https://randomuser.me/api/portraits/men/67.jpg" alt="">
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">Pierre Dubois</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-500">pierre.dubois@example.com</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">En attente</span>
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
                            <div class="mt-6">
                                <a href="#" class="text-red-500 text-sm font-medium hover:text-red-600">Voir tous les membres →</a>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Payments -->
                    <div class="bg-white rounded-lg shadow">
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-lg font-semibold text-gray-800">Paiements récents</h2>
                        </div>
                        <div class="p-6">
                            <div class="space-y-6">
                                <div class="flex items-center">
                                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Member" class="w-10 h-10 rounded-full">
                                    <div class="ml-4 flex-1">
                                        <h3 class="font-medium text-gray-800">Thomas Dupont</h3>
                                        <p class="text-sm text-gray-500">Abonnement Premium • 01/03/2025</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="font-bold text-gray-800">99,00 €</p>
                                        <p class="text-xs text-green-500">Payé</p>
                                    </div>
                                </div>

                                <div class="flex items-center">
                                    <img src="https://randomuser.me/api/portraits/women/12.jpg" alt="Member" class="w-10 h-10 rounded-full">
                                    <div class="ml-4 flex-1">
                                        <h3 class="font-medium text-gray-800">Julie Martin</h3>
                                        <p class="text-sm text-gray-500">Séance privée • 28/02/2025</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="font-bold text-gray-800">45,00 €</p>
                                        <p class="text-xs text-green-500">Payé</p>
                                    </div>
                                </div>

                                <div class="flex items-center">
                                    <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Member" class="w-10 h-10 rounded-full">
                                    <div class="ml-4 flex-1">
                                        <h3 class="font-medium text-gray-800">Pierre Dubois</h3>
                                        <p class="text-sm text-gray-500">Abonnement Standard • 25/02/2025</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="font-bold text-gray-800">59,00 €</p>
                                        <p class="text-xs text-red-500">En attente</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6">
                                <a href="#" class="text-red-500 text-sm font-medium hover:text-red-600">Voir tous les paiements →</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Upcoming Sessions & Feedback -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Today's Classes -->
                    <div class="bg-white rounded-lg shadow">
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-lg font-semibold text-gray-800">Cours d'aujourd'hui</h2>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                                    <div class="bg-red-500 text-white rounded-lg w-16 h-16 flex flex-col items-center justify-center">
                                        <span class="text-sm">09:00</span>
                                        <span class="text-xs">10:00</span>
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="font-medium text-gray-800">Musculation</h3>
                                        <p class="text-sm text-gray-500">Jean Martin • 12 participants</p>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">En cours</span>
                                    </div>
                                </div>

                                <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                                    <div class="bg-blue-500 text-white rounded-lg w-16 h-16 flex flex-col items-center justify-center">
                                        <span class="text-sm">11:00</span>
                                        <span class="text-xs">12:00</span>
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="font-medium text-gray-800">Cardio</h3>
                                        <p class="text-sm text-gray-500">Sophie Dubois • 8 participants</p>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded-full">À venir</span>
                                    </div>
                                </div>

                                <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                                    <div class="bg-green-500 text-white rounded-lg w-16 h-16 flex flex-col items-center justify-center">
                                        <span class="text-sm">18:00</span>
                                        <span class="text-xs">19:30</span>
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="font-medium text-gray-800">Yoga</h3>
                                        <p class="text-sm text-gray-500">Marie Leclerc • 15 participants</p>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded-full">À venir</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Member Feedback -->
                    <div class="bg-white rounded-lg shadow">
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-lg font-semibold text-gray-800">Avis des membres</h2>
                        </div>
                        <div class="p-6">
                            <div class="space-y-6">
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <div class="flex items-center mb-2">
                                        <img src="https://randomuser.me/api/portraits/women/12.jpg" alt="Member" class="w-8 h-8 rounded-full">
                                        <div class="ml-3">
                                            <p class="font-medium text-gray-800">Julie Martin</p>
                                            <div class="flex text-yellow-400 text-xs mt-1">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="ml-auto text-xs text-gray-500">Il y a 2 jours</p>
                                    </div>
                                    <p class="text-gray-600 text-sm">Les séances de yoga avec Marie sont incroyables! J'ai beaucoup progressé depuis que j'ai commencé.</p>
                                </div>

                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <div class="flex items-center mb-2">
                                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Member" class="w-8 h-8 rounded-full">
                                        <div class="ml-3">
                                            <p class="font-medium text-gray-800">Thomas Dupont</p>
                                            <div class="flex text-yellow-400 text-xs mt-1">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="ml-auto text-xs text-gray-500">Il y a 1 semaine</p>
                                    </div>
                                    <p class="text