@extends('layouts.app')

@section('title', 'GymTracker - No Pain, No Gain')

@section('content')
<body class="bg-brand-light font-sans">
    <!-- Navigation -->
   

    <!-- Hero Section -->
    <section class="relative hero-pattern pt-20">
        <div class="absolute inset-0 gradient-overlay z-10"></div>
        <div class="container mx-auto px-4 py-32 md:py-40 relative z-20">
            <div class="max-w-3xl">
                <h5 class="text-brand-red font-semibold mb-4 tracking-wider">NOS EXPERTS FITNESS</h5>
                <h1 class="text-4xl md:text-6xl font-extrabold mb-6 text-white text-shadow leading-tight">DES <span class="text-brand-red">ENTRAÎNEURS</span> PASSIONNÉS ET QUALIFIÉS</h1>
                <p class="text-lg mb-10 text-gray-200 max-w-xl">Découvrez notre équipe d'entraîneurs certifiés, prêts à vous accompagner dans votre parcours de fitness et à vous aider à atteindre vos objectifs.</p>
                <div class="flex space-x-4">
                    <a href="#trainers" class="btn-primary bg-brand-red hover:bg-red-700 transition duration-500 py-3 px-8 rounded-lg font-semibold text-white uppercase tracking-wide">Voir les entraîneurs</a>
                    <a href="#booking" class="border-2 border-white hover:border-brand-red hover:text-brand-red transition duration-300 py-3 px-8 rounded-lg font-semibold text-white uppercase tracking-wide">Réserver une séance</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Our Trainers Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h5 class="text-brand-red font-semibold mb-2 tracking-wider">POURQUOI NOUS CHOISIR</h5>
                <h2 class="text-3xl font-bold mb-4 text-brand-dark">Un Accompagnement d'Excellence</h2>
                <p class="max-w-2xl mx-auto text-gray-600">Nos entraîneurs sont sélectionnés rigoureusement pour leurs compétences, leur expérience et leur approche personnalisée.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-500 border-t-4 border-brand-red">
                    <div class="w-16 h-16 bg-brand-red text-white rounded-xl flex items-center justify-center mb-6 transform -rotate-6">
                        <i class="fas fa-medal text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-brand-dark">Certifications Professionnelles</h3>
                    <p class="text-gray-600">Tous nos entraîneurs sont certifiés par des organismes de fitness reconnus et suivent régulièrement des formations pour rester à jour.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-500 border-t-4 border-brand-red">
                    <div class="w-16 h-16 bg-brand-red text-white rounded-xl flex items-center justify-center mb-6 transform -rotate-6">
                        <i class="fas fa-clipboard-check text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-brand-dark">Programmes Personnalisés</h3>
                    <p class="text-gray-600">Chaque plan d'entraînement est conçu spécifiquement pour vous, en tenant compte de vos objectifs, votre niveau et vos contraintes personnelles.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-500 border-t-4 border-brand-red">
                    <div class="w-16 h-16 bg-brand-red text-white rounded-xl flex items-center justify-center mb-6 transform -rotate-6">
                        <i class="fas fa-heartbeat text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-brand-dark">Suivi Continu</h3>
                    <p class="text-gray-600">Bénéficiez d'un suivi régulier de vos progrès, avec des ajustements de programme et des conseils nutritionnels adaptés à votre évolution.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Trainers Section -->
    <section id="trainers" class="py-20 bg-brand-light">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h5 class="text-brand-red font-semibold mb-2 tracking-wider">NOTRE ÉQUIPE</h5>
                <h2 class="text-3xl font-bold mb-4 text-brand-dark">Rencontrez Nos Entraîneurs</h2>
                <p class="max-w-2xl mx-auto text-gray-600">Une équipe diversifiée d'experts passionnés, prêts à vous accompagner dans votre transformation physique.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Trainer 1 -->
                @foreach ($trainers as $trainer)
                <div class="bg-white rounded-xl shadow-lg overflow-hidden trainer-card transition duration-500">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1517838277536-f5f99be501cd" alt="Thomas Laurent" class="w-full h-80 object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-brand-dark to-transparent py-6 px-6">
                            <h3 class="text-white font-bold text-xl">{{$trainer->full_name}}</h3>
                            <p class="text-gray-300">Coach de musculation</p>
                        </div>
                        <div class="absolute top-4 right-4 flex space-x-2">
                            <a href="#" class="w-8 h-8 bg-brand-red rounded-full flex items-center justify-center text-white social-icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="w-8 h-8 bg-brand-red rounded-full flex items-center justify-center text-white social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm specialty-badge">{{$trainer->specialty}}</span>
                        </div>
                        <p class="text-gray-600 mb-4">{{$trainer->description}}</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <div class="flex text-yellow-400 mb-1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <a href="#" class="bg-brand-red hover:bg-red-700 text-white py-2 px-4 rounded-lg transition duration-300">Réserver</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

          
        </div>
    </section>

    <!-- Training Categories Section -->
  

    <!-- Booking Section -->
    <section id="booking" class="py-20 bg-brand-dark">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 mb-10 lg:mb-0 lg:pr-10">
                    <h5 class="text-brand-red font-semibold mb-2 tracking-wider">DÉMARREZ VOTRE PARCOURS</h5>
                    <h2 class="text-3xl font-bold mb-6 text-white">Réservez une Séance d'Entraînement</h2>
                    <p class="text-gray-300 mb-8">Prêt à commencer votre transformation ? Réservez une séance d'évaluation avec l'un de nos entraîneurs qualifiés pour déterminer vos objectifs et créer un plan personnalisé adapté à vos besoins.</p>
                    
                    <div class="mb-8">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-brand-red rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-comments text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold mb-1">Consultation Initiale</h4>
                                <p class="text-gray-400">Discussion sur vos objectifs et votre niveau actuel</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-brand-red rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-clipboard-list text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold mb-1">Évaluation Physique</h4>
                                <p class="text-gray-400">Analyse de votre condition physique actuelle</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-brand-red rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-dumbbell text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold mb-1">Plan Personnalisé</h4>
                                <p class="text-gray-400">Création d'un programme adapté à vos besoins</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1599566150163-29194dcaad36" alt="Client Satisfait" class="w-16 h-16 rounded-full object-cover mr-4">
                        <div>
                            <p class="text-gray-300 italic mb-2">"Depuis que j'ai commencé à m'entraîner avec GymTracker, j'ai transformé ma condition physique et ma confiance en moi."</p>
                            <p class="text-white font-semibold">Pierre Dupont, client depuis 2 ans</p>
                        </div>
                    </div>
                </div>
                
                <div class="lg:w-1/2 bg-white p-8 rounded-xl shadow-2xl">
                    <h3 class="text-2xl font-bold mb-6 text-brand-dark">Formulaire de Réservation</h3>
                    <form action="{{ route('reserver') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="mb-6">
                            <div>
                                <label for="full_name" class="block text-gray-700 mb-2">full name</label>
                                <input type="text" id="full_name" name="full_name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-brand-red">
                            </div>
                            
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 mb-2">Email</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-brand-red">
                        </div>
                        
                        <div class="mb-6">
                            <label for="trainer" class="block text-gray-700 mb-2">Entraîneur souhaité</label>
                            <select id="trainer" name="trainer_id" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-brand-red" required>
                                <option value="">Choisir un entraîneur</option>
                                @foreach ($trainers as $trainer)
                                    <option value="{{ $trainer->id }}">{{ $trainer->full_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="mb-6">
                            <label for="date" class="block text-gray-700 mb-2">Date souhaitée</label>
                            <input type="date" id="date"  name="date" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-brand-red">
                        </div>

                        <div class="mb-6">
                            <label for="time" class="block text-gray-700 mb-2">Heure souhaitée</label>
                            <input type="time" id="time" name="time" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-brand-red" required>
                        
                            @if ($errors->has('time'))
                                <p class="text-red-600 text-sm mt-1">{{ $errors->first('time') }}</p>
                            @endif
                        </div>
                        
                      
        
                        <button type="submit" class="w-full bg-brand-red hover:bg-red-700 text-white py-3 px-6 rounded-lg font-semibold transition duration-300">Réserver ma séance</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-brand-light">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h5 class="text-brand-red font-semibold mb-2 tracking-wider">TÉMOIGNAGES</h5>
                <h2 class="text-3xl font-bold mb-4 text-brand-dark">Ce Que Disent Nos Clients</h2>
                <p class="max-w-2xl mx-auto text-gray-600">Découvrez les expériences et les résultats obtenus par nos clients grâce à nos entraîneurs.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <div class="flex text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-700 mb-6 italic">"Grâce à Sarah, j'ai perdu 15 kg en 6 mois tout en me musclant. Ses programmes HIIT sont intensifs mais efficaces, et elle sait adapter chaque séance à mon niveau."</p>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2" alt="Marie Lambert" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-semibold text-brand-dark">Marie Lambert</h4>
                            <p class="text-sm text-gray-500">Cliente depuis 8 mois</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <div class="flex text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="text-gray-700 mb-6 italic">"Thomas est un coach exceptionnel qui m'a aidé à atteindre des niveaux de force que je n'aurais jamais imaginés. Sa connaissance en musculation et sa patience font toute la différence."</p>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d" alt="Antoine Dubois" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-semibold text-brand-dark">Antoine Dubois</h4>
                            <p class="text-sm text-gray-500">Client depuis 1 an</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <div class="flex text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-700 mb-6 italic">"Les séances de yoga avec Emma ont complètement transformé ma vie. Non seulement j'ai gagné en souplesse, mais mon stress a considérablement diminué. Je recommande à 100% !"</p>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1554151228-14d9def656e4" alt="Sophie Martin" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-semibold text-brand-dark">Sophie Martin</h4>
                            <p class="text-sm text-gray-500">Cliente depuis 6 mois</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-12">
                <a href="#" class="bg-brand-red hover:bg-red-700 text-white py-3 px-8 rounded-lg font-semibold transition duration-300 inline-flex items-center">
                    <span>Voir plus de témoignages</span>
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h5 class="text-brand-red font-semibold mb-2 tracking-wider">QUESTIONS FRÉQUENTES</h5>
                <h2 class="text-3xl font-bold mb-4 text-brand-dark">Tout Ce Que Vous Devez Savoir</h2>
                <p class="max-w-2xl mx-auto text-gray-600">Retrouvez les réponses aux questions les plus fréquemment posées sur nos entraîneurs et nos services.</p>
            </div>

            <div class="max-w-3xl mx-auto">
                <!-- FAQ Item 1 -->
                <div class="mb-6 border-b border-gray-200 pb-6">
                    <h3 class="text-xl font-semibold mb-3 text-brand-dark">Comment choisir le bon entraîneur pour mes objectifs ?</h3>
                    <p class="text-gray-600">Nous vous recommandons de consulter les spécialités de chaque entraîneur et de choisir celui dont l'expertise correspond le mieux à vos objectifs. Vous pouvez également réserver une séance d'évaluation où nous vous aiderons à trouver l'entraîneur idéal pour vous.</p>
                </div>

                <!-- FAQ Item 2 -->
                <div class="mb-6 border-b border-gray-200 pb-6">
                    <h3 class="text-xl font-semibold mb-3 text-brand-dark">Quelles sont les qualifications de vos entraîneurs ?</h3>
                    <p class="text-gray-600">Tous nos entraîneurs sont certifiés dans leurs domaines respectifs et possèdent au minimum 3 ans d'expérience professionnelle. Nous sélectionnons rigoureusement nos coachs pour leur expertise, leur pédagogie et leur capacité à accompagner chaque client vers ses objectifs.</p>
                </div>

                <!-- FAQ Item 3 -->
                <div class="mb-6 border-b border-gray-200 pb-6">
                    <h3 class="text-xl font-semibold mb-3 text-brand-dark">Combien coûte une séance d'entraînement ?</h3>
                    <p class="text-gray-600">Les tarifs varient selon l'entraîneur et le type de programme choisi. Une séance individuelle commence à partir de 45€, et nous proposons des forfaits avantageux pour des séances régulières. Contactez-nous pour obtenir un devis personnalisé adapté à vos besoins.</p>
                </div>

                <!-- FAQ Item 4 -->
                <div class="mb-6 border-b border-gray-200 pb-6">
                    <h3 class="text-xl font-semibold mb-3 text-brand-dark">Puis-je annuler ou reporter une séance ?</h3>
                    <p class="text-gray-600">Oui, vous pouvez annuler ou reporter une séance jusqu'à 24 heures avant l'heure prévue sans frais. Pour toute annulation tardive, la séance sera facturée à 50% de son prix. Veuillez nous contacter dès que possible pour tout changement.</p>
                </div>

                <!-- FAQ Item 5 -->
                <div>
                    <h3 class="text-xl font-semibold mb-3 text-brand-dark">Les entraîneurs proposent-ils des programmes à distance ?</h3>
                    <p class="text-gray-600">Absolument ! La plupart de nos entraîneurs proposent un suivi à distance avec des programmes personnalisés, des séances vidéo et un suivi régulier par notre application. C'est une excellente option si vous ne pouvez pas vous déplacer régulièrement ou si vous préférez vous entraîner chez vous.</p>
                </div>
            </div>

            <div class="text-center mt-12">
                <p class="text-gray-600 mb-6">Vous avez d'autres questions ? N'hésitez pas à nous contacter !</p>
                <a href="#" class="bg-brand-red hover:bg-red-700 text-white py-3 px-8 rounded-lg font-semibold transition duration-300 inline-flex items-center">
                    <i class="fas fa-envelope mr-2"></i>
                    <span>Nous contacter</span>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 bg-brand-dark relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/2 h-full opacity-10">
            <img src="https://images.unsplash.com/photo-1517838277536-f5f99be501cd" alt="Background" class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-3xl">
                <h5 class="text-brand-red font-semibold mb-4 tracking-wider">PRÊT À COMMENCER ?</h5>
                <h2 class="text-4xl md:text-5xl font-extrabold mb-6 text-white text-shadow leading-tight">TRANSFORMEZ VOTRE <span class="text-brand-red">CORPS</span> ET VOTRE <span class="text-brand-red">VIE</span> DÈS AUJOURD'HUI</h2>
                <p class="text-lg mb-10 text-gray-300 max-w-xl">Rejoignez GymTracker et laissez nos entraîneurs professionnels vous guider vers une meilleure version de vous-même.</p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="#booking" class="btn-primary bg-brand-red hover:bg-red-700 transition duration-500 py-3 px-8 rounded-lg font-semibold text-white uppercase tracking-wide text-center">Réserver maintenant</a>
                    <a href="#" class="border-2 border-white hover:border-brand-red hover:text-brand-red transition duration-300 py-3 px-8 rounded-lg font-semibold text-white uppercase tracking-wide text-center">Nos programmes</a>
                </div>
            </div>
        </div>
    </section>
    @endsection
    