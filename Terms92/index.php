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

        .terms-section {
            position: relative;
            background: linear-gradient(135deg, #fff 0%, #f8f8f8 100%);
            min-height: 100vh;
            padding: 80px 0;
        }

        .terms-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 2rem;
            background: white;
            border-radius: 24px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .terms-pattern {
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

        .section-title {
            color: #2D0001;
            font-size: 2.25rem;
            font-weight: 700;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid rgba(172, 1, 28, 0.1);
        }

        .content-section {
            margin-bottom: 3rem;
        }

        .content-title {
            color: #AC011C;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .content-text {
            color: #333;
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }

        .list-item {
            position: relative;
            padding-left: 1.5rem;
            margin-bottom: 0.5rem;
            line-height: 1.6;
        }

        .list-item::before {
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
    <section class='terms-section'>
        <div class='terms-pattern'></div>
        <div class='terms-container'>
            <h1 class='section-title'>Terms and Conditions</h1>

            <div class='content-section'>
                <p class='content-text'>Welcome to TileVerse!</p>
                <p class='content-text'>
                    These terms and conditions outline the rules and regulations for the use of TileVerse's Website, located at https://explora-y-juega.com/.
                </p>
                <p class='content-text'>
                    By accessing this website, we assume you accept these terms and conditions. Do not continue to use TileVerse if you do not agree to take all of the terms and conditions stated on this page.
                </p>
                <p class='content-text'>
                    The following terminology applies to these Terms and Conditions, Privacy Statement, and Disclaimer Notice and all Agreements: "Client", "You", and "Your" refer to you, the person logging on to this website and compliant with the Company's terms and conditions. "The Company", "Ourselves", "We", "Our", and "Us" refer to our Company. "Party", "Parties", or "Us" refer to both the Client and ourselves.
                </p>
            </div>

            <div class='content-section'>
                <h2 class='content-title'>Cookies</h2>
                <p class='content-text'>
                    We employ the use of cookies. By accessing TileVerse, you agreed to use cookies in agreement with the TileVerse's Privacy Policy.
                </p>
                <p class='content-text'>
                    Most interactive websites use cookies to let us retrieve the user's details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.
                </p>
            </div>
            <div class='content-section'>
                <h2 class='content-title'>License</h2>
                <p class='content-text'>
                    Unless otherwise stated, TileVerse and/or its licensors own the intellectual property rights for all material on TileVerse. All intellectual property rights are reserved. You may access this from TileVerse for your own personal use, subject to restrictions set in these terms and conditions.
                </p>
                <p class='content-text'>You must not:</p>
                <ul class='mb-4'>
                    <li class='list-item'>Republish material from TileVerse</li>
                    <li class='list-item'>Sell, rent, or sub-license material from TileVerse</li>
                    <li class='list-item'>Reproduce, duplicate, or copy material from TileVerse</li>
                    <li class='list-item'>Redistribute content from TileVerse</li>
                </ul>
                <p class='content-text'>This Agreement shall begin on the date hereof.</p>
            </div>

            <div class='content-section'>
                <h2 class='content-title'>Comments and User Content</h2>
                <p class='content-text'>
                    Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. TileVerse does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of TileVerse, its agents, and/or affiliates.
                </p>
                <p class='content-text'>You warrant and represent that:</p>
                <ul class='mb-4'>
                    <li class='list-item'>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so</li>
                    <li class='list-item'>The Comments do not invade any intellectual property rights, including without limitation copyright, patent, or trademark of any third party</li>
                    <li class='list-item'>The Comments do not contain any defamatory, libelous, offensive, indecent, or otherwise unlawful material which is an invasion of privacy</li>
                    <li class='list-item'>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity</li>
                </ul>
            </div>

            <div class='content-section'>
                <h2 class='content-title'>Hyperlinking to our Content</h2>
                <p class='content-text'>
                    The following organizations may link to our Website without prior written approval:
                </p>
                <ul class='mb-4'>
                    <li class='list-item'>Government agencies</li>
                    <li class='list-item'>Search engines</li>
                    <li class='list-item'>News organizations</li>
                    <li class='list-item'>Online directory distributors</li>
                </ul>
            </div>
            <div class='content-section'>
                <h2 class='content-title'>iFrames</h2>
                <p class='content-text'>
                    Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.
                </p>
            </div>

            <div class='content-section'>
                <h2 class='content-title'>Content Liability</h2>
                <p class='content-text'>
                    We shall not be held responsible for any content that appears on your Website. You agree to protect and defend us against all claims that arise on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene, or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third-party rights.
                </p>
            </div>

            <div class='content-section'>
                <h2 class='content-title'>Reservation of Rights</h2>
                <p class='content-text'>
                    We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amend these terms and conditions and our linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.
                </p>
            </div>

            <div class='content-section'>
                <h2 class='content-title'>Disclaimer</h2>
                <p class='content-text'>
                    To the maximum extent permitted by applicable law, we exclude all representations, warranties, and conditions relating to our website and the use of this website. Nothing in this disclaimer will:
                </p>
                <ul class='mb-4'>
                    <li class='list-item'>Limit or exclude our or your liability for death or personal injury</li>
                    <li class='list-item'>Limit or exclude our or your liability for fraud or fraudulent misrepresentation</li>
                    <li class='list-item'>Limit any of our or your liabilities in any way that is not permitted under applicable law</li>
                    <li class='list-item'>Exclude any of our or your liabilities that may not be excluded under applicable law</li>
                </ul>
                <p class='content-text'>
                    As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.
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