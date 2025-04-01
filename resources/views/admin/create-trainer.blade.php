<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymTracker - Ajouter un Programme</title>
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
                    <img src="/api/placeholder/40/40" alt="Admin" class="w-10 h-10 rounded-full">
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
                    <div class="flex items-center">
                        <a href="#" class="text-gray-500 hover:text-gray-700 mr-2">
                            <i class="fas fa-arrow-left mr-2"></i>Retour
                        </a>
                        <h1 class="text-lg font-semibold text-gray-800">Nouveau programme</h1>
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
                <div class="max-w-4xl mx-auto">
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-xl font-semibold text-gray-800">Informations du Entraîneurs</h2>
                            <p class="text-gray-600 text-sm mt-1">Remplissez tous les champs pour créer un nouveau Entraîneurs</p>
                        </div>

                        
                            <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow">
                                <h2 class="text-lg font-semibold text-gray-800 mb-4">Formulaire d'ajout</h2>
                                <form action="{{ route('trainer.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-4">
                                        <label class="block text-gray-700">Nom</label>
                                        <input type="text" name="name" class="w-full mt-1 p-2 border rounded-lg focus:ring-red-500" required>
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700">Email</label>
                                        <input type="email" name="email" class="w-full mt-1 p-2 border rounded-lg focus:ring-red-500" required>
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700">Spécialité</label>
                                        <input type="text" name="specialty" class="w-full mt-1 p-2 border rounded-lg focus:ring-red-500">
                                    </div>
                                    <div class="flex justify-end space-x-2">
                                        <a href="" class="px-4 py-2 bg-gray-300 text-gray-800 rounded-lg hover:bg-gray-400">Annuler</a>
                                        <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600">Ajouter</button>
                                    </div>
                                </form>
                            </div>
                       
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
