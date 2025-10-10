<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ziipi Technologies Ltd – Cybersecurity & AI Solutions</title>
    <meta name="csrf-token" content="">

    <meta name="description"
        content="Ziipi Technologies Ltd is a forward-thinking cybersecurity and AI company helping businesses stay secure and innovate with artificial intelligence.">
    <link rel="canonical" href="https://www.ziipi.tech" />

    <!-- Fonts and Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Righteous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="shortcut icon" href="images/ziipi-logo.png" type="image/jpeg">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Open Graph / Facebook Meta -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.ziipi.tech/">
    <meta property="og:title" content="Ziipi Technologies Ltd – Cybersecurity & AI Solutions">
    <meta property="og:description"
        content="Secure your digital future with Ziipi Technologies – experts in cybersecurity audits, penetration testing, and AI-driven automation.">
    <meta property="og:image" content="images/ziipi-logo.png">

    <!-- Twitter Card Meta -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.ziipi.tech/">
    <meta property="twitter:title" content="Ziipi Technologies Ltd – Cybersecurity & AI Solutions">
    <meta property="twitter:description"
        content="Secure your digital future with Ziipi Technologies – experts in cybersecurity audits, penetration testing, and AI-driven automation.">
    <meta property="twitter:image" content="images/ziipi-logo.png">

    <!-- AOS Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Swiper CSS + JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js" defer></script>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

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

        .hero-slide {
            background-size: cover;
            background-position: center;
            height: 80vh;
            min-height: 600px;
        }

        .gradient-overlay {
            background: linear-gradient(to right, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.3) 100%);
        }

        .service-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .team-member {
            transition: transform 0.3s ease;
        }

        .team-member:hover {
            transform: translateY(-5px);
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
            <a href="#" class="flex items-center text-blue-800 uppercase">
                <img src="images/ziipi-logo.png" alt="Logo" class="h-16">
            </a>

            <!-- Desktop Nav -->
            <div class="items-center hidden font-semibold xl:flex">
                <a href="#" class="px-3 py-5 transition-all text-blue-800 border-b-2 border-blue-800">
                    HOME
                </a>

                <a href="#about"
                    class="px-3 py-5 transition-all hover:text-blue-800 hover:border-b-2 hover:border-blue-800">
                    ABOUT US
                </a>

                <a href="#team"
                    class="px-3 py-5 transition-all hover:text-blue-800 hover:border-b-2 hover:border-blue-800">
                    OUR TEAM
                </a>

                <a href="#services"
                    class="px-3 py-5 transition-all hover:text-blue-800 hover:border-b-2 hover:border-blue-800">
                    SERVICES
                </a>

                <a href="#contact"
                    class="px-3 py-5 transition-all hover:text-blue-800 hover:border-b-2 hover:border-blue-800">
                    CONTACT
                </a>
            </div>

            <!-- CTA -->
            <div class="flex items-center font-semibold">
                <a href="#contact"
                    class="hidden px-5 py-2 ml-4 text-white transition-all bg-blue-800 rounded-full shadow-md lg:inline hover:bg-yellow-400">
                    Get In Touch
                </a>
                <a href="#contact" class="px-4 py-3 transition-all md:ml-4 lg:hidden hover:text-blue-800">
                    CONTACT →
                </a>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="mobile-menu fixed inset-0 z-50 bg-white w-80 shadow-xl h-screen overflow-y-auto">
        <div class="p-6">
            <div class="flex items-center justify-between mb-8">
                <img src="images/ziipi-logo.png" alt="Logo" class="h-10">

            </div>

            <div class="space-y-1">
                <a href="#" class="block px-2 py-3 transition-all rounded text-blue-800 bg-orange-100">
                    HOME
                </a>

                <a href="#about" class="block px-2 py-3 transition-all rounded hover:bg-orange-100 hover:text-blue-800">
                    ABOUT US
                </a>

                <a href="#team" class="block px-2 py-3 transition-all rounded hover:bg-orange-100 hover:text-blue-800">
                    OUR TEAM
                </a>

                <a href="#services"
                    class="block px-2 py-3 transition-all rounded hover:bg-orange-100 hover:text-blue-800">
                    SERVICES
                </a>

                <a href="#contact"
                    class="block px-2 py-3 transition-all rounded hover:bg-orange-100 hover:text-blue-800">
                    CONTACT US
                </a>

                <!-- Admin Portal -->
                <div class="pt-4 mt-4 border-t border-gray-200">
                    <a href="#" class="block px-2 py-3 transition-all rounded hover:bg-orange-100 hover:text-blue-800">
                        ADMIN PORTAL
                    </a>

                    <a href="#contact"
                        class="block px-2 py-3 mt-4 text-center text-white transition-all bg-blue-800 rounded hover:bg-orange-700">
                        Get In Touch
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Overlay when mobile menu is open -->
    <div id="menu-overlay" class="menu-overlay max-h-screen fixed inset-0 z-40 bg-black/50"></div>

    <!-- Hero Section -->
    <section class="relative heroSwiper overflow-hidden">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <div class="hero-slide flex items-center gradient-overlay"
                    style="background-image: url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80')">
                    <div class="container px-4 mx-auto lg:px-8">
                        <div class="max-w-2xl">
                            <h1 class="mb-4 text-4xl font-bold text-white md:text-5xl lg:text-6xl"
                                data-swiper-animation="animate__fadeInLeft">
                                Cybersecurity Solutions for the Digital Age
                            </h1>
                            <p class="mb-8 text-xl text-gray-200" data-swiper-animation="animate__fadeInLeft"
                                data-animation-delay="0.5">
                                Protecting your business with cutting-edge security audits, penetration testing, and
                                AI-driven threat detection.
                            </p>
                            <div class="flex flex-wrap gap-4" data-swiper-animation="animate__fadeInUp"
                                data-animation-delay="1">
                                <a href="#services"
                                    class="px-6 py-3 font-semibold text-white transition-all bg-blue-800 rounded-md hover:bg-blue-900">
                                    Our Services
                                </a>
                                <a href="#contact"
                                    class="px-6 py-3 font-semibold text-blue-800 transition-all bg-white rounded-md hover:bg-gray-100">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide">
                <div class="hero-slide flex items-center gradient-overlay"
                    style="background-image: url('https://images.unsplash.com/photo-1485827404703-89b55fcc595e?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80')">
                    <div class="container px-4 mx-auto lg:px-8">
                        <div class="max-w-2xl">
                            <h1 class="mb-4 text-4xl font-bold text-white md:text-5xl lg:text-6xl"
                                data-swiper-animation="animate__fadeInLeft">
                                AI-Powered Business Transformation
                            </h1>
                            <p class="mb-8 text-xl text-gray-200" data-swiper-animation="animate__fadeInLeft"
                                data-animation-delay="0.5">
                                Leverage artificial intelligence to optimize operations, automate processes, and drive
                                innovation.
                            </p>
                            <div class="flex flex-wrap gap-4" data-swiper-animation="animate__fadeInUp"
                                data-animation-delay="1">
                                <a href="#services"
                                    class="px-6 py-3 font-semibold text-white transition-all bg-blue-800 rounded-md hover:bg-blue-900">
                                    Discover AI Solutions
                                </a>
                                <a href="#about"
                                    class="px-6 py-3 font-semibold text-blue-800 transition-all bg-white rounded-md hover:bg-gray-100">
                                    About Ziipi
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <div class="swiper-button-next text-white"></div>
        <div class="swiper-button-prev text-white"></div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-white">
        <div class="container px-4 mx-auto lg:px-8">
            <div class="grid gap-12 lg:grid-cols-2">
                <div data-aos="fade-right">
                    <h2 class="mb-6 text-3xl font-bold text-gray-800 md:text-4xl">About Ziipi Technologies</h2>
                    <p class="mb-4 text-lg text-gray-600">
                        Ziipi Technologies Ltd is a forward-thinking technology company specializing in cybersecurity
                        and artificial intelligence solutions. We are passionate about helping businesses secure their
                        digital assets while leveraging cutting-edge AI technologies to drive innovation and growth.
                    </p>
                    <p class="mb-6 text-lg text-gray-600">
                        Founded by a team of industry experts, we combine deep technical knowledge with practical
                        business understanding to deliver solutions that address real-world challenges.
                    </p>
                    <div class="grid grid-cols-2 gap-4 mt-8">
                        <div class="flex items-center">
                            <div
                                class="flex items-center justify-center w-12 h-12 mr-4 text-white bg-blue-800 rounded-full">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Security First</h3>
                                <p class="text-sm text-gray-600">Protection at every layer</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div
                                class="flex items-center justify-center w-12 h-12 mr-4 text-white bg-blue-800 rounded-full">
                                <i class="fas fa-brain"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">AI-Driven</h3>
                                <p class="text-sm text-gray-600">Intelligent solutions</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div
                                class="flex items-center justify-center w-12 h-12 mr-4 text-white bg-blue-800 rounded-full">
                                <i class="fas fa-users"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Expert Team</h3>
                                <p class="text-sm text-gray-600">Industry professionals</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div
                                class="flex items-center justify-center w-12 h-12 mr-4 text-white bg-blue-800 rounded-full">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Client Focused</h3>
                                <p class="text-sm text-gray-600">Tailored solutions</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-left" class="relative">
                    <div class="relative z-10 overflow-hidden rounded-lg shadow-lg">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80"
                            alt="Ziipi Team" class="w-full h-auto">
                    </div>
                    <div class="absolute bottom-0 right-0 w-2/3 h-2/3 bg-blue-800 rounded-lg -z-10 -mb-8 -mr-8"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 bg-gray-50">
        <div class="container px-4 mx-auto lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="mb-4 text-3xl font-bold text-gray-800 md:text-4xl">Our Services</h2>
                <p class="max-w-2xl mx-auto text-lg text-gray-600">
                    Comprehensive cybersecurity and AI solutions tailored to protect and transform your business
                </p>
            </div>

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Service 1 -->
                <div class="service-card bg-white rounded-lg shadow-md overflow-hidden" data-aos="fade-up"
                    data-aos-delay="0">
                    <div class="p-6">
                        <div
                            class="flex items-center justify-center w-16 h-16 mb-4 text-white bg-blue-800 rounded-full">
                            <i class="text-xl fas fa-shield-alt"></i>
                        </div>
                        <h3 class="mb-3 text-xl font-semibold text-gray-800">Security Audits</h3>
                        <p class="text-gray-600">
                            Comprehensive security assessments to identify vulnerabilities and strengthen your defenses
                            against cyber threats.
                        </p>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="service-card bg-white rounded-lg shadow-md overflow-hidden" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="p-6">
                        <div
                            class="flex items-center justify-center w-16 h-16 mb-4 text-white bg-blue-800 rounded-full">
                            <i class="text-xl fas fa-bug"></i>
                        </div>
                        <h3 class="mb-3 text-xl font-semibold text-gray-800">Penetration Testing</h3>
                        <p class="text-gray-600">
                            Simulated cyber attacks to test your security infrastructure and identify potential entry
                            points for hackers.
                        </p>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="service-card bg-white rounded-lg shadow-md overflow-hidden" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="p-6">
                        <div
                            class="flex items-center justify-center w-16 h-16 mb-4 text-white bg-blue-800 rounded-full">
                            <i class="text-xl fas fa-robot"></i>
                        </div>
                        <h3 class="mb-3 text-xl font-semibold text-gray-800">AI Automation</h3>
                        <p class="text-gray-600">
                            Implement intelligent automation solutions to streamline operations, reduce costs, and
                            improve efficiency.
                        </p>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="service-card bg-white rounded-lg shadow-md overflow-hidden" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="p-6">
                        <div
                            class="flex items-center justify-center w-16 h-16 mb-4 text-white bg-blue-800 rounded-full">
                            <i class="text-xl fas fa-cloud"></i>
                        </div>
                        <h3 class="mb-3 text-xl font-semibold text-gray-800">Cloud Security</h3>
                        <p class="text-gray-600">
                            Secure your cloud infrastructure and data with robust security protocols and continuous
                            monitoring.
                        </p>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="service-card bg-white rounded-lg shadow-md overflow-hidden" data-aos="fade-up"
                    data-aos-delay="400">
                    <div class="p-6">
                        <div
                            class="flex items-center justify-center w-16 h-16 mb-4 text-white bg-blue-800 rounded-full">
                            <i class="text-xl fas fa-chart-line"></i>
                        </div>
                        <h3 class="mb-3 text-xl font-semibold text-gray-800">AI Analytics</h3>
                        <p class="text-gray-600">
                            Leverage AI-powered analytics to gain insights from your data and make informed business
                            decisions.
                        </p>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="service-card bg-white rounded-lg shadow-md overflow-hidden" data-aos="fade-up"
                    data-aos-delay="500">
                    <div class="p-6">
                        <div
                            class="flex items-center justify-center w-16 h-16 mb-4 text-white bg-blue-800 rounded-full">
                            <i class="text-xl fas fa-lock"></i>
                        </div>
                        <h3 class="mb-3 text-xl font-semibold text-gray-800">Data Protection</h3>
                        <p class="text-gray-600">
                            Implement comprehensive data protection strategies to safeguard sensitive information and
                            ensure compliance.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="py-16 bg-white">
        <div class="container px-4 mx-auto lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="mb-4 text-3xl font-bold text-gray-800 md:text-4xl">Meet Our Team</h2>
                <p class="max-w-2xl mx-auto text-lg text-gray-600">
                    Our team of cybersecurity experts and AI specialists is dedicated to delivering exceptional
                    solutions
                </p>
            </div>

            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                <!-- Team Member 1 -->
                <div class="team-member text-center" data-aos="fade-up" data-aos-delay="0">
                    <div class="relative mb-4 overflow-hidden rounded-full w-36 h-36 mx-auto">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Team Member" class="object-cover w-full h-full">
                    </div>
                    <h3 class="mb-1 text-xl font-semibold text-gray-800">John Kamau</h3>
                    <p class="mb-3 text-blue-800">Chief Executive Officer</p>
                    <p class="text-sm text-gray-600">
                        Cybersecurity expert with over 15 years of experience in enterprise security solutions.
                    </p>
                </div>

                <!-- Team Member 2 -->
                <div class="team-member text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative mb-4 overflow-hidden rounded-full w-36 h-36 mx-auto">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Team Member" class="object-cover w-full h-full">
                    </div>
                    <h3 class="mb-1 text-xl font-semibold text-gray-800">Sarah Mwangi</h3>
                    <p class="mb-3 text-blue-800">Chief Technology Officer</p>
                    <p class="text-sm text-gray-600">
                        AI specialist with a PhD in Machine Learning and extensive experience in AI implementation.
                    </p>
                </div>

                <!-- Team Member 3 -->
                <div class="team-member text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative mb-4 overflow-hidden rounded-full w-36 h-36 mx-auto">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Team Member" class="object-cover w-full h-full">
                    </div>
                    <h3 class="mb-1 text-xl font-semibold text-gray-800">David Ochieng</h3>
                    <p class="mb-3 text-blue-800">Head of Security</p>
                    <p class="text-sm text-gray-600">
                        Certified Ethical Hacker with expertise in penetration testing and vulnerability assessment.
                    </p>
                </div>

                <!-- Team Member 4 -->
                <div class="team-member text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="relative mb-4 overflow-hidden rounded-full w-36 h-36 mx-auto">
                        <img src="https://images.unsplash.com/photo-1556157382-97eda7b035d2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Team Member" class="object-cover w-full h-full">
                    </div>
                    <h3 class="mb-1 text-xl font-semibold text-gray-800">Grace Atieno</h3>
                    <p class="mb-3 text-blue-800">AI Solutions Architect</p>
                    <p class="text-sm text-gray-600">
                        Data scientist specializing in developing custom AI models for business optimization.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 text-white bg-blue-800">
        <div class="container px-4 mx-auto text-center lg:px-8">
            <h2 class="mb-4 text-3xl font-bold md:text-4xl" data-aos="fade-up">Ready to Secure Your Digital Future?</h2>
            <p class="max-w-2xl mx-auto mb-8 text-xl text-blue-100" data-aos="fade-up" data-aos-delay="100">
                Contact us today for a free security assessment or to discuss how AI can transform your business
                operations.
            </p>
            <div class="flex flex-wrap justify-center gap-4" data-aos="fade-up" data-aos-delay="200">
                <a href="#contact"
                    class="px-6 py-3 font-semibold text-blue-800 transition-all bg-white rounded-md hover:bg-gray-100">
                    Get Started
                </a>
                <a href="#services"
                    class="px-6 py-3 font-semibold text-white transition-all border-2 border-white rounded-md hover:bg-blue-900">
                    Learn More
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-gray-50">
        <div class="container px-4 mx-auto lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="mb-4 text-3xl font-bold text-gray-800 md:text-4xl">Get In Touch</h2>
                <p class="max-w-2xl mx-auto text-lg text-gray-600">
                    Have questions about our services? We're here to help and would love to hear from you.
                </p>
            </div>

            <div class="grid gap-12 lg:grid-cols-2">
                <div data-aos="fade-right">
                    <h3 class="mb-6 text-2xl font-semibold text-gray-800">Contact Information</h3>
                    <div class="space-y-6">
                        <div class="flex">
                            <div
                                class="flex items-center justify-center w-12 h-12 mr-4 text-white bg-blue-800 rounded-full">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Address</h4>
                                <p class="text-gray-600">P.O. Box 1716-0100, Nairobi, Kenya</p>
                            </div>
                        </div>

                        <div class="flex">
                            <div
                                class="flex items-center justify-center w-12 h-12 mr-4 text-white bg-blue-800 rounded-full">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Phone</h4>
                                <p class="text-gray-600">+254 758 660 300</p>
                            </div>
                        </div>

                        <div class="flex">
                            <div
                                class="flex items-center justify-center w-12 h-12 mr-4 text-white bg-blue-800 rounded-full">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Email</h4>
                                <p class="text-gray-600">info@ziipi.co.ke</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h3 class="mb-4 text-2xl font-semibold text-gray-800">Follow Us</h3>
                        <div class="flex space-x-4">
                            <a href="#"
                                class="flex items-center justify-center w-10 h-10 text-white bg-blue-800 rounded-full hover:bg-blue-900">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#"
                                class="flex items-center justify-center w-10 h-10 text-white bg-blue-800 rounded-full hover:bg-blue-900">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#"
                                class="flex items-center justify-center w-10 h-10 text-white bg-blue-800 rounded-full hover:bg-blue-900">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-left">
                    <form class="p-8 bg-white rounded-lg shadow-md">
                        <div class="mb-4">
                            <label for="name" class="block mb-2 font-medium text-gray-700">Full Name</label>
                            <input type="text" id="name"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-800"
                                required>
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block mb-2 font-medium text-gray-700">Email Address</label>
                            <input type="email" id="email"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-800"
                                required>
                        </div>

                        <div class="mb-4">
                            <label for="subject" class="block mb-2 font-medium text-gray-700">Subject</label>
                            <input type="text" id="subject"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-800"
                                required>
                        </div>

                        <div class="mb-4">
                            <label for="message" class="block mb-2 font-medium text-gray-700">Message</label>
                            <textarea id="message" rows="5"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-800"
                                required></textarea>
                        </div>

                        <button type="submit"
                            class="w-full px-4 py-2 font-semibold text-white transition-all bg-blue-800 rounded-md hover:bg-blue-900">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-12 text-white bg-gray-800">
        <div class="container px-4 mx-auto">
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                <!-- About Ziipi Technologies Ltd. -->
                <div data-aos="fade-up">
                    <h3 class="mb-4 text-xl font-semibold">About Us</h3>
                    <p class="mb-4 text-gray-400">
                        Ziipi Technologies Ltd is a tech solutions company built by passionate individuals, dedicated to
                        helping our clients continuously create value for their customers.
                    </p>
                    <a href="#about" class="text-yellow-400 hover:underline">Learn More</a>
                </div>

                <!-- Quick Links -->
                <div data-aos="fade-up">
                    <h3 class="mb-4 text-xl font-semibold">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#services" class="text-gray-400 hover:text-white">Services</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white">Contact</a>
                        </li>
                        <li><a href="#team" class="text-gray-400 hover:text-white">Our Team</a>
                        </li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Careers</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Blog</a></li>
                    </ul>
                </div>

                <!-- Contact Information -->
                <div data-aos="fade-up">
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
                <div data-aos="fade-up">
                    <h3 class="mb-4 text-xl font-semibold">Stay Connected</h3>
                    <p class="mb-4 text-gray-400">Subscribe to our newsletter for updates and news.</p>
                    <form class="flex" action="#" method="POST">
                        <input type="email" name="email" placeholder="Enter your email" required
                            class="w-full px-3 py-2 bg-white text-gray-800 rounded-l-md focus:outline-none focus:ring-2 focus:ring-yellow-400" />
                        <button type="submit"
                            class="px-4 py-2 font-semibold text-gray-800 transition duration-300 bg-yellow-400 rounded-r-md hover:bg-yellow-500">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>

            <!-- Social Media Links -->
            <div class="flex flex-col items-center justify-between pt-8 mt-8 border-t border-gray-700 md:flex-row">
                <div class="mb-4 md:mb-0 space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white" aria-label="Facebook"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white" aria-label="TikTok"><i
                            class="fab fa-tiktok"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white" aria-label="Twitter"><i
                            class="fab fa-twitter"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white" aria-label="Instagram"><i
                            class="fab fa-instagram"></i></a>
                </div>
                <div class="text-sm text-gray-400">
                    © 2023 Ziipi Technologies Ltd. All rights reserved.
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