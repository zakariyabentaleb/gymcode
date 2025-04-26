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
                            <h2 class="text-xl font-semibold text-gray-800">Informations du programme</h2>
                            <p class="text-gray-600 text-sm mt-1">Remplissez tous les champs pour créer un nouveau programme</p>
                        </div>

                        <form action="{{ route('programs.update', $program->id) }}" method="POST" enctype="multipart/form-data" class="p-6">
                            @csrf
                            @method('PUT') <!-- Ajout de la méthode PUT -->
                            
                            <!-- Informations de base -->
                            <div class="mb-8">
                                <h3 class="text-lg font-medium text-gray-800 mb-4">Informations de base</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Titre du programme *</label>
                                        <input type="text" id="title" name="title" value="{{ $program->title }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" required>
                                    </div>
                                    <div>
                                        <label for="level" class="block text-sm font-medium text-gray-700 mb-1">Niveau *</label>
                                        <select id="level" name="level" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" required>
                                            <option value="debutant" {{ $program->level == 'debutant' ? 'selected' : '' }}>Débutant</option>
                                            <option value="intermediaire" {{ $program->level == 'intermediaire' ? 'selected' : '' }}>Intermédiaire</option>
                                            <option value="professionel" {{ $program->level == 'professionel' ? 'selected' : '' }}>Professionel</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        
                            <!-- Détails du programme -->
                            <div class="mb-8">
                                <h3 class="text-lg font-medium text-gray-800 mb-4">Détails du programme</h3>
                                <div class="grid grid-cols-1 gap-6">
                                    <div>
                                        <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description *</label>
                                        <textarea id="description" name="description" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" required>{{ $program->description }}</textarea>
                                    </div>
                                    @if($program->image_url)
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-500">Image actuelle :</p>
                                        <img src="{{ asset('storage/'.$program->image_url) }}" alt="Image actuelle du programme" class="w-32 h-32 object-cover border border-gray-300 rounded-lg mt-2">
                                    </div>
                                    @endif
                                    <div>
                                        <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Nouvelle image</label>
                                        <input type="file" id="image" name="image" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500">
                                    </div>
                                    <div>
                                        <label for="duree" class="block text-sm font-medium text-gray-700 mb-1">Durée (semaines) *</label>
                                        <input type="number" id="duree" name="duree" value="{{ $program->duree }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" required>
                                    </div>
                                </div>
                            </div>
                        
                            <!-- Entraîneurs assignés -->
                            <div class="mb-8">
                                <h3 class="text-lg font-medium text-gray-800 mb-4">Entraîneurs assignés</h3>
                                <select id="trainer_id" name="trainer_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" required>
                                    @foreach ($trainers as $trainer)
                                        <option value="{{ $trainer->id }}" {{ $program->trainer_id == $trainer->id ? 'selected' : '' }}>
                                            {{ $trainer->full_name }} - {{ $trainer->specialty }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        
                            <!-- Catégorie -->
                            <div class="mb-8">
                                <h3 class="text-lg font-medium text-gray-800 mb-4">Catégories</h3>
                                <select id="category_id" name="category_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" required>
                                    @foreach ($categories as $categorie)
                                        <option value="{{ $categorie->id }}" {{ $program->category_id == $categorie->id ? 'selected' : '' }}>
                                            {{ $categorie->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        
                            <!-- Prix -->
                            <div class="mb-8">
                                <h3 class="text-lg font-medium text-gray-800 mb-4">Prix</h3>
                                <input type="number" id="price" name="price" value="{{ $program->price }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" required>
                            </div>
                        
                            <!-- Bouton de mise à jour -->
                            <div class="flex justify-end">
                                <button type="submit" class="bg-red-500 text-white px-6 py-2 rounded-lg hover:bg-red-600">Mettre à jour</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
