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

        .cookie-policy-section {
            position: relative;
            background: linear-gradient(135deg, #fff 0%, #f8f8f8 100%);
            min-height: 100vh;
            padding: 80px 0;
        }

        .cookie-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 2rem;
            background: white;
            border-radius: 24px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .cookie-pattern {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.05;
            pointer-events: none;
            background-image:
                radial-gradient(#AC011C 1px, transparent 1px),
                radial-gradient(#2D0001 1px, transparent 1px);
            background-size: 40px 40px;
            background-position: 0 0, 20px 20px;
        }

        .policy-title {
            color: #2D0001;
            font-size: 2.25rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .policy-date {
            color: #666;
            font-size: 1rem;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid rgba(172, 1, 28, 0.1);
        }

        .policy-section {
            margin-bottom: 2.5rem;
        }

        .section-title {
            color: #AC011C;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .section-text {
            color: #333;
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }

        .feature-list {
            padding-left: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .feature-item {
            position: relative;
            padding-left: 1.5rem;
            margin-bottom: 0.5rem;
            line-height: 1.6;
        }

        .feature-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0.8rem;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #AC011C;
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
    <section class='cookie-policy-section'>
        <div class='cookie-pattern'></div>
        <div class='cookie-container'>
            <h1 class='policy-title'>Cookie Policy</h1>
            <p class='policy-date'>Last Updated: January 2025</p>

            <div class='policy-section'>
                <h2 class='section-title'>Introduction</h2>
                <p class='section-text'>
                    At TileVerse, we use cookies to enhance your experience on our website. This policy explains what cookies are, how we use them, and how you can manage them.
                </p>
            </div>

            <div class='policy-section'>
                <h2 class='section-title'>What Are Cookies?</h2>
                <p class='section-text'>
                    Cookies are small text files stored on your device when you visit our website. They allow us to recognize your device, remember your preferences, and track past activities on our website.
                </p>
            </div>
            <div class='policy-section'>
                <h2 class='section-title'>Why Do We Use Cookies?</h2>
                <p class='section-text'>We use cookies to:</p>
                <ul class='feature-list'>
                    <li class='feature-item'>Personalization: Provide you with a personalized browsing experience and improve website functionality</li>
                    <li class='feature-item'>Analytics: Analyze traffic and usage patterns to optimize performance</li>
                    <li class='feature-item'>Preferences: Store your preferences and settings for future visits</li>
                </ul>
            </div>

            <div class='policy-section'>
                <h2 class='section-title'>Types of Cookies</h2>
                <ul class='feature-list'>
                    <li class='feature-item'>Session Cookies: These are automatically deleted when you close your browser</li>
                    <li class='feature-item'>Persistent Cookies: These remain stored on your device for a specific period or until you manually delete them</li>
                </ul>
            </div>

            <div class='policy-section'>
                <h2 class='section-title'>Managing Cookie Preferences</h2>
                <p class='section-text'>
                    You have control over the cookies stored on your device. You can delete all saved cookies and configure your browser to reject cookies.
                </p>
                <p class='section-text'>
                    Please note: Disabling cookies may affect website functionality, and you may need to re-enter certain preferences each time you visit.
                </p>
            </div>

            <div class='policy-section'>
                <h2 class='section-title'>Updates to the Cookie Policy</h2>
                <p class='section-text'>
                    This Cookie Policy may be updated from time to time. Any changes will be posted on this page, so we recommend checking it regularly to stay informed.
                </p>
            </div>

            <div class='policy-section'>
                <h2 class='section-title'>Have Questions?</h2>
                <p class='section-text'>
                    If you have any questions about our Cookie Policy, feel free to contact us at:
                    <a href='mailto:info@explora-y-juega.com' class='text-[#AC011C] hover:underline'>info@explora-y-juega.com</a>
                </p>
            </div>
        </div>
    </section>
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