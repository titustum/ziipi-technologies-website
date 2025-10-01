<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Title;
use App\Models\Department;
use App\Models\SuccessStory;
use App\Models\Partner;
use App\Models\HeroSlideContent;

new
#[Title('Ziipi Technologies | Cybersecurity & AI for the Future')]
class extends Component
{
    public function with()
    {
        return [
            'departments' => Department::all(),
            'successStories' => SuccessStory::where('is_approved', true)
                ->latest()
                ->take(3)
                ->get(),
            'partners' => Partner::all(),
            'heroSlides' => HeroSlideContent::all(),
        ];
    }
};
?>

<main>

    <!-- Hero Section -->
    <section id="hero" class="relative lg:h-[calc(100vh-150px)]">
        <div class="h-full swiper heroSwiper">
            <div class="swiper-wrapper">

                @forelse ($heroSlides as $content)
                <!-- Slide -->
                <div class="relative h-full bg-center bg-no-repeat bg-cover swiper-slide"
                    style="background-image: url('{{ asset('storage/' . $content->image) }}');">
                    <div class="absolute inset-0 bg-black/60"></div>
                    <div class="container relative flex flex-col items-start justify-center h-full px-4 mx-auto">
                        <div class="max-w-3xl py-24">
                            <h1 class="mb-4 text-4xl font-bold leading-tight text-white md:text-5xl lg:text-6xl animate__animated opacity-0"
                                data-swiper-animation="animate__fadeInLeft" data-animation-delay="0.3s">
                                {{ $content->title }}
                            </h1>
                            <h2 class="hidden text-xl lg:block md:text-2xl lg:text-3xl text-cyan-300 animate__animated opacity-0"
                                data-swiper-animation="animate__fadeInUp" data-animation-delay="0.6s">
                                {{ $content->subtitle }}
                            </h2>
                            <p class="mb-8 text-lg font-semibold text-green-300 animate__animated opacity-0"
                                data-swiper-animation="animate__fadeInUp" data-animation-delay="0.9s">
                                {{ $content->slogan }}
                            </p>
                            <a href="{{ route('contact') }}"
                                class="px-6 py-3 mt-6 text-lg font-semibold text-white transition-colors bg-orange-600 rounded-full opacity-0 hover:bg-orange-500 animate__animated"
                                data-swiper-animation="animate__zoomIn" data-animation-delay="1.2s">
                                {{ $content->button_text ?? 'Contact Us' }} <i class="ml-2 fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <!-- Default fallback slide for Ziipi -->
                <div class="relative h-full bg-center bg-no-repeat bg-cover swiper-slide"
                    style="background-image: url('{{ asset('images/default-hero.webp') }}');">
                    <div class="absolute inset-0 bg-black/60"></div>
                    <div class="container relative flex flex-col items-start justify-center h-full px-4 mx-auto">
                        <div class="max-w-3xl py-24">
                            <h1 class="mb-4 text-4xl font-bold leading-tight text-white md:text-5xl lg:text-6xl">
                                Welcome to Ziipi Technologies
                            </h1>
                            <h2 class="hidden text-xl lg:block md:text-2xl lg:text-3xl text-cyan-300">
                                Secure. Smart. Scalable.
                            </h2>
                            <p class="mb-8 text-lg font-semibold text-green-300">
                                We protect your data, networks, and future with AI-driven cybersecurity solutions.
                            </p>
                            <a href="{{ route('contact') }}"
                                class="px-6 py-3 mt-6 text-lg font-semibold text-white transition-colors bg-orange-600 rounded-full hover:bg-orange-500">
                                Let's Talk <i class="ml-2 fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforelse

            </div>

            <!-- Swiper navigation -->
            <div class="swiper-pagination"></div>
            <div class="hidden md:block swiper-button-prev"></div>
            <div class="hidden md:block swiper-button-next"></div>
        </div>
    </section>


    <section class="w-full px-8 py-24 bg-white">
        <div class="max-w-7xl mx-auto grid gap-12 md:grid-cols-3">

            <!-- CEO Welcome Card -->
            <div data-aos="fade-up" data-aos-duration="700"
                class="md:col-span-1 bg-gray-50 rounded-2xl p-10 flex flex-col justify-between shadow-sm hover:shadow-md transition-shadow duration-300">
                <h3 class="text-4xl font-extrabold text-indigo-700 mb-8 text-center tracking-tight">Welcome to Ziipi
                </h3>

                <div class="flex justify-center mb-10">
                    <div class="rounded-full border-4 border-indigo-300 overflow-hidden w-44 h-44 shadow-md">
                        <img src="{{ asset('images/ziipi-founder.jpg') }}" alt="Ziipi Founder"
                            class="object-cover w-full h-full" />
                    </div>
                </div>

                <p class="text-gray-700 text-center leading-relaxed mb-8">
                    At Ziipi, we’re redefining the future with intuitive technology solutions designed to empower your
                    business.
                </p>

                <div class="text-center">
                    <p class="font-semibold text-gray-900">Jane Doe</p>
                    <p class="text-indigo-600 font-medium">Founder & CEO</p>
                </div>

                <div class="mt-10 text-center">
                    <a href="#team"
                        class="inline-block px-10 py-3 border-2 border-indigo-700 text-indigo-700 font-semibold rounded-full hover:bg-indigo-700 hover:text-white transition duration-300">
                        Meet Our Team
                    </a>
                </div>
            </div>

            <!-- Highlighted Services Cards -->
            <div class="md:col-span-2 grid gap-10 sm:grid-cols-2">

                <!-- Custom IT Services -->
                <div data-aos="fade-up" data-aos-duration="700"
                    class="bg-gradient-to-br from-indigo-600 to-indigo-800 rounded-2xl p-10 shadow-md text-white flex flex-col justify-between hover:shadow-xl transition-shadow duration-300">
                    <h4 class="text-3xl font-bold mb-4">Custom IT Services for Your Business</h4>
                    <p class="mb-6 text-indigo-200 leading-relaxed">
                        Managing IT shouldn’t be a challenge. We help control your tech costs by keeping your systems
                        updated, secure, and optimized without the overhead of in-house training and certifications.
                    </p>
                    <a href="#contact"
                        class="self-start px-6 py-2 bg-white text-indigo-700 font-semibold rounded-full shadow hover:bg-indigo-50 transition duration-300">
                        Contact Us
                    </a>
                </div>

                <!-- Data Protection & Cyber Security -->
                <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="100"
                    class="bg-gradient-to-br from-teal-500 to-teal-700 rounded-2xl p-10 shadow-md text-white flex flex-col justify-between hover:shadow-xl transition-shadow duration-300">
                    <h4 class="text-3xl font-bold mb-6">Data Protection & Cyber Security</h4>
                    <ul class="mb-6 list-disc list-inside space-y-1 text-teal-200 font-medium">
                        <li>Comprehensive Data Protection</li>
                        <li>Advanced Cyber Security Solutions</li>
                        <li>Managed IT for Continuous Safety</li>
                    </ul>
                    <a href="#security"
                        class="self-start px-6 py-2 bg-white text-teal-700 font-semibold rounded-full shadow hover:bg-teal-50 transition duration-300">
                        Learn More
                    </a>
                </div>

                <!-- Artificial Intelligence & Machine Learning -->
                <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="200"
                    class="bg-gradient-to-br from-purple-500 to-purple-700 rounded-2xl p-10 shadow-md text-white flex flex-col justify-between hover:shadow-xl transition-shadow duration-300">
                    <h4 class="text-3xl font-bold mb-6">Artificial Intelligence & Machine Learning</h4>
                    <ul class="mb-6 list-disc list-inside space-y-1 text-purple-200 font-medium">
                        <li>AI-Powered Business Solutions</li>
                        <li>Predictive Analytics & Insights</li>
                        <li>Automated Workflows & Smart Automation</li>
                    </ul>
                    <a href="#ai-ml"
                        class="self-start px-6 py-2 bg-white text-purple-700 font-semibold rounded-full shadow hover:bg-purple-50 transition duration-300">
                        Discover More
                    </a>
                </div>

                <!-- Digital Consultancy -->
                <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="300"
                    class="bg-gradient-to-br from-pink-500 to-pink-700 rounded-2xl p-10 shadow-md text-white flex flex-col justify-between hover:shadow-xl transition-shadow duration-300">
                    <h4 class="text-3xl font-bold mb-6">Digital Consultancy</h4>
                    <ul class="mb-6 list-disc list-inside space-y-1 text-pink-200 font-medium">
                        <li>Strategic IT Planning</li>
                        <li>Digital Transformation Roadmaps</li>
                        <li>Tailored Business Tech Solutions</li>
                    </ul>
                    <a href="#consultancy"
                        class="self-start px-6 py-2 bg-white text-pink-700 font-semibold rounded-full shadow hover:bg-pink-50 transition duration-300">
                        Get Started
                    </a>
                </div>

            </div>
        </div>
    </section>





    <section class="w-full bg-gray-50 py-20 px-6">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-4xl font-extrabold text-indigo-700 mb-6">Why Choose Ziipi?</h2>
            <p class="text-gray-600 max-w-3xl mx-auto mb-16">
                Empower your business with IT solutions that combine innovation, security, and personalized support
                tailored to your unique needs.
            </p>

            <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">
                <!-- Expert Team -->
                <div class="flex flex-col items-center text-center px-4">
                    <div class="mb-5 p-5 bg-indigo-100 rounded-full inline-flex">
                        <!-- Icon: user group -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-indigo-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87M12 12a4 4 0 100-8 4 4 0 000 8z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-indigo-700 mb-2">Expert Team</h3>
                    <p class="text-gray-600">
                        Skilled professionals dedicated to delivering top-notch IT solutions and continuous support.
                    </p>
                </div>

                <!-- Proven Results -->
                <div class="flex flex-col items-center text-center px-4">
                    <div class="mb-5 p-5 bg-teal-100 rounded-full inline-flex">
                        <!-- Icon: chart bar -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-teal-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 3v18h18" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17V9m4 8v-4m4 4v-6" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-teal-700 mb-2">Proven Results</h3>
                    <p class="text-gray-600">
                        Track record of driving business growth through innovative IT solutions and measurable impact.
                    </p>
                </div>

                <!-- Cutting-Edge Technology -->
                <div class="flex flex-col items-center text-center px-4">
                    <div class="mb-5 p-5 bg-purple-100 rounded-full inline-flex">
                        <!-- Icon: chip -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-purple-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <rect x="4" y="4" width="16" height="16" rx="2" ry="2" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 8v8M8 8v8" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-purple-700 mb-2">Cutting-Edge Technology</h3>
                    <p class="text-gray-600">
                        Leveraging AI, Machine Learning, and advanced cybersecurity to future-proof your business.
                    </p>
                </div>

                <!-- Personalized Support -->
                <div class="flex flex-col items-center text-center px-4">
                    <div class="mb-5 p-5 bg-pink-100 rounded-full inline-flex">
                        <!-- Icon: headset -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-pink-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 8a6 6 0 00-12 0v5a6 6 0 0012 0V8z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 17v3m-6 0h12" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-pink-700 mb-2">Personalized Support</h3>
                    <p class="text-gray-600">
                        Dedicated assistance and tailored solutions to meet your specific business goals.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container px-4 mx-auto max-w-7xl">
            <div class="mb-16 text-center">
                <h2 class="mb-4 text-3xl font-bold text-gray-800 lg:text-4xl">Client Success Stories</h2>
                <div class="w-24 h-1 mx-auto bg-indigo-600 rounded"></div>
                <p class="max-w-2xl mx-auto mt-4 text-lg text-gray-600">
                    See how our clients have leveraged Ziipi’s IT solutions to transform their businesses.
                </p>
            </div>

            <div class="testimonial-grid" data-aos="fade-up">
                <div class="grid gap-8 md:grid-cols-3 max-w-7xl mx-auto px-4">
                    @foreach ($successStories as $story)

                    <!-- Success Story Card -->
                    <div class="relative z-10 p-6 bg-white rounded-lg shadow-lg flex flex-col h-full">
                        <div class="absolute transform -translate-x-1/2 -top-10 left-1/2">
                            <div class="w-20 h-20 p-1 rounded-full bg-gradient-to-r from-indigo-400 to-indigo-600">
                                <img src="{{ $story->photo ? asset('storage/' . $story->photo) : asset('images/default-avatar.jpg') }}"
                                    alt="{{ $story->name }}" class="object-cover w-full h-full rounded-full">
                            </div>
                        </div>

                        <div class="pt-10 text-center flex-grow flex flex-col">
                            <h3 class="text-xl font-bold text-gray-800">{{ $story->name }}</h3>
                            <p class="text-indigo-600 mb-2">{{ $story->company }}, {{ $story->position }}</p>

                            <div class="flex justify-center mb-4 text-indigo-500">
                                {{-- Filled stars --}}
                                @for ($i = 0; $i < $story->rating; $i++)
                                    <i class="fas fa-star"></i>
                                    @endfor

                                    {{-- Empty stars --}}
                                    @for ($i = 0; $i < 5 - $story->rating; $i++)
                                        <i class="far fa-star"></i>
                                        @endfor
                            </div>

                            <div class="mt-4 mb-6 flex-grow">
                                <svg class="w-8 h-8 mx-auto text-gray-300" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.039 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" />
                                </svg>
                                <blockquote class="mt-4 text-gray-600">
                                    {{ $story->statement }}
                                </blockquote>
                            </div>

                            <p class="font-semibold text-gray-700 mt-auto">
                                Current Role: <span class="text-green-600">{{ $story->position }} at {{ $story->company
                                    }}</span>
                            </p>
                        </div>
                    </div>

                    @endforeach
                </div>

                <!-- View All Stories Button -->
                <div class="mt-16 text-center">
                    <a href="{{ route('success.stories') }}"
                        class="inline-block px-8 py-3 font-semibold text-white transition duration-300 bg-indigo-600 rounded-full shadow-md hover:bg-indigo-700 hover:shadow-lg">
                        View All Client Stories
                        <i class="ml-2 fas fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Success Metrics -->
                <div class="grid gap-8 mt-20 md:grid-cols-2 lg:grid-cols-4">
                    <div data-aos="fade-up" data-aos-duration="800" class="p-6 text-center rounded-lg bg-gray-50">
                        <div class="flex justify-center">
                            <div class="p-3 mb-4 text-white bg-indigo-600 rounded-full">
                                <i class="text-2xl fas fa-users"></i>
                            </div>
                        </div>
                        <h3 class="text-4xl font-bold text-gray-800"><span class="counter" data-target="150">0</span>+
                        </h3>
                        <p class="text-gray-600">Satisfied Clients</p>
                    </div>

                    <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="100"
                        class="p-6 text-center rounded-lg bg-gray-50">
                        <div class="flex justify-center">
                            <div class="p-3 mb-4 text-white bg-indigo-600 rounded-full">
                                <i class="text-2xl fas fa-shield-alt"></i>
                            </div>
                        </div>
                        <h3 class="text-4xl font-bold text-gray-800"><span class="counter" data-target="99">0</span>%
                        </h3>
                        <p class="text-gray-600">Data Protection Success</p>
                    </div>

                    <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="200"
                        class="p-6 text-center rounded-lg bg-gray-50">
                        <div class="flex justify-center">
                            <div class="p-3 mb-4 text-white bg-indigo-600 rounded-full">
                                <i class="text-2xl fas fa-cogs"></i>
                            </div>
                        </div>
                        <h3 class="text-4xl font-bold text-gray-800"><span class="counter" data-target="95">0</span>%
                        </h3>
                        <p class="text-gray-600">Successful Project Delivery</p>
                    </div>

                    <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="300"
                        class="p-6 text-center rounded-lg bg-gray-50">
                        <div class="flex justify-center">
                            <div class="p-3 mb-4 text-white bg-indigo-600 rounded-full">
                                <i class="text-2xl fas fa-award"></i>
                            </div>
                        </div>
                        <h3 class="text-4xl font-bold text-gray-800"><span class="counter" data-target="50">0</span>+
                        </h3>
                        <p class="text-gray-600">Industry Certifications</p>
                    </div>
                </div>

            </div>
    </section>



    <section class="py-16 bg-indigo-50">
        <div class="container px-4 mx-auto">
            <h2 data-aos="fade-up" class="text-3xl font-bold text-center text-gray-800">Our Trusted Partners</h2>
            <p data-aos="fade-up" class="mt-6 mb-12 text-center text-gray-600 max-w-3xl mx-auto">
                Collaborating with leading technology firms and industry innovators to deliver top-notch IT solutions
                and services.
            </p>

            <div class="grid items-center grid-cols-2 gap-8 md:grid-cols-3 lg:grid-cols-6">
                @foreach ($partners as $partner)
                <div data-aos="fade-up" title="{{ $partner->name }}"
                    class="flex items-center justify-center p-6 bg-white rounded-lg shadow-md transition-shadow duration-300 hover:shadow-lg">
                    <img src="{{ asset('storage/' . $partner->logo) }}" alt="{{ $partner->name }}"
                        class="h-16 max-w-full object-contain">
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- Counter Animation Script -->

    <script>
        const counters = document.querySelectorAll('.counter');
  
    counters.forEach(counter => {
      const updateCount = () => {
        const target = +counter.getAttribute('data-target');
        const current = +counter.innerText;
        const increment = target / 10000; // you can adjust speed here
  
        if (current < target) {
          counter.innerText = Math.ceil(current + increment);
          requestAnimationFrame(updateCount);
        } else {
          counter.innerText = target;
        }
      };
  
      // Optional: Wait until element is in view
      const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            updateCount();
            observer.unobserve(entry.target); // Only run once
          }
        });
      }, { threshold: 0.5 });
  
      observer.observe(counter);
    });
    </script>

</main>