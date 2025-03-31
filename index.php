<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TileVerse: Match Paradise 3D</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel='icon' href='/src/icons/logo.png' type='image/x-icon'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nova+Round&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: "Nova Round", serif;
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .header-bg {
            position: relative;
            overflow: hidden;
        }

        .header-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(172, 1, 28, 0.03) 0%, rgba(45, 0, 1, 0.03) 100%);
            z-index: -1;
        }

        .square {
            position: absolute;
            background: rgba(172, 1, 28, 0.05);
            border-radius: 4px;
            animation: float 6s ease-in-out infinite;
        }

        .square:nth-child(1) {
            top: 10%;
            left: 5%;
            width: 20px;
            height: 20px;
        }

        .square:nth-child(2) {
            top: 40%;
            left: 25%;
            width: 15px;
            height: 15px;
            animation-delay: -1s;
        }

        .square:nth-child(3) {
            top: 20%;
            left: 45%;
            width: 25px;
            height: 25px;
            animation-delay: -2s;
        }

        .square:nth-child(4) {
            top: 15%;
            left: 65%;
            width: 18px;
            height: 18px;
            animation-delay: -3s;
        }

        .square:nth-child(5) {
            top: 35%;
            left: 85%;
            width: 22px;
            height: 22px;
            animation-delay: -4s;
        }

        .burger {
            cursor: pointer;
            width: 30px;
            height: 20px;
            position: relative;
            transition: 0.3s;
        }

        .burger-line {
            position: absolute;
            width: 100%;
            height: 2px;
            background-color: #2D0001;
            transition: 0.3s;
        }

        .burger-line:nth-child(1) {
            top: 0;
        }

        .burger-line:nth-child(2) {
            top: 50%;
            transform: translateY(-50%);
        }

        .burger-line:nth-child(3) {
            bottom: 0;
        }

        .burger.active .burger-line:nth-child(1) {
            transform: translateY(9px) rotate(45deg);
        }

        .burger.active .burger-line:nth-child(2) {
            opacity: 0;
        }

        .burger.active .burger-line:nth-child(3) {
            transform: translateY(-9px) rotate(-45deg);
        }

        .mobile-menu {
            position: fixed;
            top: 72px;
            left: 0;
            right: 0;
            background: white;
            padding: 1rem;
            transform: translateY(-135%);
            transition: transform 0.3s ease-in-out;
            z-index: 40;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .mobile-menu.active {
            transform: translateY(0);
        }

        @keyframes float {
            0% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-10px) rotate(5deg);
            }

            100% {
                transform: translateY(0) rotate(0deg);
            }
        }






















        .hero-section {
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #fff 0%, #f8f8f8 100%);
        }

        .hero-pattern {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0.1;
            background-image: radial-gradient(#AC011C 1px, transparent 1px),
                radial-gradient(#2D0001 1px, transparent 1px);
            background-size: 50px 50px;
            background-position: 0 0, 25px 25px;
        }

        .floating-shape {
            position: absolute;
            background: linear-gradient(45deg, rgba(172, 1, 28, 0.1), rgba(45, 0, 1, 0.1));
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            animation: morphing 15s ease-in-out infinite;
        }

        @keyframes morphing {
            0% {
                border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            }

            50% {
                border-radius: 70% 30% 30% 70% / 70% 70% 30% 30%;
            }

            100% {
                border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            }
        }

        .stats-card {
            backdrop-filter: blur(8px);
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .game-preview {
            position: relative;
            transform-style: preserve-3d;
            animation: float 6s ease-in-out infinite;
        }

        .game-preview::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 5%;
            width: 90%;
            height: 20px;
            background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0) 80%);
            filter: blur(5px);
        }

        @keyframes float {
            0% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(2deg);
            }

            100% {
                transform: translateY(0) rotate(0deg);
            }
        }

        .features-grid {
            position: relative;
            background-image:
                linear-gradient(rgba(45, 0, 1, 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(45, 0, 1, 0.05) 1px, transparent 1px);
            background-size: 20px 20px;
            background-color: white;
        }

        .features-grid::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image:
                linear-gradient(rgba(172, 1, 28, 0.1) 2px, transparent 2px),
                linear-gradient(90deg, rgba(172, 1, 28, 0.1) 2px, transparent 2px);
            background-size: 100px 100px;
            z-index: 0;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(5px);
            transition: all 0.3s ease;
            position: relative;
            z-index: 1;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: inherit;
            background: linear-gradient(45deg, rgba(172, 1, 28, 0.1), rgba(45, 0, 1, 0.1));
            z-index: -1;
            transition: opacity 0.3s ease;
            opacity: 0;
        }

        .feature-card:hover::before {
            opacity: 1;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .game-description {
            position: relative;
            border-left: 4px solid #AC011C;
            padding-left: 2rem;
            margin: 3rem 0;
        }

        .game-description::before {
            content: '"';
            position: absolute;
            left: -2rem;
            top: -2rem;
            font-size: 8rem;
            color: rgba(172, 1, 28, 0.1);
            font-family: serif;
            line-height: 1;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .gameplay-section {
            background: linear-gradient(135deg, #2D0001, #AC011C);
            position: relative;
            overflow: hidden;
        }

        .gameplay-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.1;
            background-image:
                repeating-linear-gradient(45deg,
                    #fff 0,
                    #fff 1px,
                    transparent 1px,
                    transparent 50%),
                repeating-linear-gradient(135deg,
                    #fff 0,
                    #fff 1px,
                    transparent 1px,
                    transparent 50%);
            background-size: 30px 30px;
        }

        .gameplay-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .gameplay-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.15);
        }

        .gameplay-image {
            position: relative;
            transition: all 0.3s ease;
        }

        .gameplay-image::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 10%;
            width: 80%;
            height: 20px;
            background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.3) 0%, transparent 70%);
            filter: blur(5px);
        }

        .feature-icon {
            width: 48px;
            height: 48px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }

        .download-section {
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #fff 0%, #f8f8f8 100%);
        }

        .download-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: radial-gradient(#AC011C 1px, transparent 1px);
            background-size: 40px 40px;
            opacity: 0.05;
        }

        .download-card {
            position: relative;
            background: white;
            border: 1px solid rgba(172, 1, 28, 0.1);
            transition: all 0.3s ease;
        }

        .download-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(45deg, rgba(172, 1, 28, 0.1), rgba(45, 0, 1, 0.1));
            border-radius: inherit;
            z-index: 0;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .download-card:hover::before {
            opacity: 1;
        }

        .download-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .stats-badge {
            background: rgba(172, 1, 28, 0.1);
            border-radius: 20px;
            padding: 0.5rem 1rem;
            color: #AC011C;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .gallery-section {
            position: relative;
            background: linear-gradient(to bottom, #fff, #f8f8f8);
            overflow: hidden;
        }

        .carousel-container {
            position: relative;
            overflow: hidden;
            padding: 0 48px;
        }

        .carousel-track {
            display: flex;
            transition: transform 0.5s ease-in-out;
            gap: 20px;
        }

        .carousel-slide {
            min-width: calc(100% - 40px);
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        @media (min-width: 640px) {
            .carousel-slide {
                min-width: calc(50% - 30px);
            }
        }

        @media (min-width: 1024px) {
            .carousel-slide {
                min-width: calc(33.333% - 27px);
            }
        }

        .carousel-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .carousel-slide:hover img {
            transform: scale(1.05);
        }

        .carousel-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(172, 1, 28, 0.9);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 10;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .carousel-button:hover {
            background: #2D0001;
            transform: translateY(-50%) scale(1.1);
        }

        .carousel-button.prev {
            left: 4px;
        }

        .carousel-button.next {
            right: 4px;
        }

        .carousel-dots {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin-top: 20px;
        }

        .carousel-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: rgba(172, 1, 28, 0.3);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .carousel-dot.active {
            background: #AC011C;
            transform: scale(1.2);
        }

        .slide-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 20px;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
            color: white;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .carousel-slide:hover .slide-overlay {
            opacity: 1;
        }

        .contact-section {
            position: relative;
            background: linear-gradient(135deg, #fff 0%, #f8f8f8 100%);
            overflow: hidden;
        }

        .contact-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background:
                radial-gradient(circle at 20% 20%, rgba(172, 1, 28, 0.03) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(45, 0, 1, 0.03) 0%, transparent 50%);
            pointer-events: none;
        }

        .contact-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(172, 1, 28, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .input-group {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .input-group label {
            position: absolute;
            left: 1rem;
            top: 0.75rem;
            color: #666;
            transition: all 0.2s ease;
            pointer-events: none;
            padding: 0 0.5rem;
            background: white;
        }

        .input-group input:focus~label,
        .input-group input:not(:placeholder-shown)~label {
            top: -0.5rem;
            left: 0.5rem;
            font-size: 0.875rem;
            color: #AC011C;
        }

        .custom-input {
            width: 100%;
            padding: 1rem;
            border: 2px solid rgba(172, 1, 28, 0.2);
            border-radius: 0.75rem;
            transition: all 0.3s ease;
            background: white;
        }

        .custom-input:focus {
            border-color: #AC011C;
            box-shadow: 0 0 0 3px rgba(172, 1, 28, 0.1);
            outline: none;
        }

        .submit-button {
            position: relative;
            overflow: hidden;
        }

        .submit-button::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.6s ease, height 0.6s ease;
        }

        .submit-button:hover::after {
            width: 300px;
            height: 300px;
        }

        .footer-section {
            background: linear-gradient(135deg, #2D0001 0%, #1a0001 100%);
            position: relative;
            overflow: hidden;
        }

        .footer-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: radial-gradient(circle at 50% 50%, rgba(172, 1, 28, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }

        .footer-link {
            position: relative;
            display: inline-block;
            transition: color 0.3s ease;
        }

        .footer-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: #AC011C;
            transition: width 0.3s ease;
        }

        .footer-link:hover::after {
            width: 100%;
        }

        .footer-logo {
            transition: transform 0.3s ease;
        }

        .footer-logo:hover {
            transform: scale(1.05);
        }

        .footer-divider {
            height: 1px;
            background: linear-gradient(to right,
                    transparent,
                    rgba(172, 1, 28, 0.5),
                    transparent);
        }
    </style>
</head>

<body class="bg-white">
    <header class="fixed w-full top-0 z-50 bg-white shadow-lg header-bg">
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>

        <nav class="container mx-auto px-4 py-3 flex items-center justify-between">
            <a href="/" class="flex items-center gap-3 z-10">
                <img src="/src/icons/logo.png" alt="TileVerse Logo" class="h-12 w-12 rounded-lg">
                <span class="text-[#AC011C] font-bold text-2xl">TileVerse</span>
            </a>

            <div class="hidden md:flex gap-6">
                <a href="#features" class="text-[#2D0001] hover:text-[#AC011C] transition-colors">Features</a>
                <a href="#gameplay" class="text-[#2D0001] hover:text-[#AC011C] transition-colors">Gameplay</a>
                <a href="#download" class="text-[#2D0001] hover:text-[#AC011C] transition-colors">Download</a>
                <a href="#gallery" class="text-[#2D0001] hover:text-[#AC011C] transition-colors">Gallery</a>
            </div>

            <div class="burger md:hidden z-10">
                <div class="burger-line"></div>
                <div class="burger-line"></div>
                <div class="burger-line"></div>
            </div>
        </nav>

        <div class="mobile-menu md:hidden">
            <div class="flex flex-col gap-4">
                <a href="#features" class="text-[#2D0001] hover:text-[#AC011C] transition-colors py-2">Features</a>
                <a href="#gameplay" class="text-[#2D0001] hover:text-[#AC011C] transition-colors py-2">Gameplay</a>
                <a href="#download" class="text-[#2D0001] hover:text-[#AC011C] transition-colors py-2">Download</a>
                <a href="#gallery" class="text-[#2D0001] hover:text-[#AC011C] transition-colors py-2">Gallery</a>
            </div>
        </div>
    </header>

    <section class="hero-section pt-28 pb-16">
        <div class="hero-pattern"></div>
        <div class="floating-shape w-96 h-96 -left-48 top-0 opacity-50"></div>
        <div class="floating-shape w-72 h-72 right-0 bottom-0 opacity-30"></div>

        <div class="container mx-auto px-4 py-16 relative">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2 z-10">
                    <div class="mb-6">
                        <h1 class="text-4xl md:text-6xl font-bold text-[#2D0001] mb-4 leading-tight">
                            Welcome to<br />
                            <span class="text-[#AC011C]">TileVerse</span>
                        </h1>
                        <p class="text-lg mb-6 text-gray-700">Immerse yourself in a mesmerizing 3D puzzle adventure where matching meets paradise!</p>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-8">
                        <div class="stats-card p-4 rounded-xl text-center">
                            <div class="flex items-center justify-center mb-2">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-2xl font-bold ml-2">4.4</span>
                            </div>
                            <p class="text-sm text-gray-600">1,920 reviews</p>
                        </div>
                        <div class="stats-card p-4 rounded-xl text-center">
                            <div class="text-2xl font-bold mb-2">100K+</div>
                            <p class="text-sm text-gray-600">Downloads</p>
                        </div>
                        <div class="stats-card p-4 rounded-xl text-center">
                            <div class="flex items-center justify-center mb-2">
                                <i class="fas fa-gamepad text-[#AC011C] text-2xl"></i>
                            </div>
                            <p class="text-sm text-gray-600">Ages 3+</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <a href="https://play.google.com/store/apps/details?id=games.elia.mm&pcampaignid=web_share" target="_blank" class="bg-[#AC011C] text-white px-8 py-3 rounded-lg hover:bg-[#2D0001] transition-colors flex items-center">
                            <i class="fas fa-play mr-2"></i>
                            Play Now
                        </a>
                        <a href="#features" class="border-2 border-[#AC011C] text-[#AC011C] px-8 py-3 rounded-lg hover:bg-[#AC011C] hover:text-white transition-colors flex items-center">
                            <i class="fas fa-info-circle mr-2"></i>
                            Learn More
                        </a>
                    </div>
                </div>

                <div class="md:w-1/2 z-10">
                    <div class="game-preview">
                        <img src="/src/img/main.png" alt="Game Preview" class="rounded-xl shadow-2xl">
                        <div class="absolute -right-4 -top-4 bg-white p-3 rounded-lg shadow-lg stats-card">
                            <div class="flex items-center gap-2">
                                <i class="fas fa-award text-[#AC011C] text-xl"></i>
                                <span class="font-semibold">#1 Puzzle Game</span>
                            </div>
                        </div>
                        <div class="absolute -left-4 -bottom-4 bg-white p-3 rounded-lg shadow-lg stats-card">
                            <div class="flex items-center gap-2">
                                <i class="fas fa-users text-[#AC011C] text-xl"></i>
                                <span class="font-semibold">1M+ Players</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="features-grid py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-5xl font-bold text-center text-[#2D0001] mb-16 relative">
                Amazing Features
                <div class="absolute w-24 h-1 bg-[#AC011C] bottom-0 left-1/2 transform -translate-x-1/2 mt-4"></div>
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <div class="feature-card p-8 rounded-2xl shadow-lg">
                    <div class="w-16 h-16 bg-[#AC011C] rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-cube text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-[#2D0001]">3D Gameplay</h3>
                    <p class="text-gray-700 leading-relaxed">Experience stunning 3D graphics and smooth animations in this immersive matching adventure.</p>
                </div>

                <div class="feature-card p-8 rounded-2xl shadow-lg">
                    <div class="w-16 h-16 bg-[#AC011C] rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-trophy text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-[#2D0001]">1000+ Levels</h3>
                    <p class="text-gray-700 leading-relaxed">Challenge yourself with countless uniquely designed levels that test your matching skills.</p>
                </div>

                <div class="feature-card p-8 rounded-2xl shadow-lg">
                    <div class="w-16 h-16 bg-[#AC011C] rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-users text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-[#2D0001]">Social Features</h3>
                    <p class="text-gray-700 leading-relaxed">Connect with friends, share achievements, and compete on global leaderboards.</p>
                </div>
            </div>

            <div class="game-description max-w-4xl mx-auto bg-white/90 p-8 rounded-2xl shadow-lg">
                <h3 class="text-2xl md:text-3xl font-bold text-[#2D0001] mb-6">Discover Match Paradise 3D</h3>

                <div class="space-y-6 text-gray-700 leading-relaxed">
                    <p class="text-lg">
                        Welcome to Match Paradise 3D - the ultimate puzzle game that will challenge your mind and keep you entertained for hours! With beautifully crafted 3D levels and fun challenges, this game is perfect for anyone who loves sorting and matching tiles.
                    </p>

                    <div class="flex items-start gap-6 mb-6">
                        <div class="w-12 h-12 bg-[#AC011C] rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-puzzle-piece text-2xl text-white"></i>
                        </div>
                        <p>Your mission is simple - tap three matching tiles and connect them into triples. Continue sorting and matching objects until you clear all tiles from the screen. But be quick, as each level has a timer, and you need to move fast to win more stars!</p>
                    </div>

                    <div class="flex items-start gap-6">
                        <div class="w-12 h-12 bg-[#AC011C] rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-clock text-2xl text-white"></i>
                        </div>
                        <p>Don't worry though, Match Paradise 3D is a relaxing and fun tile-matching game that you can play anywhere, anytime. Whether you're on a long car ride or waiting for an appointment, this game will be the perfect way to pass the time.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="gameplay" class="gameplay-section py-20">
        <div class="gameplay-pattern"></div>

        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-5xl font-bold text-center text-white mb-16 relative">
                Discover the Gameplay
                <div class="w-24 h-1 bg-white mx-auto mt-4"></div>
            </h2>

            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="gameplay-image md:w-1/2">
                    <img src="/src/img/gameplay.png" alt="Gameplay Screenshot" class="rounded-2xl shadow-2xl w-full">
                </div>

                <div class="md:w-1/2 space-y-8">
                    <div class="gameplay-card p-6 rounded-xl">
                        <div class="feature-icon">
                            <i class="fas fa-puzzle-piece text-2xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Match & Clear Challenge</h3>
                        <p class="text-gray-200">Touch three identical tiles to create matches and clear them from the board. Race against time to earn more stars and achieve higher scores!</p>
                    </div>

                    <div class="gameplay-card p-6 rounded-xl">
                        <div class="feature-icon">
                            <i class="fas fa-bolt text-2xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Power-ups & Boosters</h3>
                        <p class="text-gray-200">Use amazing boosters to help sort objects and clear challenging levels. Try the Shuffle feature to rearrange tiles and discover hidden matches!</p>
                    </div>

                    <div class="gameplay-card p-6 rounded-xl">
                        <div class="feature-icon">
                            <i class="fas fa-brain text-2xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Brain Training Fun</h3>
                        <p class="text-gray-200">Perfect for Mahjong and Solitaire lovers! Train your brain while enjoying endless excitement finding hidden objects and completing missions.</p>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <section id="download" class="download-section py-20">
        <div class="download-pattern"></div>

        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-bold text-[#2D0001] mb-6">
                    Download Now
                </h2>
                <p class="text-gray-600 text-lg mb-8">Join millions of players worldwide and start your matching adventure today!</p>

                <div class="flex justify-center gap-6 mb-12">
                    <div class="stats-badge">
                        <i class="fas fa-star text-[#AC011C]"></i>
                        <span>4.4 Rating</span>
                    </div>
                    <div class="stats-badge">
                        <i class="fas fa-download text-[#AC011C]"></i>
                        <span>100K+ Downloads</span>
                    </div>
                </div>

                <div class="download-card p-8 rounded-2xl shadow-lg max-w-md mx-auto">
                    <h3 class="text-2xl font-bold text-[#2D0001] mb-4">Available on Google Play</h3>
                    <p class="text-gray-600 mb-6">Download for free and start matching!</p>

                    <a href="https://play.google.com/store/apps/details?id=games.elia.mm&pcampaignid=web_share" target="_blank" class="flex items-center justify-center gap-4 bg-black text-white px-8 py-4 rounded-xl hover:bg-gray-800 transition-colors relative z-10">
                        <i class="fab fa-google-play text-3xl"></i>
                        <div class="text-left">
                            <div class="text-sm opacity-75">Get it on</div>
                            <div class="text-xl font-bold">Google Play</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="gallery" class="gallery-section py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl md:text-5xl font-bold text-center text-[#2D0001] mb-12">
                Game Gallery
                <div class="w-24 h-1 bg-[#AC011C] mx-auto mt-4"></div>
            </h2>

            <div class="carousel-container">
                <button class="carousel-button prev">
                    <i class="fas fa-chevron-left"></i>
                </button>

                <div class="carousel-track">
                    <div class="carousel-slide">
                        <img src="/src/img/gallery1.png" alt="Gameplay 1">
                        <div class="slide-overlay">
                            <h3 class="font-bold mb-2">Amazing Levels</h3>
                            <p class="text-sm">Experience beautifully designed 3D puzzle levels</p>
                        </div>
                    </div>
                    <div class="carousel-slide">
                        <img src="/src/img/gallery2.png" alt="Gameplay 2">
                        <div class="slide-overlay">
                            <h3 class="font-bold mb-2">Power-ups</h3>
                            <p class="text-sm">Use special boosters to clear challenging levels</p>
                        </div>
                    </div>
                    <div class="carousel-slide">
                        <img src="/src/img/gallery3.png" alt="Gameplay 3">
                        <div class="slide-overlay">
                            <h3 class="font-bold mb-2">Daily Challenges</h3>
                            <p class="text-sm">New exciting puzzles every day</p>
                        </div>
                    </div>
                    <div class="carousel-slide">
                        <img src="/src/img/gallery1.png" alt="Gameplay 4">
                        <div class="slide-overlay">
                            <h3 class="font-bold mb-2">Special Events</h3>
                            <p class="text-sm">Participate in themed events and win rewards</p>
                        </div>
                    </div>
                    <div class="carousel-slide">
                        <img src="/src/img/gallery2.png" alt="Gameplay 5">
                        <div class="slide-overlay">
                            <h3 class="font-bold mb-2">Achievements</h3>
                            <p class="text-sm">Complete missions and earn special badges</p>
                        </div>
                    </div>
                    <div class="carousel-slide">
                        <img src="/src/img/gallery3.png" alt="Gameplay 6">
                        <div class="slide-overlay">
                            <h3 class="font-bold mb-2">Leaderboards</h3>
                            <p class="text-sm">Compete with players worldwide</p>
                        </div>
                    </div>
                    <div class="carousel-slide">
                        <img src="/src/img/gallery4.png" alt="Gameplay 7">
                        <div class="slide-overlay">
                            <h3 class="font-bold mb-2">Multiplayer</h3>
                            <p class="text-sm">Play with friends in real-time matches</p>
                        </div>
                    </div>
                    <div class="carousel-slide">
                        <img src="/src/img/gallery1.png" alt="Gameplay 8">
                        <div class="slide-overlay">
                            <h3 class="font-bold mb-2">Rewards</h3>
                            <p class="text-sm">Unlock special items and customizations</p>
                        </div>
                    </div>
                </div>

                <button class="carousel-button next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>

            <div class="carousel-dots"></div>
        </div>
    </section>
    <section id="contact" class="contact-section py-20">
        <div class="contact-pattern"></div>

        <div class="container mx-auto px-4">
            <div class="max-w-2xl mx-auto text-center mb-12">
                <span class="text-[#AC011C] font-semibold mb-4 block">Get in Touch</span>
                <h2 class="text-3xl md:text-4xl font-bold text-[#2D0001] mb-6">Contact Us</h2>
                <p class="text-gray-600 text-lg leading-relaxed">
                    Have questions about Match Paradise 3D? Don't hesitate to reach out!
                    Our team is here to help you with any inquiries, feedback, or support needs.
                </p>
            </div>

            <div class="contact-card max-w-xl mx-auto rounded-2xl p-8 md:p-10">
                <form action="/thanks118/" method="POST" class="space-y-6">
                    <div class="input-group">
                        <input type="text" id="name" name="name" required
                            class="custom-input" placeholder=" ">
                        <label for="name">Your Name</label>
                    </div>

                    <div class="input-group">
                        <input type="email" id="email" name="email" required
                            class="custom-input" placeholder=" ">
                        <label for="email">Email Address</label>
                    </div>

                    <div class="input-group">
                        <input type="tel" id="phone" name="phone" required
                            class="custom-input" placeholder=" ">
                        <label for="phone">Phone Number</label>
                    </div>

                    <div class="input-group">
                        <textarea id="message" name="message" required
                            class="custom-input min-h-[120px] resize-none" placeholder=" "></textarea>
                        <label for="message">Your Message</label>
                    </div>

                    <button type="submit"
                        class="submit-button w-full bg-[#AC011C] text-white py-4 rounded-xl font-semibold hover:bg-[#2D0001] transition-colors relative overflow-hidden">
                        Send Message
                        <i class="fas fa-paper-plane ml-2"></i>
                    </button>
                </form>

                <div class="mt-8 pt-8 border-t border-gray-200">
                    <div class="flex flex-col md:flex-row justify-center gap-6 text-center">
                        <div class="flex items-center gap-3 justify-center">
                            <i class="fas fa-clock text-[#AC011C]"></i>
                            <span class="text-gray-600">Response within 24 hours</span>
                        </div>
                        <div class="flex items-center gap-3 justify-center">
                            <i class="fas fa-shield-alt text-[#AC011C]"></i>
                            <span class="text-gray-600">Your data is secure</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-section py-16">
        <div class="footer-pattern"></div>

        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
                <div class="flex flex-col items-center md:items-start">
                    <a href="/" class="footer-logo flex items-center gap-4 mb-6">
                        <img src="/src/icons/logo.png" alt="TileVerse Logo" class="w-12 h-12 rounded-lg">
                        <span class="text-2xl font-bold text-white">TileVerse</span>
                    </a>
                    <p class="text-gray-400 text-center md:text-left">
                        The ultimate 3D matching puzzle adventure. Join millions of players in this exciting journey of matching and solving puzzles.
                    </p>
                </div>

                <div class="text-center md:text-left">
                    <h3 class="text-xl font-bold mb-6 text-white">Quick Links</h3>
                    <ul class="space-y-4">
                        <li>
                            <a href="#features" class="footer-link text-gray-400 hover:text-white">Features</a>
                        </li>
                        <li>
                            <a href="#gameplay" class="footer-link text-gray-400 hover:text-white">Gameplay</a>
                        </li>
                        <li>
                            <a href="#download" class="footer-link text-gray-400 hover:text-white">Download</a>
                        </li>
                        <li>
                            <a href="#contact" class="footer-link text-gray-400 hover:text-white">Contact Us</a>
                        </li>
                    </ul>
                </div>

                <div class="text-center md:text-left">
                    <h3 class="text-xl font-bold mb-6 text-white">Legal</h3>
                    <ul class="space-y-4">
                        <li>
                            <a href="/Privacy16/" class="footer-link text-gray-400 hover:text-white">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="/Terms92/" class="footer-link text-gray-400 hover:text-white">Terms of Service</a>
                        </li>
                        <li>
                            <a href="/Cookie24/" class="footer-link text-gray-400 hover:text-white">Cookie Policy</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer-divider mb-8"></div>

            <div class="text-center">
                <p class="text-gray-400">&copy; 2025 TileVerse. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const burger = document.querySelector('.burger');
            const mobileMenu = document.querySelector('.mobile-menu');
            const mobileLinks = document.querySelectorAll('.mobile-menu a');

            function toggleMenu() {
                burger.classList.toggle('active');
                mobileMenu.classList.toggle('active');
            }

            burger.addEventListener('click', toggleMenu);

            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    burger.classList.remove('active');
                    mobileMenu.classList.remove('active');
                });
            });
        });




        document.addEventListener('DOMContentLoaded', function() {
            const track = document.querySelector('.carousel-track');
            const slides = document.querySelectorAll('.carousel-slide');
            const prevButton = document.querySelector('.carousel-button.prev');
            const nextButton = document.querySelector('.carousel-button.next');
            const dotsContainer = document.querySelector('.carousel-dots');

            let currentIndex = 0;
            let slidesPerView = 1;

            // Create dots
            slides.forEach((_, index) => {
                const dot = document.createElement('div');
                dot.classList.add('carousel-dot');
                if (index === 0) dot.classList.add('active');
                dot.addEventListener('click', () => goToSlide(index));
                dotsContainer.appendChild(dot);
            });

            function updateSlidesPerView() {
                if (window.innerWidth >= 1024) {
                    slidesPerView = 3;
                } else if (window.innerWidth >= 640) {
                    slidesPerView = 2;
                } else {
                    slidesPerView = 1;
                }
            }

            function updateSlidePosition() {
                const slideWidth = slides[0].offsetWidth + 20; // Include gap
                track.style.transform = `translateX(-${currentIndex * slideWidth}px)`;

                // Update dots
                document.querySelectorAll('.carousel-dot').forEach((dot, index) => {
                    dot.classList.toggle('active', index === currentIndex);
                });
            }

            function goToSlide(index) {
                currentIndex = index;
                updateSlidePosition();
            }

            function nextSlide() {
                const maxIndex = slides.length - slidesPerView;
                currentIndex = currentIndex >= maxIndex ? 0 : currentIndex + 1;
                updateSlidePosition();
            }

            function prevSlide() {
                const maxIndex = slides.length - slidesPerView;
                currentIndex = currentIndex <= 0 ? maxIndex : currentIndex - 1;
                updateSlidePosition();
            }

            // Event listeners
            nextButton.addEventListener('click', nextSlide);
            prevButton.addEventListener('click', prevSlide);
            window.addEventListener('resize', () => {
                updateSlidesPerView();
                updateSlidePosition();
            });

            // Initialize
            updateSlidesPerView();
            updateSlidePosition();

            // Auto-play (optional)
            setInterval(nextSlide, 5000);
        });
    </script>
</body>

</html>

<?php
$cookieConsentHtml = '
<style>
.cookie-consent {
   position: fixed;
   bottom: 0;
   left: 0;
   right: 0;
   transform: translateY(100%);
   transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
   z-index: 50;
   background: linear-gradient(145deg, #2D0001, #AC011C);
   box-shadow: 0 -10px 30px rgba(45, 0, 1, 0.2);
   width: 100%;
   border-top: 1px solid rgba(255, 255, 255, 0.1);
   backdrop-filter: blur(10px);
}

.cookie-container {
   padding: 1.5rem 2rem;
   position: relative;
   overflow: hidden;
   display: flex;
   justify-content: space-between;
   align-items: center;
   gap: 2rem;
   max-width: 1400px;
   margin: 0 auto;
}

.cookie-container::before {
   content: "";
   position: absolute;
   top: 0;
   left: 0;
   right: 0;
   bottom: 0;
   background: radial-gradient(circle at top right, rgba(255, 255, 255, 0.1), transparent 70%);
   pointer-events: none;
}

.cookie-title {
   font-size: 1.25rem;
   color: white;
   margin-bottom: 0.75rem;
   font-weight: 600;
   display: flex;
   align-items: center;
   gap: 0.75rem;
}

.cookie-title i {
   color: white;
}

.cookie-text {
   color: rgba(255, 255, 255, 0.95);
   line-height: 1.6;
   font-size: 0.95rem;
   margin: 0;
}

.cookie-link {
   color: white;
   text-decoration: none;
   font-weight: 500;
   transition: all 0.3s ease;
   position: relative;
   border-bottom: 1px solid rgba(255, 255, 255, 0.3);
}

.cookie-link:hover {
   color: white;
   border-bottom-color: white;
}

.cookie-buttons {
   display: flex;
   gap: 1rem;
   align-items: center;
   flex-shrink: 0;
}

.cookie-button-reject,
.cookie-button-accept {
   padding: 0.75rem 1.75rem;
   font-size: 0.95rem;
   font-weight: 500;
   cursor: pointer;
   transition: all 0.3s ease;
   border-radius: 12px;
}

.cookie-button-reject {
   background: rgba(255, 255, 255, 0.1);
   border: 1px solid rgba(255, 255, 255, 0.2);
   color: white;
}

.cookie-button-reject:hover {
   background: rgba(255, 255, 255, 0.15);
   transform: translateY(-2px);
   box-shadow: 0 4px 12px rgba(255, 255, 255, 0.1);
}

.cookie-button-accept {
   background: white;
   border: none;
   color: #AC011C;
   font-weight: 600;
   box-shadow: 0 4px 12px rgba(255, 255, 255, 0.2);
}

.cookie-button-accept:hover {
   background: rgba(255, 255, 255, 0.9);
   transform: translateY(-2px);
   box-shadow: 0 6px 16px rgba(255, 255, 255, 0.3);
}

@media (max-width: 768px) {
   .cookie-container {
       flex-direction: column;
       padding: 1.5rem;
       gap: 1.5rem;
       align-items: stretch;
   }

   .cookie-buttons {
       flex-direction: row;
       justify-content: stretch;
   }

   .cookie-button-reject,
   .cookie-button-accept {
       flex: 1;
       text-align: center;
   }
}
</style>
<div id="cookieConsent" class="cookie-consent">
    <div class="cookie-container">
        <div class="cookie-content">
            <h3 class="cookie-title">
                <i class="fas fa-cookie-bite"></i>
                Cookie Policy
            </h3>
            <p class="cookie-text">
                At TileVerse, we use cookies to enhance your gaming experience. By continuing to use our website, you agree to our use of cookies. For more information, please read our 
                <a href="/Privacy16/" class="cookie-link">Privacy Policy</a> 
                and 
                <a href="/Terms92/" class="cookie-link">Terms of Service</a>.
            </p>
        </div>
        
        <div class="cookie-buttons">
            <button id="rejectCookies" class="cookie-button-reject">
                Decline
            </button>
            <button id="acceptCookies" class="cookie-button-accept">
                Accept
            </button>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
   const cookieConsent = document.getElementById("cookieConsent");
   const acceptBtn = document.getElementById("acceptCookies");
   const rejectBtn = document.getElementById("rejectCookies");
   
   if (!getCookie("aprenderd_cookie_consent")) {
       setTimeout(() => {
           cookieConsent.style.transform = "translateY(0)";
       }, 1000);
   }

   function getCookie(name) {
       let matches = document.cookie.match(new RegExp(
           "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, "\\$1") + "=([^;]*)"
       ));
       return matches ? decodeURIComponent(matches[1]) : undefined;
   }
   
   function setCookie(name, value, days) {
       const date = new Date();
       date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
       const expires = "; expires=" + date.toUTCString();
       document.cookie = name + "=" + value + expires + "; path=/; SameSite=Strict; Secure";
   }

   function handleConsent(consent) {
       setCookie("aprenderd_cookie_consent", consent, 365);
       cookieConsent.style.transform = "translateY(100%)";
       
       setTimeout(() => {
           cookieConsent.remove();
       }, 500);
   }

   acceptBtn.addEventListener("click", () => handleConsent("accepted"));
   rejectBtn.addEventListener("click", () => handleConsent("rejected"));
});
</script>
';

if (!isset($_COOKIE["aprenderd_cookie_consent"])) {
    echo $cookieConsentHtml;
}
?>