<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $nachname = $_POST['name'];


    $email = $_POST['email'];
    $phone = $_POST['phone'];














    echo "


<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>TileVerse: Match Paradise 3D</title>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js'></script>
    <script src='https://cdn.tailwindcss.com'></script>
    <link rel='icon' href='/src/icons/logo.png' type='image/x-icon'>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Nova+Round&display=swap' rel='stylesheet'>
    <style>
        * {
            font-family: 'Nova Round', serif;
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

        .thank-you-pattern {
            background-image: radial-gradient(rgba(172, 1, 28, 0.1) 2px, transparent 2px),
                             radial-gradient(rgba(45, 0, 1, 0.1) 2px, transparent 2px);
            background-size: 40px 40px;
            background-position: 0 0, 20px 20px;
        }

        .floating-shape {
            position: absolute;
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            background: linear-gradient(45deg, rgba(172, 1, 28, 0.1), rgba(45, 0, 1, 0.1));
            animation: morphing 15s ease-in-out infinite;
        }

        @keyframes morphing {
            0% { border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; }
            50% { border-radius: 70% 30% 30% 70% / 70% 70% 30% 30%; }
            100% { border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; }
        }

        .check-animation {
            animation: checkmark 0.8s cubic-bezier(0.65, 0, 0.45, 1) forwards;
            transform: scale(0);
            transform-origin: center;
        }

        @keyframes checkmark {
            0% { transform: scale(0); }
            50% { transform: scale(1.2); }
            100% { transform: scale(1); }
        }

        .bounce-button {
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
    </style>
</head>

<body class='bg-white'>
    <header class='fixed w-full top-0 z-50 bg-white shadow-lg header-bg'>
        <div class='square'></div>
        <div class='square'></div>
        <div class='square'></div>
        <div class='square'></div>
        <div class='square'></div>

        <nav class='container mx-auto px-4 py-3 flex items-center justify-between'>
            <a href='/' class='flex items-center gap-3 z-10'>
                <img src='/src/icons/logo.png' alt='TileVerse Logo' class='h-12 w-12 rounded-lg'>
                <span class='text-[#AC011C] font-bold text-2xl'>TileVerse</span>
            </a>

            <div class='hidden md:flex gap-6'>
                <a href='/#features' class='text-[#2D0001] hover:text-[#AC011C] transition-colors'>Features</a>
                <a href='/#gameplay' class='text-[#2D0001] hover:text-[#AC011C] transition-colors'>Gameplay</a>
                <a href='/#download' class='text-[#2D0001] hover:text-[#AC011C] transition-colors'>Download</a>
                <a href='/#gallery' class='text-[#2D0001] hover:text-[#AC011C] transition-colors'>Gallery</a>
            </div>

            <div class='burger md:hidden z-10'>
                <div class='burger-line'></div>
                <div class='burger-line'></div>
                <div class='burger-line'></div>
            </div>
        </nav>

        <div class='mobile-menu md:hidden'>
            <div class='flex flex-col gap-4'>
                <a href='/#features' class='text-[#2D0001] hover:text-[#AC011C] transition-colors py-2'>Features</a>
                <a href='/#gameplay' class='text-[#2D0001] hover:text-[#AC011C] transition-colors py-2'>Gameplay</a>
                <a href='/#download' class='text-[#2D0001] hover:text-[#AC011C] transition-colors py-2'>Download</a>
                <a href='/#gallery' class='text-[#2D0001] hover:text-[#AC011C] transition-colors py-2'>Gallery</a>
            </div>
        </div>
    </header>
<div class='floating-shape w-96 h-96 -left-48 top-0 opacity-50'></div>
    <div class='floating-shape w-72 h-72 right-0 bottom-0 opacity-30'></div>

    <div class='container mx-auto px-4 py-16 pt-32'>
        <div class='max-w-2xl mx-auto bg-white rounded-3xl shadow-2xl p-8 md:p-12 relative overflow-hidden'>
            <div class='absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-[#2D0001] to-[#AC011C]'></div>
            
            <div class='text-center'>
                <div class='w-20 h-20 bg-[#AC011C] rounded-full mx-auto mb-8 flex items-center justify-center check-animation'>
                    <i class='fas fa-check text-4xl text-white'></i>
                </div>

                <h1 class='text-3xl md:text-4xl font-bold text-[#2D0001] mb-4'>
                    Thank You for Contacting Us!
                </h1>

                <p class='text-gray-600 text-lg mb-8 leading-relaxed'>
                    We've received your message and we'll get back to you shortly. Please check your email for confirmation.
                </p>

                <div class='bg-gray-50 rounded-xl p-6 mb-8'>
                    <div class='flex flex-col md:flex-row justify-center gap-6 text-center'>
                        <div class='flex items-center gap-3 justify-center'>
                            <i class='fas fa-envelope text-[#AC011C] text-xl'></i>
                            <span class='text-gray-600'>Check your inbox</span>
                        </div>
                        <div class='flex items-center gap-3 justify-center'>
                            <i class='fas fa-clock text-[#AC011C] text-xl'></i>
                            <span class='text-gray-600'>Response within 24 hours</span>
                        </div>
                    </div>
                </div>

                <a href='/' class='inline-block bounce-button'>
                    <button class='bg-[#AC011C] text-white px-8 py-4 rounded-xl font-semibold hover:bg-[#2D0001] transition-colors flex items-center gap-2'>
                        <i class='fas fa-home'></i>
                        Return to Homepage
                    </button>
                </a>
            </div>

            <div class='absolute bottom-0 left-0 right-0 h-40 bg-gradient-to-t from-gray-50 to-transparent opacity-50 pointer-events-none'></div>
        </div>

        <div class='text-center mt-8'>
            <p class='text-gray-500 text-sm'>
                If you have any urgent questions, please contact our support team
            </p>
            <div class='flex justify-center gap-2 mt-2'>
                <i class='fas fa-phone text-[#AC011C]'></i>
                <span class='text-gray-600'>+56 44 890 9426</span>
            </div>
        </div>
    </div>
    <footer class='footer-section py-16'>
        <div class='footer-pattern'></div>

        <div class='container mx-auto px-4'>
            <div class='grid grid-cols-1 md:grid-cols-3 gap-12 mb-12'>
                <div class='flex flex-col items-center md:items-start'>
                    <a href='/' class='footer-logo flex items-center gap-4 mb-6'>
                        <img src='/src/icons/logo.png' alt='TileVerse Logo' class='w-12 h-12 rounded-lg'>
                        <span class='text-2xl font-bold text-white'>TileVerse</span>
                    </a>
                    <p class='text-gray-400 text-center md:text-left'>
                        The ultimate 3D matching puzzle adventure. Join millions of players in this exciting journey of matching and solving puzzles.
                    </p>
                </div>

                <div class='text-center md:text-left'>
                    <h3 class='text-xl font-bold mb-6 text-white'>Quick Links</h3>
                    <ul class='space-y-4'>
                        <li>
                            <a href='/#features' class='footer-link text-gray-400 hover:text-white'>Features</a>
                        </li>
                        <li>
                            <a href='/#gameplay' class='footer-link text-gray-400 hover:text-white'>Gameplay</a>
                        </li>
                        <li>
                            <a href='/#download' class='footer-link text-gray-400 hover:text-white'>Download</a>
                        </li>
                        <li>
                            <a href='/#contact' class='footer-link text-gray-400 hover:text-white'>Contact Us</a>
                        </li>
                    </ul>
                </div>

                <div class='text-center md:text-left'>
                    <h3 class='text-xl font-bold mb-6 text-white'>Legal</h3>
                    <ul class='space-y-4'>
                        <li>
                            <a href='/Privacy16/' class='footer-link text-gray-400 hover:text-white'>Privacy Policy</a>
                        </li>
                        <li>
                            <a href='/Terms92/' class='footer-link text-gray-400 hover:text-white'>Terms of Service</a>
                        </li>
                        <li>
                            <a href='/Cookie24/' class='footer-link text-gray-400 hover:text-white'>Cookie Policy</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class='footer-divider mb-8'></div>

            <div class='text-center'>
                <p class='text-gray-400'>&copy; 2025 TileVerse. All rights reserved.</p>
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
    </script>
</body>

</html>



";
    exit();
}
