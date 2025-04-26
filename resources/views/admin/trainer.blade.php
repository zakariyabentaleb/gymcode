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
        @include('admin.sidebar')

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Navigation -->
            <header class="bg-white shadow-sm z-10">
                <div class="flex items-center justify-between h-16 px-6">
                   
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
                                                <div class="h-10 w-10">
                                                    <img src="{{ Storage::url($trainer->photo) }}" class="h-full w-full object-cover rounded-full" alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">{{$trainer->full_name}}</div>
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
