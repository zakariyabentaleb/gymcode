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
                    <div class="flex items-center">
                        <a href="#" class="text-gray-500 hover:text-gray-700 mr-2">
                            <i class="fas fa-arrow-left mr-2"></i>Retour
                        </a>
                        <h1 class="text-lg font-semibold text-gray-800">Nouveau programme</h1>
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
                                <form action="{{ route('trainers.update', $trainer->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    
                                    <div class="mb-4">
                                        <label class="block text-gray-700 font-medium">Nom</label>
                                        <input type="text" name="full_name" value="{{ $trainer->full_name }}" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-red-300">
                                    </div>
            
                                    <div class="mb-4">
                                        <label class="block text-gray-700 font-medium">Email</label>
                                        <input type="email" name="email" value="{{ $trainer->email }}" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-red-300">
                                    </div>
            
                                    <div class="mb-4">
                                        <label class="block text-gray-700 font-medium">Spécialité</label>
                                        <input type="text" name="specialty" value="{{ $trainer->specialty }}" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-red-300">
                                    </div>
            
                                    <div class="flex justify-between">
                                        <a href="" class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">Annuler</a>
                                        <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600">Sauvegarder</button>
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
