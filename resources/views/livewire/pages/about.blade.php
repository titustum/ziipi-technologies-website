<?php

use Livewire\Attributes\Title;
use Livewire\Volt\Component;

new
#[Title('About Us | Ziipi Technologies')]
class extends Component
{
    //
};
?>

<main class="overflow-hidden">
    <!-- Hero Section with Parallax Effect -->
    <section class="relative py-20 overflow-hidden bg-gray-900">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/information-technology-background.jpg') }}" alt="Ziipi Campus"
                class="object-cover w-full h-full opacity-30">
            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/70 to-gray-900/90"></div>
        </div>
        <div class="container relative z-10 px-4 mx-auto text-center">
            <h1 class="mb-2 text-4xl font-bold text-white md:text-5xl lg:text-6xl">About Ziipi Technologies</h1>
            <p class="max-w-2xl mx-auto text-lg text-gray-300 md:text-xl">Empowering futures through tech innovation and
                digital transformation</p>
        </div>
    </section>

    <!-- Vision and Mission Section -->
    <section class="py-16 bg-white">
        <div class="container px-4 mx-auto">
            <div class="grid items-center grid-cols-1 gap-12 md:grid-cols-2">
                <div data-aos="fade-right" class="order-2 md:order-1">
                    <div class="p-6 border-l-4 border-blue-600">
                        <h3 class="mb-4 text-2xl font-semibold text-gray-800">Our Vision</h3>
                        <p class="mb-8 text-gray-700 text-md">
                            To be a global leader in providing innovative digital solutions and technology education.
                        </p>
                        <h3 class="mb-4 text-2xl font-semibold text-gray-800">Our Mission</h3>
                        <p class="text-gray-700 text-md">
                            To deliver cutting-edge digital products and empower communities with the tech skills needed
                            to thrive in a rapidly evolving world.
                        </p>
                    </div>
                </div>
                <div data-aos="fade-left" class="relative order-1 md:order-2">
                    <div
                        class="absolute inset-0 transform translate-x-4 translate-y-4 border-2 border-gray-200 rounded-lg">
                    </div>
                    <img src="{{ asset('images/ziipi-logo.png') }}" alt="Ziipi Technologies"
                        class="relative z-10 object-cover w-full h-full rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="py-16 bg-gray-100">
        <div class="container px-4 mx-auto">
            <h2 data-aos="fade-up" class="mb-12 text-3xl font-bold text-center text-gray-800">Our Core Values</h2>

            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
                <div data-aos="fade-up" data-aos-delay="100"
                    class="p-6 text-center transition-transform duration-300 bg-white rounded-lg shadow-md hover:transform hover:-translate-y-2">
                    <div
                        class="flex items-center justify-center w-16 h-16 mx-auto mb-4 text-white bg-blue-600 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="mb-3 text-xl font-semibold text-gray-800">Excellence</h3>
                    <p class="text-gray-600">Pursuing the highest standards in all our digital and operational
                        activities.</p>
                </div>

                <div data-aos="fade-up" data-aos-delay="200"
                    class="p-6 text-center transition-transform duration-300 bg-white rounded-lg shadow-md hover:transform hover:-translate-y-2">
                    <div
                        class="flex items-center justify-center w-16 h-16 mx-auto mb-4 text-white bg-blue-600 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <h3 class="mb-3 text-xl font-semibold text-gray-800">Integrity</h3>
                    <p class="text-gray-600">Upholding honesty, transparency, and ethical conduct in all we do.</p>
                </div>

                <div data-aos="fade-up" data-aos-delay="300"
                    class="p-6 text-center transition-transform duration-300 bg-white rounded-lg shadow-md hover:transform hover:-translate-y-2">
                    <div
                        class="flex items-center justify-center w-16 h-16 mx-auto mb-4 text-white bg-blue-600 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="mb-3 text-xl font-semibold text-gray-800">Innovation</h3>
                    <p class="text-gray-600">Embracing creative, forward-thinking approaches to tech challenges.</p>
                </div>

                <div data-aos="fade-up" data-aos-delay="400"
                    class="p-6 text-center transition-transform duration-300 bg-white rounded-lg shadow-md hover:transform hover:-translate-y-2">
                    <div
                        class="flex items-center justify-center w-16 h-16 mx-auto mb-4 text-white bg-blue-600 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                        </svg>
                    </div>
                    <h3 class="mb-3 text-xl font-semibold text-gray-800">Inclusivity</h3>
                    <p class="text-gray-600">Fostering an inclusive environment where everyone can thrive in tech.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Our Journey Section with Timeline -->
    <section class="py-16 bg-white">
        <div class="container px-4 mx-auto">
            <h2 data-aos="fade-up" class="mb-12 text-3xl font-bold text-center text-gray-800">Our Journey</h2>

            <div class="relative">
                <!-- Vertical line -->
                <div class="absolute w-1 h-full transform -translate-x-1/2 bg-blue-200 left-1/2"></div>

                <!-- Timeline items -->
                <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                    <!-- Item 1 -->
                    <div data-aos="fade-right" class="relative md:col-start-1 md:text-right">
                        <div
                            class="absolute right-0 hidden w-4 h-4 transform translate-x-1/2 bg-blue-600 rounded-full md:block top-6 md:translate-x-10">
                        </div>
                        <div class="p-6 bg-gray-100 rounded-lg shadow-md">
                            <h3 class="mb-2 text-xl font-semibold text-blue-600">March 2019</h3>
                            <p class="text-gray-700">Foundation of Ziipi Technologies, driven by a vision to bridge the
                                digital divide and empower communities with future-ready tech skills.</p>
                        </div>
                    </div>

                    <div class="md:col-start-2"></div> <!-- Empty space -->

                    <!-- Item 2 -->
                    <div class="md:col-start-1"></div> <!-- Empty space -->

                    <div data-aos="fade-left" class="relative md:col-start-2">
                        <div
                            class="absolute left-0 hidden w-4 h-4 transform -translate-x-1/2 bg-blue-600 rounded-full md:block top-6 md:-translate-x-9">
                        </div>
                        <div class="p-6 bg-gray-100 rounded-lg shadow-md">
                            <h3 class="mb-2 text-xl font-semibold text-blue-600">2019–2020</h3>
                            <p class="text-gray-700">Rapid expansion from a grassroots initiative to a recognized
                                digital innovation hub, with growing community engagement and training programs.</p>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div data-aos="fade-right" class="relative md:col-start-1 md:text-right">
                        <div
                            class="absolute right-0 hidden w-4 h-4 transform translate-x-1/2 bg-blue-600 rounded-full md:block top-6 md:translate-x-10">
                        </div>
                        <div class="p-6 bg-gray-100 rounded-lg shadow-md">
                            <h3 class="mb-2 text-xl font-semibold text-blue-600">February 2022</h3>
                            <p class="text-gray-700">Launch of Ziipi’s Strategic Plan (2020–2025), focusing on digital
                                transformation, youth empowerment, and alignment with national tech and education goals.
                            </p>
                        </div>
                    </div>

                    <div class="md:col-start-2"></div> <!-- Empty space -->

                    <!-- Item 4 -->
                    <div class="md:col-start-1"></div> <!-- Empty space -->

                    <div data-aos="fade-left" class="relative md:col-start-2">
                        <div
                            class="absolute left-0 hidden w-4 h-4 transform -translate-x-1/2 bg-blue-600 rounded-full md:block top-6 md:-translate-x-9">
                        </div>
                        <div class="p-6 bg-gray-100 rounded-lg shadow-md">
                            <h3 class="mb-2 text-xl font-semibold text-blue-600">Present Day</h3>
                            <p class="text-gray-700">Ziipi continues to lead in digital innovation, community tech
                                initiatives, and delivering industry-aligned training to create a resilient,
                                future-ready workforce.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Community Impact Section -->
    <section class="py-16 bg-gray-100">
        <div class="container px-4 mx-auto">
            <h2 data-aos="fade-up" class="mb-12 text-3xl font-bold text-center text-gray-800">Community Impact</h2>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <!-- Tech Empowerment -->
                <div data-aos="fade-up" data-aos-delay="100"
                    class="overflow-hidden transition-all duration-300 bg-white rounded-lg shadow-md hover:shadow-lg">
                    <div class="p-1 bg-blue-600"></div>
                    <div class="p-6">
                        <h3 class="mb-4 text-xl font-semibold text-gray-800">Tech Empowerment</h3>
                        <p class="text-gray-600">
                            Bridging the digital divide by offering tech training, digital literacy workshops, and
                            access to
                            cutting-edge tools for underserved communities.
                        </p>
                    </div>
                </div>

                <!-- Sustainable Innovation -->
                <div data-aos="fade-up" data-aos-delay="200"
                    class="overflow-hidden transition-all duration-300 bg-white rounded-lg shadow-md hover:shadow-lg">
                    <div class="p-1 bg-blue-600"></div>
                    <div class="p-6">
                        <h3 class="mb-4 text-xl font-semibold text-gray-800">Sustainable Innovation</h3>
                        <p class="text-gray-600">
                            Promoting environmentally responsible tech solutions and supporting green startups through
                            mentorship and incubation.
                        </p>
                    </div>
                </div>

                <!-- Youth & Women Inclusion -->
                <div data-aos="fade-up" data-aos-delay="300"
                    class="overflow-hidden transition-all duration-300 bg-white rounded-lg shadow-md hover:shadow-lg">
                    <div class="p-1 bg-blue-600"></div>
                    <div class="p-6">
                        <h3 class="mb-4 text-xl font-semibold text-gray-800">Youth & Women Inclusion</h3>
                        <p class="text-gray-600">
                            Driving inclusive growth by equipping youth and women with in-demand tech skills, creating
                            pathways to innovation, entrepreneurship, and leadership in tech.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section with Parallax -->
    <section class="relative py-20 bg-blue-800">
        <div class="absolute inset-0 z-0 opacity-20 bg-pattern"></div>
        <div class="container relative z-10 px-4 mx-auto text-center">
            <h2 data-aos="fade-up" class="mb-6 text-3xl font-bold text-white">Join Our Technology Innovation Journey
            </h2>
            <p data-aos="fade-up" data-aos-delay="100" class="max-w-2xl mx-auto mb-8 text-xl text-blue-100">
                Ziipi Technologies is committed to providing equitable access to digital skills, fostering innovation,
                and
                producing socially responsible tech-savvy professionals with the creativity and entrepreneurial mindset
                needed for
                Kenya's development and global competitiveness.
            </p>

            <div data-aos="fade-up" data-aos-delay="200" class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('contact') }}"
                    class="px-8 py-3 font-semibold text-blue-600 transition duration-300 bg-white rounded-full hover:bg-gray-200">
                    Get In Touch Now
                </a>
                <a href="{{ route('about') }}"
                    class="px-8 py-3 font-semibold text-white transition duration-300 border-2 border-white rounded-full hover:bg-white hover:text-blue-600">
                    Learn More About Us
                </a>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-16 bg-white">
        <div class="container px-4 mx-auto">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
                <!-- Stat 1 -->
                <div data-aos="fade-up" data-aos-delay="100" class="p-6 text-center">
                    <div class="mb-4 text-4xl font-bold text-blue-600" data-count="500">500+</div>
                    <p class="text-gray-700">Happy Clients</p>
                </div>

                <!-- Stat 2 -->
                <div data-aos="fade-up" data-aos-delay="200" class="p-6 text-center">
                    <div class="mb-4 text-4xl font-bold text-blue-600" data-count="15">15+</div>
                    <p class="text-gray-700">Digital Transformations</p>
                </div>

                <!-- Stat 3 -->
                <div data-aos="fade-up" data-aos-delay="300" class="p-6 text-center">
                    <div class="mb-4 text-4xl font-bold text-blue-600" data-count="30">30+</div>
                    <p class="text-gray-700">Expert Engineers</p>
                </div>

                <!-- Stat 4 -->
                <div data-aos="fade-up" data-aos-delay="400" class="p-6 text-center">
                    <div class="mb-4 text-4xl font-bold text-blue-600" data-count="85">85%</div>
                    <p class="text-gray-700">Project Success Rate</p>
                </div>
            </div>
        </div>
    </section>

</main>

<!-- Add this to your scripts section -->
<script>
    // Initialize AOS animation library if it exists
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            once: true,
        });
    }
    
    // Simple counter animation for statistics
    document.addEventListener('DOMContentLoaded', function() {
        const counterElements = document.querySelectorAll('[data-count]');
        
        counterElements.forEach(element => {
            const target = parseInt(element.getAttribute('data-count'));
            const duration = 1500; // ms
            const increment = target / (duration / 16);
            let current = 0;
            
            const updateCounter = () => {
                if (current < target) {
                    current += increment;
                    element.textContent = Math.ceil(current) + (element.textContent.includes('+') ? '+' : '%');
                    requestAnimationFrame(updateCounter);
                } else {
                    element.textContent = target + (element.textContent.includes('+') ? '+' : '%');
                }
            };
            
            // Start animation when element is in viewport
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        updateCounter();
                        observer.unobserve(entry.target);
                    }
                });
            });
            
            observer.observe(element);
        });
    });
</script>