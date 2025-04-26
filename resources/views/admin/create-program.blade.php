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
                            <h2 class="text-xl font-semibold text-gray-800">Informations du programme</h2>
                            <p class="text-gray-600 text-sm mt-1">Remplissez tous les champs pour créer un nouveau programme</p>
                        </div>

                        <form action='{{route('programs.store')}}' method="POST" enctype="multipart/form-data" class="p-6">
                            @csrf
                            <!-- Basic Information Section -->
                            <div class="mb-8">
                                <h3 class="text-lg font-medium text-gray-800 mb-4">Informations de base</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Titre du programme *</label>
                                        <input type="text" id="title" name="title" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Ex: Force & Endurance" required>
                                    </div>
                                    <div>
                                        <label for="level" class="block text-sm font-medium text-gray-700 mb-1">Niveau *</label>
                                        <select id="level" name="level" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" required>
                                            <option value="debutant">Débutant</option>
                                            <option value="intermediaire">Intermédiaire</option>
                                            <option value="professionel">Professionel</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Program Details Section -->
                            <div class="mb-8">
                                <h3 class="text-lg font-medium text-gray-800 mb-4">Détails du programme</h3>
                                <div class="grid grid-cols-1 gap-6">
                                    <div>
                                        <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description *</label>
                                        <textarea id="description" name="description" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Décrivez le programme et ses bénéfices..." required></textarea>
                                    </div>
                                    {{-- <div>
                                        <label for="image_url" class="block text-sm font-medium text-gray-700 mb-1">Image du programme *</label>
                                        <div class="flex items-center">
                                            <input type="file" id="image" name="image" class="hidden" accept="image/*" onchange="previewImage(event)">
                                            <label for="image" class="flex items-center justify-center w-full px-4 py-2 border border-dashed border-gray-300 rounded-lg text-gray-700 bg-white hover:bg-gray-50 cursor-pointer">
                                                <i class="fas fa-cloud-upload-alt mr-2 text-gray-500"></i>
                                                <span>Choisir une image</span>
                                            </label>
                                        </div>
                                        <input type="hidden" id="image_url" name="image_url">
                                        <p class="mt-1 text-xs text-gray-500">PNG, JPG ou GIF jusqu'à 2MB</p>
                                    
                                        <!-- Image preview -->
                                        <div id="imagePreviewContainer" class="mt-2 hidden">
                                            <img id="imagePreview" src="" alt="Image Preview" class="w-32 h-32 object-cover border border-gray-300 rounded-lg">
                                        </div>
                                    </div> --}}
                                    {{-- <div>
                                        <label for="image_url" class="block text-sm font-medium text-gray-700 mb-1">URL de l'image *</label>
                                        <input type="text" id="image_url" name="image_url" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Collez le lien de l'image ici" oninput="previewImageFromURL(event)">
                                    </div> --}}
                                    <div>
                                        <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Image du programme *</label>
                                        <input type="file" id="image" name="image" accept="image/*" 
                                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" required>
                                        <p class="mt-1 text-xs text-gray-500">PNG, JPG ou GIF jusqu'à 2MB</p>
                                    </div>
                                    
                                    <div>
                                        <label for="duree" class="block text-sm font-medium text-gray-700 mb-1">Durée (semaines) *</label>
                                        <input type="number" id="duree" name="duree" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500"
                                               placeholder="Ex: 8" min="1" required>
                                    </div>
                                    
                                    
                                </div>
                            </div>

                            <!-- Trainers Section -->
                            <div class="mb-8">
                                <h3 class="text-lg font-medium text-gray-800 mb-4">Entraîneurs assignés</h3>
                                <div class="bg-gray-50 rounded-lg p-4">
                                    <div class="mb-4">
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Sélectionnez les entraîneurs pour ce programme</label>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <select id="trainer_id" name="trainer_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" required>
                                                @foreach ($trainers as $trainer)
                                                    <option value="{{ $trainer->id }}">{{ $trainer->full_name }} - {{ $trainer->specialty }}</option>
                                                @endforeach
                                            </select>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-8">
                                <h3 class="text-lg font-medium text-gray-800 mb-4">Categories</h3>
                                <div class="bg-gray-50 rounded-lg p-4">
                                    <div class="mb-4">
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Sélectionnez Category pour ce programme</label>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <select id="category_id" name="category_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" required>
                                                @foreach ($categories as $categorie)
                                                    <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                                @endforeach
                                            </select>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Pricing Section -->
                            <div class="mb-8">
                                <h3 class="text-lg font-medium text-gray-800 mb-4">Prix</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Prix (€) *</label>
                                        <div class="relative rounded-md shadow-sm">
                                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <span class="text-gray-500">€</span>
                                            </div>
                                            <input type="number" id="price" name="price" class="pl-8 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Ex: 89.00" step="0.01" min="0" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Created and Updated timestamps will be handled automatically by Laravel -->

                            <!-- Form Actions -->
                            <div class="flex justify-end space-x-4 pt-4 border-t border-gray-200">
                                <button type="button" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">Annuler</button>
                                <button type="submit" class="px-6 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition duration-300">Publier le programme</button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
