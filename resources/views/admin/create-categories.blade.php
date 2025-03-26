<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymTracker - Ajouter une Catégorie</title>
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
                <nav>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded-lg text-gray-300 hover:bg-gray-800">
                                <i class="fas fa-th-large"></i>
                                <span>Tableau de bord</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded-lg bg-red-500 text-white">
                                <i class="fas fa-tags"></i>
                                <span>Catégories</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="bg-white shadow-sm z-10">
                <div class="flex items-center justify-between h-16 px-6">
                    <h1 class="text-lg font-semibold text-gray-800">Nouvelle Catégorie</h1>
                </div>
            </header>
            <main class="flex-1 overflow-y-auto p-6 bg-gray-100">
                <div class="max-w-4xl mx-auto">
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-xl font-semibold text-gray-800">Informations de la Catégorie</h2>
                        </div>
                        <form action="{{route('categories.store')}}" method="POST" class="p-6">
                            @csrf
                            <div class="mb-6">
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nom de la catégorie *</label>
                                <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Ex: Musculation" required>
                            </div>
                            <div class="flex justify-end">
                                <button type="submit" class="px-6 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600">Ajouter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>