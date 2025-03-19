<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'GymTracker - No Pain, No Gain')</title>
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
                    },
                    animation: {
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    }
                }
            }
        }
    </script>
    <style>
        .hero-pattern {
            background-image: url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48');
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
        .feature-card:hover {
            transform: translateY(-10px);
        }
        .testimonial-card:hover {
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
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
    @stack('styles')
</head>
<body class="bg-brand-light font-sans">
    <!-- Navigation Header -->
    @include('partials.header')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Back to top button -->
    <a href="#" class="fixed bottom-8 right-8 bg-brand-red text-white w-12 h-12 rounded-full flex items-center justify-center shadow-lg hover:bg-red-700 transition duration-300">
        <i class="fas fa-arrow-up"></i>
    </a>

    @stack('scripts')
</body>
</html>