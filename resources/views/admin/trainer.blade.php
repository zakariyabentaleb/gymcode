<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymTracker - Entraîneurs</title>
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
                        <p class="font-medium">{{ Auth::user()->full_name }}</p>
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
                            <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded-lg bg-red-500 text-white">
                                <i class="fas fa-user-tie"></i>
                                <span>Entraîneurs</span>
                            </a>
                        </li>
                        <!-- Add more navigation items as needed -->
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
                    <div class="relative w-64 md:w-96">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <i class="fas fa-search text-gray-400"></i>
                        </span>
                        <input type="text" class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent" placeholder="Rechercher un entraîneur...">
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
                        <h1 class="text-2xl font-bold text-gray-800">Gestion des Entraîneurs</h1>
                        <p class="text-gray-600">Créez et gérez les entraîneurs</p>
                    </div>
                    <a href="{{ route('create-trainer') }}">
                        <button class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition duration-300">
                            <i class="fas fa-plus mr-2"></i>Nouvel Entraîneur
                        </button>
                    </a>
                </div>

                <!-- Trainer List -->
                <div class="bg-white rounded-lg shadow p-6 mb-8">
                    <div class="p-6 border-b border-gray-200 flex justify-between items-center">
                        <h2 class="text-lg font-semibold text-gray-800">Liste des Entraîneurs</h2>
                    </div>
                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Spécialité</th>
                                    
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($trainers as $trainer)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="h-10 w-10 rounded-full bg-blue-500 flex items-center justify-center text-white">
                                                    <i class="fas fa-user-tie"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">{{$trainer->name}}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">{{$trainer->specialty}}</div>
                                        </td>
                                       
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 flex items-center space-x-3">
                                            <a href="{{ route('trainers.edit', $trainer->id) }}" class="text-blue-500 hover:text-blue-700">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('trainers.destroy', $trainer->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet entraîneur ?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:text-red-700">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
