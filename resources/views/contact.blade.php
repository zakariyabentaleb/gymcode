@extends('layouts.app')

@section('title', 'GymTracker - No Pain, No Gain')

@section('content')
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
                    },
                    animation: {
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    }
                }
            }
        }
    </script>
    <style>
        .contact-hero-pattern {
            background-image: url('https://images.unsplash.com/photo-1571902943202-507ec2618e8f');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .gradient-overlay {
            background: linear-gradient(90deg, rgba(15,17,18,0.95) 0%, rgba(15,17,18,0.8) 50%, rgba(15,17,18,0.6) 100%);
        }
        .text-shadow {
            text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
        }
        .nav-link:after {
            content: '';
            display: block;
            width: 0;
            height: 2px;
            background: #E62E2E;
            transition: width .3s;
        }
        .nav-link:hover:after {
            width: 100%;
        }
        .contact-card:hover {
            transform: translateY(-5px);
        }
        .map-container {
            filter: grayscale(100%);
            transition: filter 0.3s ease;
        }
        .map-container:hover {
            filter: grayscale(0%);
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
        .form-input:focus {
            border-color: #E62E2E;
            box-shadow: 0 0 0 3px rgba(230, 46, 46, 0.2);
        }
    </style>

<body class="bg-brand-light font-sans">
    <!-- Navigation -->
   

    <!-- Hero Section -->
    <section class="relative contact-hero-pattern pt-20">
        <div class="absolute inset-0 gradient-overlay z-10"></div>
        <div class="container mx-auto px-4 py-32 md:py-36 relative z-20">
            <div class="max-w-2xl">
                <h5 class="text-brand-red font-semibold mb-4 tracking-wider">CONTACTEZ-NOUS</h5>
                <h1 class="text-4xl md:text-5xl font-extrabold mb-6 text-white text-shadow leading-tight">BESOIN D'<span class="text-brand-red">AIDE ?</span><br>NOUS SOMMES LÀ POUR VOUS</h1>
                <p class="text-lg mb-10 text-gray-200 max-w-xl">Une question sur nos programmes ou nos services ? Notre équipe est prête à vous aider. Contactez-nous dès aujourd'hui.</p>
            </div>
        </div>
    </section>

    <!-- Contact Info Cards Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 -mt-20 relative z-30">
                <!-- Card 1 -->
                <div class="bg-white rounded-xl shadow-xl p-8 text-center contact-card transition duration-500">
                    <div class="w-16 h-16 bg-brand-red text-white rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-map-marker-alt text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-brand-dark">Notre Adresse</h3>
                    <p class="text-gray-600">123 Rue du Fitness<br>75001 Paris, France</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-xl shadow-xl p-8 text-center contact-card transition duration-500">
                    <div class="w-16 h-16 bg-brand-red text-white rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-phone text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-brand-dark">Téléphone & Email</h3>
                    <p class="text-gray-600">+33 1 23 45 67 89<br>contact@gymtracker.com</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-xl shadow-xl p-8 text-center contact-card transition duration-500">
                    <div class="w-16 h-16 bg-brand-red text-white rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-clock text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-brand-dark">Heures d'ouverture</h3>
                    <p class="text-gray-600">Lun-Ven: 8h-20h<br>Sam: 9h-18h | Dim: Fermé</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form & Map Section -->
    <section class="py-16 bg-brand-light">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h5 class="text-brand-red font-semibold mb-2 tracking-wider">ÉCRIVEZ-NOUS</h5>
                <h2 class="text-3xl font-bold mb-4 text-brand-dark">Envoyez-nous un message</h2>
                <p class="max-w-2xl mx-auto text-gray-600">Remplissez le formulaire ci-dessous et notre équipe vous répondra dans les plus brefs délais.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <form>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="name">Nom complet</label>
                                <input type="text" id="name" class="form-input w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none transition duration-300" placeholder="Votre nom">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="email">Email</label>
                                <input type="email" id="email" class="form-input w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none transition duration-300" placeholder="Votre email">
                            </div>
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 font-medium mb-2" for="phone">Téléphone</label>
                            <input type="tel" id="phone" class="form-input w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none transition duration-300" placeholder="Votre numéro de téléphone">
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 font-medium mb-2" for="subject">Sujet</label>
                            <select id="subject" class="form-input w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none transition duration-300">
                                <option value="">Sélectionnez un sujet</option>
                                <option value="subscription">Abonnement</option>
                                <option value="training">Programme d'entraînement</option>
                                <option value="coach">Entraîneur personnel</option>
                                <option value="technical">Support technique</option>
                                <option value="other">Autre</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 font-medium mb-2" for="message">Message</label>
                            <textarea id="message" rows="5" class="form-input w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none transition duration-300" placeholder="Votre message"></textarea>
                        </div>
                        <div class="mb-6">
                            <label class="flex items-center text-gray-700">
                                <input type="checkbox" class="mr-2 form-checkbox text-brand-red">
                                J'accepte les conditions générales et la politique de confidentialité
                            </label>
                        </div>
                        <button type="submit" class="btn-primary bg-brand-red hover:bg-red-700 transition duration-500 py-3 px-8 rounded-lg font-semibold text-white w-full">Envoyer le message</button>
                    </form>
                </div>

                <!-- Map -->
                <div class="h-full">
                    <div class="bg-white p-4 rounded-xl shadow-lg h-full">
                        <div class="map-container h-full rounded-lg overflow-hidden">
                            <!-- Replace with your Google Maps embed code -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9916256937554!2d2.3417314!3d48.858370299999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis%2C%20France!5e0!3m2!1sen!2sus!4v1648549882712!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h5 class="text-brand-red font-semibold mb-2 tracking-wider">FAQ</h5>
                <h2 class="text-3xl font-bold mb-4 text-brand-dark">Questions fréquemment posées</h2>
                <p class="max-w-2xl mx-auto text-gray-600">Retrouvez les réponses aux questions les plus fréquentes concernant nos services.</p>
            </div>

            <div class="max-w-3xl mx-auto">
                <!-- FAQ Item 1 -->
                <div class="mb-6 border-b border-gray-200 pb-6">
                    <h3 class="text-xl font-semibold mb-2 text-brand-dark flex items-center">
                        <i class="fas fa-circle text-brand-red text-xs mr-2"></i>
                        Comment puis-je m'inscrire à GymTracker ?
                    </h3>
                    <p class="text-gray-600 pl-6">L'inscription à GymTracker est simple. Cliquez sur le bouton "S'inscrire" en haut de la page, puis suivez les instructions pour créer votre compte. Vous pouvez également télécharger notre application mobile pour une expérience optimale.</p>
                </div>

                <!-- FAQ Item 2 -->
                <div class="mb-6 border-b border-gray-200 pb-6">
                    <h3 class="text-xl font-semibold mb-2 text-brand-dark flex items-center">
                        <i class="fas fa-circle text-brand-red text-xs mr-2"></i>
                        Comment fonctionne la réservation des séances ?
                    </h3>
                    <p class="text-gray-600 pl-6">Une fois connecté à votre compte, accédez à la section "Réservations", choisissez le type de séance, la date et l'heure qui vous conviennent, puis confirmez votre réservation. Vous recevrez une confirmation par email ainsi qu'un rappel avant votre séance.</p>
                </div>

                <!-- FAQ Item 3 -->
                <div class="mb-6 border-b border-gray-200 pb-6">
                    <h3 class="text-xl font-semibold mb-2 text-brand-dark flex items-center">
                        <i class="fas fa-circle text-brand-red text-xs mr-2"></i>
                        Est-il possible d'annuler une séance réservée ?
                    </h3>
                    <p class="text-gray-600 pl-6">Oui, vous pouvez annuler une séance jusqu'à 6 heures avant l'heure prévue sans frais. Passé ce délai, la séance sera décomptée de votre forfait. Pour annuler, rendez-vous dans la section "Mes réservations" et cliquez sur "Annuler".</p>
                </div>

                <!-- FAQ Item 4 -->
                <div class="mb-6 border-b border-gray-200 pb-6">
                    <h3 class="text-xl font-semibold mb-2 text-brand-dark flex items-center">
                        <i class="fas fa-circle text-brand-red text-xs mr-2"></i>
                        Comment choisir un entraîneur personnel ?
                    </h3>
                    <p class="text-gray-600 pl-6">Dans la section "Entraîneurs", vous pouvez consulter les profils de nos coachs, leurs spécialités et disponibilités. Sélectionnez celui qui correspond le mieux à vos objectifs et réservez une séance d'évaluation initiale pour discuter de votre programme personnalisé.</p>
                </div>

                <!-- FAQ Item 5 -->
                <div class="mb-6">
                    <h3 class="text-xl font-semibold mb-2 text-brand-dark flex items-center">
                        <i class="fas fa-circle text-brand-red text-xs mr-2"></i>
                        Quels sont les différents forfaits disponibles ?
                    </h3>
                    <p class="text-gray-600 pl-6">Nous proposons plusieurs forfaits adaptés à vos besoins : forfait Découverte, Standard et Premium. Chaque forfait offre différents avantages, comme l'accès illimité aux salles, des séances avec coach personnel, ou des programmes nutrition. Consultez notre page "Tarifs" pour plus de détails.</p>
                </div>
            </div>

            <div class="text-center mt-10">
                <p class="text-gray-600 mb-6">Vous n'avez pas trouvé la réponse à votre question ?</p>
                <a href="#" class="bg-brand-red hover:bg-red-700 transition duration-300 py-3 px-8 rounded-lg font-semibold text-white inline-block">Posez votre question</a>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 bg-brand-dark text-white">
        <div class="container mx-auto px-4 text-center">
            <div class="max-w-2xl mx-auto">
                <h5 class="font-semibold mb-2 tracking-wider">RESTEZ INFORMÉ</h5>
                <h2 class="text-3xl font-bold mb-6">Inscrivez-vous à notre newsletter</h2>
                <p class="mb-8 text-gray-300">Recevez nos dernières actualités, conseils fitness et offres exclusives directement dans votre boîte de réception.</p>
                <div class="flex flex-col md:flex-row">
                    <input type="email" placeholder="Votre adresse email" class="md:flex-1 px-4 py-3 rounded-l-lg focus:outline-none">
                    <button class="bg-brand-red hover:bg-red-700 transition duration-300 py-3 px-6 md:px-8 rounded-lg md:rounded-l-none font-semibold mt-4 md:mt-0">S'inscrire</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
  

    <!-- Back to top button -->
    <a href="#" class="fixed bottom-8 right-8 bg-brand-red text-white w-12 h-12 rounded-full flex items-center justify-center shadow-lg hover:bg-red-700 transition duration-300">
        <i class="fas fa-arrow-up"></i>
    </a>
</body>
</html>
@endsection