@extends('layouts.app')

@section('title', 'GymTracker - Programme Présentiel')

@section('content')
<body class="bg-brand-light font-sans">
    <!-- Hero Section -->
    <section class="hero-pattern pt-28 pb-20">
        <div class="gradient-overlay w-full h-full py-20">
            <div class="container mx-auto px-4 flex flex-col items-center">
                <h5 class="text-brand-red font-semibold mb-2 tracking-wider text-center">PROGRAMME PRÉSENTIEL</h5>
                <h1 class="text-4xl md:text-5xl font-bold mb-6 text-white text-center text-shadow max-w-4xl">{{$program->title}}</h1>
                <p class="text-gray-300 max-w-2xl text-center mb-4">Programme en salle pour améliorer votre endurance et brûler un maximum de calories</p>
                <div class="flex space-x-4 mb-8">
                    <span class="bg-brand-red bg-opacity-20 text-brand-red px-4 py-1 rounded-full text-sm font-medium">
                        <i class="fas fa-fire-alt mr-2"></i>Niveau {{$program->level}}
                    </span>
                    <span class="bg-brand-red bg-opacity-20 text-brand-red px-4 py-1 rounded-full text-sm font-medium">
                        <i class="fas fa-clock mr-2"></i>{{$program->duree}} Semaines
                    </span>
                    <span class="bg-brand-red bg-opacity-20 text-brand-red px-4 py-1 rounded-full text-sm font-medium">
                        <i class="fas fa-star mr-2"></i>4.5/5 (128 avis)
                    </span>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Programme Details Section -->
    <section class="py-16 container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column - Main Details -->
            <div class="lg:col-span-2">
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <img src="{{ asset('storage/' . $program->image_url) }}" alt="Programme"  class="w-full h-96 object-cover rounded-xl mb-8" />
                    <h2 class="text-2xl font-bold mb-6 border-b border-gray-200 pb-4">Description du programme</h2>
                    <p class="text-gray-700 mb-8 leading-relaxed">
                        Ce programme de cardio intensif de 8 semaines est conçu pour vous aider à améliorer votre capacité cardiovasculaire, brûler des calories efficacement et augmenter votre endurance globale. Chaque semaine comprend 3 à 4 séances d'entraînement en salle qui combinent des exercices HIIT (High-Intensity Interval Training), des circuits cardiovasculaires et des sessions d'endurance progressive.
                    </p>
                    
                    <h2 class="text-2xl font-bold mb-6 border-b border-gray-200 pb-4">À qui s'adresse ce programme ?</h2>
                    <ul class="list-disc list-inside text-gray-700 mb-8 space-y-2">
                        <li>Personnes souhaitant améliorer leur condition physique générale</li>
                        <li>Sportifs cherchant à augmenter leur endurance cardiovasculaire</li>
                        <li>Personnes visant une perte de poids efficace et durable</li>
                        <li>Niveau intermédiaire (expérience préalable en fitness recommandée)</li>
                    </ul>
                    
                    <h2 class="text-2xl font-bold mb-6 border-b border-gray-200 pb-4">Ce que comprend le programme</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div class="flex items-start space-x-4">
                            <div class="text-brand-red text-xl mt-1"><i class="fas fa-calendar-alt"></i></div>
                            <div>
                                <h3 class="font-semibold text-lg">Planning détaillé</h3>
                                <p class="text-gray-600">8 semaines complètes avec 3-4 séances hebdomadaires en salle</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="text-brand-red text-xl mt-1"><i class="fas fa-user-friends"></i></div>
                            <div>
                                <h3 class="font-semibold text-lg">Coaching personnalisé</h3>
                                <p class="text-gray-600">Encadrement par nos coachs professionnels</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="text-brand-red text-xl mt-1"><i class="fas fa-apple-alt"></i></div>
                            <div>
                                <h3 class="font-semibold text-lg">Conseils nutritionnels</h3>
                                <p class="text-gray-600">Guide alimentaire complémentaire inclus</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="text-brand-red text-xl mt-1"><i class="fas fa-comments"></i></div>
                            <div>
                                <h3 class="font-semibold text-lg">Support coach</h3>
                                <p class="text-gray-600">Assistance personnalisée à chaque séance</p>
                            </div>
                        </div>
                    </div>
                    
                    <h2 class="text-2xl font-bold mb-6 border-b border-gray-200 pb-4">Équipement utilisé</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-8">
                        <div class="bg-brand-light p-4 rounded-lg flex items-center space-x-3">
                            <i class="fas fa-running text-brand-red"></i>
                            <span>Tapis de course</span>
                        </div>
                        <div class="bg-brand-light p-4 rounded-lg flex items-center space-x-3">
                            <i class="fas fa-dumbbell text-brand-red"></i>
                            <span>Haltères légers</span>
                        </div>
                        <div class="bg-brand-light p-4 rounded-lg flex items-center space-x-3">
                            <i class="fas fa-circle text-brand-red"></i>
                            <span>Corde à sauter</span>
                        </div>
                        <div class="bg-brand-light p-4 rounded-lg flex items-center space-x-3">
                            <i class="fas fa-ellipsis-h text-brand-red"></i>
                            <span>Tapis d'exercice</span>
                        </div>
                        <div class="bg-brand-light p-4 rounded-lg flex items-center space-x-3">
                            <i class="fas fa-stopwatch text-brand-red"></i>
                            <span>Chronomètre</span>
                        </div>
                    </div>
                    
                    <h2 class="text-2xl font-bold mb-6 border-b border-gray-200 pb-4">Exemples de séances</h2>
                    <div class="space-y-4 mb-8">
                        <div class="border-l-4 border-brand-red pl-4 py-2">
                            <h3 class="font-semibold">Séance HIIT</h3>
                            <p class="text-gray-600">30 minutes d'intervalles à haute intensité pour maximiser la combustion des calories</p>
                        </div>
                        <div class="border-l-4 border-brand-red pl-4 py-2">
                            <h3 class="font-semibold">Circuit cardio-training</h3>
                            <p class="text-gray-600">45 minutes combinant exercices cardiovasculaires et renforcement musculaire</p>
                        </div>
                        <div class="border-l-4 border-brand-red pl-4 py-2">
                            <h3 class="font-semibold">Endurance progressive</h3>
                            <p class="text-gray-600">60 minutes d'exercices d'endurance à intensité modérée et croissante</p>
                        </div>
                    </div>
                    
                    <h2 class="text-2xl font-bold mb-6 border-b border-gray-200 pb-4">Horaires des séances</h2>
                    <div class="bg-brand-light p-6 rounded-lg mb-8">
                        <p class="mb-4 text-gray-700">Les séances sont proposées plusieurs fois par semaine pour s'adapter à votre emploi du temps :</p>
                        <ul class="space-y-2 text-gray-700">
                            <li><strong>Matins :</strong> Lundi, Mercredi et Vendredi de 9h à 10h et Samedi de 10h à 11h</li>
                            <li><strong>Midi :</strong> Lundi, Mercredi et Vendredi de 12h à 13h</li>
                            <li><strong>Soirs :</strong> Lundi, Mercredi et Vendredi de 18h à 19h, Mardi et Jeudi de 19h à 20h</li>
                        </ul>
                        <p class="mt-4 text-gray-700">Pour commencer le programme, choisissez simplement 3-4 séances par semaine qui conviennent à votre planning.</p>
                    </div>
                </div>
            </div>
            
            <!-- Right Column - Pricing & CTA -->
            <div class="lg:col-span-1">
                <div class="bg-white p-6 rounded-xl shadow-lg sticky top-24">
                    <div class="text-center mb-6">
                        <p class="text-gray-600 line-through">€69.99</p>
                        <div class="flex items-center justify-center space-x-3">
                            <h3 class="text-4xl font-bold text-brand-red">{{$program->price}}</h3>
                            <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded">-30%</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Offre limitée - Fin dans 2 jours</p>
                    </div>
                    
                    <a href="#" class="block bg-brand-red hover:bg-red-700 text-white text-center py-4 rounded-xl font-semibold text-lg transition duration-300 mb-4">
                        S'inscrire au programme
                    </a>
                    
                    <p class="text-center text-sm text-gray-500 mb-6">
                        <i class="fas fa-lock mr-1"></i> Paiement sécurisé | Garantie 30 jours satisfait ou remboursé
                    </p>
                    
                    <hr class="my-6">
                    
                    <h3 class="font-semibold text-lg mb-4">Ce que vous obtenez :</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                            <span>Accès aux séances collectives pendant 8 semaines</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                            <span>Encadrement par coach professionnel à chaque séance</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                            <span>Guide nutritionnel complémentaire imprimé</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                            <span>Carnet de suivi personnalisé</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                            <span>Accès illimité à la salle pendant la durée du programme</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                            <span>1 séance de bilan initial et final</span>
                        </li>
                    </ul>
                    
                    <hr class="my-6">
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-lg mb-3">Témoignage</h3>
                        <div class="flex items-center mb-3">
                            <img src="https://randomuser.me/api/portraits/women/33.jpg" alt="Marie Dubois" class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h4 class="font-medium">Marie Dubois</h4>
                                <div class="flex text-yellow-500">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-600 italic text-sm">
                            "Ce programme a complètement transformé ma condition physique ! J'ai perdu 7kg en 8 semaines et mon endurance a considérablement augmenté. L'encadrement par les coachs est top et l'ambiance de groupe est motivante."
                        </p>
                    </div>
                    
                    <div class="mt-6 p-4 border border-blue-100 rounded-lg bg-blue-50">
                        <h3 class="font-semibold text-lg mb-3 text-blue-800">Contactez-nous</h3>
                        <p class="text-gray-700 mb-3">Des questions sur ce programme ? Notre équipe est à votre disposition.</p>
                        <div class="flex items-center space-x-2 mb-2">
                            <i class="fas fa-phone text-blue-600"></i>
                            <span>01.XX.XX.XX.XX</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-envelope text-blue-600"></i>
                            <span>contact@gymtracker.fr</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h5 class="text-brand-red font-semibold mb-2 tracking-wider">FAQ</h5>
                <h2 class="text-3xl font-bold text-brand-dark mb-4">Questions fréquemment posées</h2>
                <p class="max-w-2xl mx-auto text-gray-600">Tout ce que vous devez savoir avant de commencer votre programme</p>
            </div>
            
            <div class="max-w-3xl mx-auto space-y-6">
                <div class="border border-gray-200 rounded-lg">
                    <button class="flex justify-between items-center w-full p-4 text-left font-semibold">
                        <span>Est-ce que ce programme convient aux débutants ?</span>
                        <i class="fas fa-chevron-down text-brand-red"></i>
                    </button>
                    <div class="px-4 pb-4">
                        <p class="text-gray-600">Ce programme est conçu pour un niveau intermédiaire, mais il peut être adapté pour les débutants motivés. Nos coachs proposent des alternatives plus accessibles pour chaque exercice avancé.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-lg">
                    <button class="flex justify-between items-center w-full p-4 text-left font-semibold">
                        <span>Combien de temps faut-il prévoir par séance ?</span>
                        <i class="fas fa-chevron-down text-brand-red"></i>
                    </button>
                    <div class="px-4 pb-4">
                        <p class="text-gray-600">Les séances durent entre 30 et 60 minutes, échauffement et récupération inclus. Nous recommandons de participer à 3-4 séances par semaine pour des résultats optimaux.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-lg">
                    <button class="flex justify-between items-center w-full p-4 text-left font-semibold">
                        <span>Puis-je suivre ce programme si j'ai des problèmes articulaires ?</span>
                        <i class="fas fa-chevron-down text-brand-red"></i>
                    </button>
                    <div class="px-4 pb-4">
                        <p class="text-gray-600">Nous recommandons de consulter un médecin avant de commencer ce programme si vous avez des problèmes de santé. Nos coachs peuvent proposer des alternatives à faible impact, mais certains exercices peuvent être contre-indiqués selon votre condition.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-lg">
                    <button class="flex justify-between items-center w-full p-4 text-left font-semibold">
                        <span>Comment s'inscrire au programme ?</span>
                        <i class="fas fa-chevron-down text-brand-red"></i>
                    </button>
                    <div class="px-4 pb-4">
                        <p class="text-gray-600">Vous pouvez vous inscrire directement à l'accueil de notre salle, sur notre site web ou par téléphone. Après votre inscription, nous vous proposerons un rendez-vous pour un bilan initial avec l'un de nos coachs.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-lg">
                    <button class="flex justify-between items-center w-full p-4 text-left font-semibold">
                        <span>Que se passe-t-il si je rate une séance ?</span>
                        <i class="fas fa-chevron-down text-brand-red"></i>
                    </button>
                    <div class="px-4 pb-4">
                        <p class="text-gray-600">Si vous ne pouvez pas assister à une séance, vous avez la possibilité de la rattraper lors d'un autre créneau horaire dans la même semaine, sous réserve de disponibilité.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Call to Action -->
    <section class="py-16 bg-gradient-to-r from-brand-red to-red-700 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Prêt à transformer votre condition physique ?</h2>
            <p class="max-w-2xl mx-auto mb-8">Rejoignez des milliers de personnes qui ont déjà amélioré leur endurance et atteint leurs objectifs fitness grâce à ce programme présentiel.</p>
            <a href="#" class="bg-white text-brand-red hover:bg-gray-100 transition duration-300 py-3 px-8 rounded-lg font-semibold text-lg shadow-lg hover:shadow-xl">
                S'inscrire maintenant
            </a>
            <p class="mt-4 text-sm">Garantie satisfait ou remboursé pendant 30 jours</p>
            <div class="mt-8 flex justify-center items-center space-x-8">
                <div class="flex flex-col items-center">
                    <i class="fas fa-map-marker-alt text-3xl mb-2"></i>
                    <p class="font-medium">123 Rue du Fitness<br>75001 Paris</p>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fas fa-phone-alt text-3xl mb-2"></i>
                    <p class="font-medium">01.XX.XX.XX.XX</p>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fas fa-envelope text-3xl mb-2"></i>
                    <p class="font-medium">contact@gymtracker.fr</p>
                </div>
            </div>
        </div>
    </section>
    
@endsection