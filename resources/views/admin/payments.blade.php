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
                        <h1 class="text-2xl font-bold text-gray-800">Gestion des Payments</h1>
                    </div>
                </div>

                <!-- Trainer List -->
                <div class="bg-white rounded-lg shadow p-6 mb-8">
                    <div class="p-6 border-b border-gray-200 flex justify-between items-center">
                        <h2 class="text-lg font-semibold text-gray-800">Liste des Payments</h2>
                    </div>
                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Membre</th>
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>

                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Program</th>
                                    
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">date</th>
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Heure</th>
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($payments as $payment)
                                    <tr>
                                        <!-- Membre -->
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="h-10 w-10 rounded-full bg-blue-500 flex items-center justify-center text-white">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">{{ $payment->user->full_name }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $payment->user->email }}</div>
                                        </td>
                                        <!-- Programme -->
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $payment->program->title }}</div>
                                        </td>
                                
                                        <!-- Date -->
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $payment->created_at->format('d/m/Y') }}</div>
                                        </td>
                                
                                        <!-- Heure -->
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $payment->created_at->format('H:i') }}</div>
                                        </td>
                                        
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $payment->program->price }} DH</div>
                                        </td>
                                        <!-- Statut -->
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Payé
                                            </span>
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
