<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymTracker - Login</title>
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
        .login-bg {
            background-image: url('https://images.unsplash.com/photo-1517836357463-d25dfeac3438');
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
                    <a href="{{route('register')}}" class="bg-brand-red hover:bg-red-700 transition duration-300 py-2 px-6 rounded-lg font-semibold">Register</a>
                </div>
                <div class="md:hidden">
                    <button class="text-white focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Login Section -->
    <div class="min-h-screen flex flex-col md:flex-row">
        <!-- Left side (form) -->
        <div class="w-full md:w-1/2 flex items-center justify-center py-24 px-4 md:px-8 lg:px-16">
            <div class="w-full max-w-md">
                <div class="text-center mb-10">
                    <div class="flex items-center justify-center space-x-2 mb-4">
                        <i class="fas fa-dumbbell text-brand-red text-3xl"></i>
                        <span class="font-bold text-2xl tracking-wider">GYM<span class="text-brand-red">TRACKER</span></span>
                    </div>
                    <h2 class="text-3xl font-bold text-brand-dark">Connexion</h2>
                    <p class="text-gray-600 mt-2">Accédez à votre compte et reprenez l'entraînement</p>
                </div>

                <form action="{{ route('login') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-400"></i>
                            </div>
                            <input id="email" name="email" type="email" required class="bg-white focus:ring-brand-red focus:border-brand-red block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg shadow-sm text-sm" placeholder="exemple@email.com">
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                            <a href="" class="text-sm text-brand-red hover:text-red-800">Mot de passe oublié?</a>
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input id="password" name="password" type="password" required class="bg-white focus:ring-brand-red focus:border-brand-red block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg shadow-sm text-sm" placeholder="••••••••">
                        </div>
                    </div>

                    <div class="flex items-center">
                        <input id="remember_me" name="remember" type="checkbox" class="h-4 w-4 text-brand-red focus:ring-brand-red border-gray-300 rounded">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-700">Se souvenir de moi</label>
                    </div>

                    <button type="submit" class="btn-primary w-full bg-brand-red hover:bg-red-700 transition duration-500 py-3 px-4 rounded-lg font-semibold text-white uppercase tracking-wide">Se connecter</button>
                
                    <div class="relative py-2">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center">
                            <span class="bg-brand-light px-4 text-xs text-gray-500 uppercase">Ou continuer avec</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <a href="#" class="flex items-center justify-center py-2.5 px-4 rounded-lg border border-gray-300 bg-white hover:bg-gray-50 transition duration-300">
                            <i class="fab fa-google text-red-500 mr-2"></i>
                            <span class="text-sm font-medium">Google</span>
                        </a>
                        <a href="#" class="flex items-center justify-center py-2.5 px-4 rounded-lg border border-gray-300 bg-white hover:bg-gray-50 transition duration-300">
                            <i class="fab fa-facebook-f text-blue-600 mr-2"></i>
                            <span class="text-sm font-medium">Facebook</span>
                        </a>
                    </div>

                    <div class="text-center mt-6">
                        <p class="text-sm text-gray-600">
                            Vous n'avez pas de compte?
                            <a href="{{route('register')}}" class="text-brand-red font-medium hover:text-red-800">S'inscrire</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>

        <!-- Right side (image) -->
        <div class="hidden md:block md:w-1/2 relative login-bg">
            <div class="absolute inset-0 gradient-overlay"></div>
            <div class="absolute inset-0 flex flex-col justify-center px-10 lg:px-20">
                <h2 class="text-4xl font-bold text-white mb-6">Prêt à transformer<br>votre corps?</h2>
                <p class="text-lg text-gray-200 mb-8 max-w-md">Connectez-vous à votre compte GymTracker pour continuer votre parcours fitness et atteindre vos objectifs.</p>
                <div class="space-y-4">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-brand-red rounded-full flex items-center justify-center">
                            <i class="fas fa-calendar-check text-white"></i>
                        </div>
                        <div class="text-white">Réservez vos séances d'entraînement</div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-brand-red rounded-full flex items-center justify-center">
                            <i class="fas fa-chart-line text-white"></i>
                        </div>
                        <div class="text-white">Suivez vos progrès personnels</div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-brand-red rounded-full flex items-center justify-center">
                            <i class="fas fa-user-friends text-white"></i>
                        </div>
                        <div class="text-white">Connectez avec nos entraîneurs</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer (minimal) -->
    <footer class="bg-brand-dark text-white py-6">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center space-x-2 mb-4 md:mb-0">
                    <i class="fas fa-dumbbell text-brand-red text-xl"></i>
                    <span class="font-bold text-lg tracking-wider">GYM<span class="text-brand-red">TRACKER</span></span>
                </div>
                <div class="text-gray-400 text-sm">
                    &copy; 2025 GymTracker. Tous droits réservés.
                </div>
            </div>
        </div>
    </footer>
</body>
</html>