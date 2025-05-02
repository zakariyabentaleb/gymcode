<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymTracker - Inscription</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        'brand-red': '#E62E2E',
                        'brand-dark': '#0F1112',
                        'brand-light': '#F5F5F7'
                    }
                }
            }
        }
    </script>
    <style>
        .register-bg {
            background-image: url('https://images.unsplash.com/photo-1549060279-7e168fcee0c2');
            background-size: cover;
            background-position: center;
        }
        .gradient-overlay {
            background: linear-gradient(90deg, rgba(15,17,18,0.9) 0%, rgba(15,17,18,0.8) 50%, rgba(15,17,18,0.7) 100%);
        }
        .btn-primary {
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        .btn-primary:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.1);
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.5s ease-out;
            z-index: -1;
        }
        .btn-primary:hover:after {
            transform: scaleX(1);
            transform-origin: left;
        }
        .stepper-item {
            position: relative;
        }
        .stepper-item:not(:last-child):after {
            content: '';
            position: absolute;
            top: 50%;
            left: 100%;
            height: 2px;
            width: 100%;
            background-color: #d1d5db;
            transform: translateY(-50%);
            z-index: -1;
        }
        .stepper-item.active:not(:last-child):after {
            background-color: #E62E2E;
        }
        .stepper-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #d1d5db;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: white;
        }
        .stepper-item.active .stepper-circle {
            background-color: #E62E2E;
        }
        .stepper-item.completed .stepper-circle {
            background-color: #E62E2E;
        }
    </style>
</head>
<body class="bg-brand-light font-sans">
    <!-- Navigation -->
    <nav class="bg-brand-dark text-white shadow-lg fixed w-full z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-dumbbell text-brand-red text-2xl"></i>
                    <span class="font-bold text-xl tracking-wider">GYM<span class="text-brand-red">TRACKER</span></span>
                </div>
                <div class="hidden md:flex items-center space-x-10">
                    <a href="{{route('home')}}" class="nav-link hover:text-brand-red transition duration-300 font-medium">Accueil</a>
                    <a href="{{route('programmes')}}" class="nav-link hover:text-brand-red transition duration-300 font-medium">Programmes</a>
                    <a href="{{route('entraineur')}}" class="nav-link hover:text-brand-red transition duration-300 font-medium">Entraîneurs</a>
                    <a href="{{route('contact')}}" class="nav-link hover:text-brand-red transition duration-300 font-medium">Contact</a>
                    <a href="{{route('login')}}" class="bg-brand-red hover:bg-red-700 transition duration-300 py-2 px-6 rounded-lg font-semibold">Se connecter</a>
                </div>
                <div class="md:hidden">
                    <button class="text-white focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Registration Section -->
    <div class="min-h-screen flex flex-col md:flex-row">
        <!-- Left side (image) -->
        <div class="hidden md:block md:w-1/2 relative register-bg">
            <div class="absolute inset-0 gradient-overlay"></div>
            <div class="absolute inset-0 flex flex-col justify-center px-10 lg:px-20">
                <h2 class="text-4xl font-bold text-white mb-6">Commencez votre<br>transformation</h2>
                <p class="text-lg text-gray-200 mb-8 max-w-md">Créez votre compte GymTracker pour débuter votre parcours fitness et bénéficier de nos outils avancés de suivi.</p>
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 bg-brand-red rounded-full flex items-center justify-center mt-1">
                            <i class="fas fa-check text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-white font-semibold text-lg">30 jours d'essai gratuit</h3>
                            <p class="text-gray-300">Testez toutes nos fonctionnalités sans engagement</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 bg-brand-red rounded-full flex items-center justify-center mt-1">
                            <i class="fas fa-check text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-white font-semibold text-lg">Séances personnalisées</h3>
                            <p class="text-gray-300">Obtenez un programme adapté à vos objectifs</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 bg-brand-red rounded-full flex items-center justify-center mt-1">
                            <i class="fas fa-check text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-white font-semibold text-lg">Support premium</h3>
                            <p class="text-gray-300">Assistance 7j/7 par nos entraîneurs certifiés</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right side (form) -->
        <div class="w-full md:w-1/2 flex items-center justify-center py-24 px-4 md:px-8 lg:px-16">
            <div class="w-full max-w-lg">
                <div class="text-center mb-10">
                    <div class="flex items-center justify-center space-x-2 mb-4">
                        <i class="fas fa-dumbbell text-brand-red text-3xl"></i>
                        <span class="font-bold text-2xl tracking-wider">GYM<span class="text-brand-red">TRACKER</span></span>
                    </div>
                    <h2 class="text-3xl font-bold text-brand-dark">Inscription</h2>
                    <p class="text-gray-600 mt-2">Créez votre compte en quelques étapes simples</p>
                </div>

                <!-- Progress Stepper -->
               

                <form action="{{ route('register.submit') }}" method="POST" class="space-y-6">
                    @csrf
                    <!-- Step 1: Basic Information (visible) -->
                    <div id="step1" class="space-y-6">
                        <!-- Replaced First Name and Last Name with Full Name -->
                        <div>
                            <label for="full_name" class="block text-sm font-medium text-gray-700 mb-1">Nom complet</label>
                            <input id="full_name" name="full_name" type="text" required class="bg-white focus:ring-brand-red focus:border-brand-red block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm text-sm" placeholder="Jean Dupont">
                        </div>
                
                        <!-- Member or Trainer Selection -->
                        {{-- <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Type de compte</label>
                            <div class="flex space-x-6">
                                <div class="flex items-center">
                                    <input id="role_member" name="role" type="radio" value="member" checked class="h-4 w-4 text-brand-red focus:ring-brand-red border-gray-300">
                                    <label for="role_member" class="ml-2 text-sm text-gray-700">Membre</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="role_trainer" name="role" type="radio" value="trainer" class="h-4 w-4 text-brand-red focus:ring-brand-red border-gray-300">
                                    <label for="role_trainer" class="ml-2 text-sm text-gray-700">Coach</label>
                                </div>
                            </div>
                        </div> --}}
                
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-gray-400"></i>
                                </div>
                                <input id="email" name="email" type="email" required class="bg-white focus:ring-brand-red focus:border-brand-red block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg shadow-sm text-sm" placeholder="exemple@email.com">
                            </div>
                        </div>
                
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-gray-400"></i>
                                </div>
                                <input id="password" name="password" type="password" required class="bg-white focus:ring-brand-red focus:border-brand-red block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg shadow-sm text-sm" placeholder="8+ caractères">
                            </div>
                            
                        </div>
                
                        <div>
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirmer le mot de passe</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-gray-400"></i>
                                </div>
                                <input id="password_confirmation" name="password_confirmation" type="password" required class="bg-white focus:ring-brand-red focus:border-brand-red block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg shadow-sm text-sm" placeholder="Confirmez votre mot de passe">
                            </div>
                        </div>
                
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" name="terms" type="checkbox" required class="h-4 w-4 text-brand-red focus:ring-brand-red border-gray-300 rounded">
                            </div>
                            <div class="ml-3">
                                <label for="terms" class="text-sm text-gray-700">J'accepte les <a href="#" class="text-brand-red hover:text-red-800">Conditions d'Utilisation</a> et la <a href="#" class="text-brand-red hover:text-red-800">Politique de Confidentialité</a></label>
                            </div>
                        </div>
                
                        <div class="flex items-center justify-between mt-8">
                            <div></div>
                            <button type="submit"  class="btn-primary bg-brand-red hover:bg-red-700 transition duration-500 py-3 px-8 rounded-lg font-semibold text-white tracking-wide">register <i class="fas fa-arrow-right ml-2"></i></button>
                        </div>
                    </div>
                </form>
           </div>  
    