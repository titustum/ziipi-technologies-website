<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Ziipi Technologies Ltd – Cybersecurity & AI Solutions' }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description"
        content="Ziipi Technologies Ltd is a forward-thinking cybersecurity and AI company helping businesses stay secure and innovate with artificial intelligence.">
    <link rel="canonical" href="https://www.ziipi.tech" />

    <!-- Fonts and Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Righteous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="shortcut icon" href="{{ asset('images/ziipi-logo.png') }}" type="image/jpeg">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Open Graph / Facebook Meta -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.ziipi.tech/">
    <meta property="og:title" content="Ziipi Technologies Ltd – Cybersecurity & AI Solutions">
    <meta property="og:description"
        content="Secure your digital future with Ziipi Technologies – experts in cybersecurity audits, penetration testing, and AI-driven automation.">
    <meta property="og:image" content="{{ asset('images/ziipi-logo.png') }}">

    <!-- Twitter Card Meta -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.ziipi.tech/">
    <meta property="twitter:title" content="Ziipi Technologies Ltd – Cybersecurity & AI Solutions">
    <meta property="twitter:description"
        content="Secure your digital future with Ziipi Technologies – experts in cybersecurity audits, penetration testing, and AI-driven automation.">
    <meta property="twitter:image" content="{{ asset('images/ziipi-logo.png') }}">

    <!-- AOS Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Swiper CSS + JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js" defer></script>

    <!-- Laravel Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom Styles -->
    <style>
        .mobile-menu {
            transform: translateX(-100%);
            transition: transform 0.3s ease-in-out;
        }

        .mobile-menu-open {
            transform: translateX(0);
        }

        .menu-overlay {
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease-in-out;
        }

        .menu-overlay-open {
            opacity: 1;
            visibility: visible;
        }

        .animation-delay-2000 {
            animation-delay: 2s;
        }

        .animation-delay-4000 {
            animation-delay: 4s;
        }

        html {
            scroll-behavior: smooth;
        }

        @media (max-width: 480px) {
            html {
                font-size: 15px;
            }
        }
    </style>
</head>

<body>
    <!-- Top Bar -->
    <header class="text-white bg-gray-900">
        <div class="container flex items-center justify-between px-4 py-2 mx-auto text-sm lg:px-8">
            <nav class="items-center hidden space-x-4 md:flex">
                <a href="#" aria-label="Facebook" class="transition-colors hover:text-yellow-400">
                    <i class="fab fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#" aria-label="LinkedIn" class="transition-colors hover:text-yellow-400">
                    <i class="fab fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="#" aria-label="Twitter" class="transition-colors hover:text-yellow-400">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                </a>
            </nav>

            <div class="flex items-center justify-between w-full md:w-auto">
                <div class="px-2">
                    <i class="mr-1 fas fa-phone-alt"></i>
                    <span>+254 758 660 300</span>
                </div>
                <div class="px-2 border-white md:border-l">
                    <i class="mr-1 fas fa-envelope"></i>
                    <a href="mailto:info@ziipi.co.ke" class="transition-colors hover:text-yellow-400">
                        info@ziipi.co.ke
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Nav -->
    <nav id="mainNav"
        class="sticky top-0 z-30 flex flex-col items-center w-full h-20 bg-white border-b border-gray-200 shadow">
        <div class="container flex items-center justify-between px-4 py-2 mx-auto lg:px-8">

            <!-- Mobile menu button -->
            <div class="inline xl:hidden">
                <button id="mobile-menu-button" aria-label="Toggle mobile menu"
                    class="pr-4 transition-colors hover:text-blue-800 rounded">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center text-blue-800 uppercase">
                <img src="{{ asset('images/ziipi-logo.png') }}" alt="Logo" class="h-16">
                {{-- <h1 class="font-['Righteous'] text-3xl hidden lg:inline ml-2">ZIIPI</h1> --}}
            </a>

            <!-- Desktop Nav -->
            <div class="items-center hidden font-semibold xl:flex">
                <a href="{{ route('home') }}" @class(['px-3 py-5 transition-all hover:text-blue-800 hover:border-b-2
                    hover:border-blue-800', 'text-blue-800 border-b-2 border-blue-800'=>
                    request()->routeIs('home')])>
                    HOME
                </a>

                <a href="{{ route('about') }}" @class(['px-3 py-5 transition-all hover:text-blue-800 hover:border-b-2
                    hover:border-blue-800', 'text-blue-800 border-b-2 border-blue-800'=>
                    request()->routeIs('about')])>
                    ABOUT US
                </a>

                <a href="{{ route('staff.members') }}" @class(['px-3 py-5 transition-all hover:text-blue-800
                    hover:border-b-2 hover:border-blue-800', 'text-blue-800 border-b-2 border-blue-800'=>
                    request()->routeIs('staff.members')])>
                    OUR TEAM
                </a>

                <a href="{{ route('services') }}" @class(['px-3 py-5 transition-all hover:text-blue-800 hover:border-b-2
                    hover:border-blue-800', 'text-blue-800 border-b-2 border-blue-800'=>
                    request()->routeIs('services')])>
                    SERVICES
                </a>

                <a href="{{ route('contact') }}" @class(['px-3 py-5 transition-all hover:text-blue-800 hover:border-b-2
                    hover:border-blue-800', 'text-blue-800 border-b-2 border-blue-800'=>
                    request()->routeIs('contact')])>
                    CONTACT
                </a>
            </div>

            <!-- CTA -->
            <div class="flex items-center font-semibold">
                <a href="{{ route('contact') }}"
                    class="hidden px-5 py-2 ml-4 text-white transition-all bg-blue-800 rounded-full shadow-md lg:inline hover:bg-yellow-400">
                    Get In Touch
                </a>
                <a href="{{ route('contact') }}" class="px-4 py-3 transition-all md:ml-4 lg:hidden hover:text-blue-800">
                    CONTACT →
                </a>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="mobile-menu fixed inset-0 z-50 bg-white w-80 shadow-xl h-screen overflow-y-auto">
        <div class="p-6">
            <div class="flex items-center justify-between mb-8">
                <img src="{{ asset('images/logo.jpeg') }}" alt="Logo" class="h-10">
                <button id="close-mobile-menu" aria-label="Close mobile menu"
                    class="hover:text-blue-800 text-2xl transition-colors focus:outline-none focus:ring-2 focus:ring-yellow-400 rounded">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="space-y-1">
                <a href="{{ route('home') }}" @class(['block px-2 py-3 transition-all rounded hover:bg-orange-100
                    hover:text-blue-800', 'text-blue-800 bg-orange-100'=> request()->routeIs('home')])>
                    HOME
                </a>

                <a href="{{ route('about') }}" @class(['block px-2 py-3 transition-all rounded hover:bg-orange-100
                    hover:text-blue-800', 'text-blue-800 bg-orange-100'=> request()->routeIs('about')])>
                    ABOUT US
                </a>

                <a href="{{ route('staff.members') }}" @class(['block px-2 py-3 transition-all rounded
                    hover:bg-orange-100 hover:text-blue-800', 'text-blue-800 bg-orange-100'=>
                    request()->routeIs('staff.members')])>
                    OUR TEAM
                </a>

                <a href="{{ route('services') }}" @class(['block px-2 py-3 transition-all rounded hover:bg-orange-100
                    hover:text-blue-800', 'text-blue-800 bg-orange-100'=> request()->routeIs('services')])>
                    SERVICES
                </a>

                <a href="{{ route('contact') }}" @class(['block px-2 py-3 transition-all rounded hover:bg-orange-100
                    hover:text-blue-800', 'text-blue-800 bg-orange-100'=> request()->routeIs('contact')])>
                    CONTACT US
                </a>

                <!-- Admin Portal -->
                <div class="pt-4 mt-4 border-t border-gray-200">
                    <a href="{{ route('filament.admin.auth.login') }}" @class(['block px-2 py-3 transition-all rounded
                        hover:bg-orange-100 hover:text-blue-800', 'text-blue-800 bg-orange-100'=>
                        request()->routeIs('filament.admin.auth.login')])>
                        ADMIN PORTAL
                    </a>

                    <a href="{{ route('contact') }}"
                        class="block px-2 py-3 mt-4 text-center text-white transition-all bg-blue-800 rounded hover:bg-orange-700">
                        Get In Touch
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Overlay when mobile menu is open -->
    <div id="menu-overlay" class="menu-overlay max-h-screen fixed inset-0 z-40 bg-black/50"></div>


    {{ $slot }}



    <footer class="py-12 text-white bg-gray-800">
        <div class="container px-4 mx-auto">
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                <!-- About Ziipi Technologies Ltd.  -->
                <div data-aos='fade-up'>
                    <h3 class="mb-4 text-xl font-semibold">About Us</h3>
                    <p class="mb-4 text-gray-400">Ziipi Technologies Ltd is a tech-solutions company built by passionate
                        individuals, dedicated to help our clients continuously create value for their customers.</p>
                    <a href="{{ route('about') }}" class="text-yellow-400 hover:underline">Learn More</a>
                </div>

                <!-- Quick Links -->
                <div data-aos='fade-up'>
                    <h3 class="mb-4 text-xl font-semibold">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('courses') }}" class="text-gray-400 hover:text-white">Programs</a></li>
                        <li><a href="{{ route('admissions') }}" class="text-gray-400 hover:text-white">Admissions</a>
                        </li>
                        <li><a href="{{ route('departments') }}" class="text-gray-400 hover:text-white">Departments</a>
                        </li>
                        <li><a href="{{ route('administration') }}"
                                class="text-gray-400 hover:text-white">Administration</a></li>
                        <li><a href="{{ route('downloads') }}" class="text-gray-400 hover:text-white">Downloads</a></li>
                    </ul>
                </div>

                <!-- Contact Information -->
                <div data-aos='fade-up'>
                    <h3 class="mb-4 text-xl font-semibold">Contact Us</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li>
                            <i class="mr-2 text-yellow-400 fas fa-map-marker-alt"></i>
                            P.O. Box 1716-0100, Nairobi, Kenya
                        </li>
                        <li>
                            <i class="mr-2 text-yellow-400 fas fa-phone"></i>
                            +254 758 660 300
                        </li>
                        <li>
                            <i class="mr-2 text-yellow-400 fas fa-envelope"></i>
                            info@ziipi.co.ke
                        </li>
                    </ul>
                </div>

                <!-- Newsletter Signup -->
                <div data-aos='fade-up'>
                    <h3 class="mb-4 text-xl font-semibold">Stay Connected</h3>
                    <p class="mb-4 text-gray-400">Subscribe to our newsletter for updates and news.</p>
                    <form class="flex">
                        <input type="email" placeholder="Enter your email"
                            class="w-full px-3 py-2 bg-white text-gray-800 rounded-l-md focus:outline-none focus:ring-2 focus:ring-yellow-400">
                        <button type="submit"
                            class="px-4 py-2 transition duration-300 bg-yellow-400 hover:bg-yellow-400 rounded-r-md">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>

            <!-- Social Media Links -->
            <div class="flex flex-col items-center justify-between pt-8 mt-8 border-t border-gray-700 md:flex-row">
                <div class="mb-4 md:mb-0">
                    <a href="#" class="mr-4 text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="mr-4 text-gray-400 hover:text-white"><i class="fab fa-tiktok"></i></a>
                    <a href="#" class="mr-4 text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="mr-4 text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="text-sm text-gray-400">
                    © {{ date('Y') }} Ziipi Technologies Ltd. All rights reserved.
                </div>
            </div>
        </div>
    </footer>





    <script>
        document.addEventListener('DOMContentLoaded', function () {
        // Desktop navigation hover effects
        const navItems = document.querySelectorAll('#mainNav .xl\\:flex a');
        navItems.forEach(item => {
            item.addEventListener('mouseenter', function () {
                this.classList.add('text-blue-800');
            });
            item.addEventListener('mouseleave', function () {
                if (!this.classList.contains('active')) {
                    this.classList.remove('text-blue-800');
                }
            });
        });

        // Mobile menu functionality
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const closeMobileMenu = document.getElementById('close-mobile-menu');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuOverlay = document.getElementById('menu-overlay');

        function openMenu() {
            mobileMenu.classList.add('mobile-menu-open');
            menuOverlay.classList.add('menu-overlay-open');
            document.body.style.overflow = 'hidden'; // Prevent scrolling when menu is open
        }

        function closeMenu() {
            mobileMenu.classList.remove('mobile-menu-open');
            menuOverlay.classList.remove('menu-overlay-open');
            document.body.style.overflow = ''; // Re-enable scrolling
        }

        mobileMenuButton?.addEventListener('click', openMenu);
        closeMobileMenu?.addEventListener('click', closeMenu);
        menuOverlay?.addEventListener('click', closeMenu);

        // Close menu when clicking on non-dropdown links
        const menuLinks = document.querySelectorAll('#mobile-menu a');
        menuLinks.forEach(link => {
            link.addEventListener('click', () => {
                // If this is NOT inside a dropdown, close menu
                if (!link.closest('.mobile-dropdown')) {
                    closeMenu();
                }
            });
        });

        // Toggle dropdowns in mobile menu
        const mobileDropdowns = document.querySelectorAll('#mobile-menu .mobile-dropdown');
        mobileDropdowns.forEach(dropdownContainer => {
            const toggleButton = dropdownContainer.querySelector('button');
            const dropdownContent = dropdownContainer.querySelector('div');
            const icon = toggleButton.querySelector('i');

            toggleButton.addEventListener('click', function () {
                const isHidden = dropdownContent.classList.contains('hidden');
                dropdownContent.classList.toggle('hidden');

                // Toggle icon
                if (isHidden) {
                    icon.classList.remove('fa-chevron-down');
                    icon.classList.add('fa-chevron-up');
                } else {
                    icon.classList.remove('fa-chevron-up');
                    icon.classList.add('fa-chevron-down');
                }
            });
        });
    });
    </script>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.heroSwiper', {
                loop: true,
                autoplay: {
                    delay: 5000,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                on: {
                    init: function() {
                        animateSlideElements(this.slides[this.activeIndex]);
                    },
                    slideChangeTransitionEnd: function() {
                        animateSlideElements(this.slides[this.activeIndex]);
                    },
                },
            });
        
            function animateSlideElements(slide) {
                // Reset all animations
                const elements = slide.querySelectorAll('[data-swiper-animation]');
                elements.forEach(el => {
                    el.classList.remove('animate__fadeInLeft', 'animate__fadeInUp', 'animate__zoomIn');
                    el.style.opacity = '0';
                });
        
                // Animate elements with delay
                elements.forEach(el => {
                    const animation = el.dataset.swiperAnimation;
                    const delay = el.dataset.animationDelay || '0';
                    
                    setTimeout(() => {
                        el.style.opacity = '1';
                        el.classList.add(animation);
                    }, delay * 1000);
                });
            }
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {

            AOS.init({
                duration: 1000, // Animation duration in milliseconds
                once: true, // Whether animation should happen only once
                easing: 'ease-in-out', // Easing function for the animation
            });

            });
            
    </script>



</body>

</html>