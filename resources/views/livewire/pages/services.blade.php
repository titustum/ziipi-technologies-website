<?php
 
use Livewire\Attributes\Title;
use Livewire\Volt\Component;
use App\Models\Service;

new
#[Title('Services')] 
class extends Component
{

    public $services;

    function mount() {
        $this->services = Service::all();
    }

}; ?>


<main>

    <!-- ====================== Ziipi Services Section ============== -->

    <section class="py-20 bg-gray-50">
        <div class="container px-4 mx-auto max-w-7xl">
            <div class="mb-16 text-center">
                <h2 class="mb-4 text-3xl font-bold text-gray-800 lg:text-4xl">What We Offer</h2>
                <div class="w-24 h-1 mx-auto bg-indigo-600 rounded"></div>
                <p class="max-w-2xl mx-auto mt-4 text-lg text-gray-600">
                    Explore Ziipi’s full suite of technology services — crafted to accelerate innovation, simplify
                    operations, and scale your business.
                </p>
            </div>

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($services as $service)
                <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="{{ $loop->index * 100 }}"
                    class="overflow-hidden transition-all duration-300 bg-white rounded-lg shadow-lg group hover:shadow-xl">
                    <div class="relative h-56 overflow-hidden">
                        <img src="{{ asset('storage/' . $service->photo) }}" alt="{{ $service->name }}"
                            class="object-cover w-full h-full transition-transform duration-500 ease-in-out group-hover:scale-110">
                        <div
                            class="absolute inset-0 transition-opacity duration-300 opacity-0 bg-gradient-to-t from-black/70 to-transparent group-hover:opacity-100">
                        </div>
                    </div>
                    <div class="p-6">
                        <h3
                            class="mb-3 text-xl font-bold text-gray-800 transition-colors duration-300 group-hover:text-indigo-600">
                            {{ $service->name }}
                        </h3>
                        <p class="mb-5 text-gray-600 line-clamp-3">{{ $service->short_desc }}</p>
                        <div class="pt-2 border-t border-gray-100">
                            <a href="{{ route('service', $service->slug) }}"
                                class="inline-flex items-center font-semibold text-indigo-600 transition-colors duration-300 hover:text-indigo-700">
                                Explore Service
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 ml-1 transition-transform duration-300 group-hover:translate-x-1"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ====================== Call to Action (CTA) Section ====================== -->
    <section class="py-16 text-white bg-gradient-to-r from-indigo-700 to-indigo-500">
        <div class="container px-4 mx-auto">
            <div class="flex flex-col items-center justify-between md:flex-row">
                <div class="mb-8 text-center md:mb-0 md:text-left" data-aos="fade-right">
                    <h2 class="mb-4 text-3xl font-bold">Ready to Transform Your Business with Ziipi?</h2>
                    <p class="max-w-xl text-white/90">
                        Whether you're exploring digital transformation or looking to scale with innovative tech,
                        we're here to help. Let’s build the future — together.
                    </p>
                </div>
                <div class="flex flex-col gap-4 sm:flex-row" data-aos="fade-left">
                    <a href="{{ route('contact') }}"
                        class="px-6 py-3 font-bold text-center text-indigo-600 transition duration-300 bg-white rounded-lg hover:bg-gray-100">
                        Get In Touch
                    </a>
                    <a href="{{ route('about') }}"
                        class="px-6 py-3 font-bold text-center text-white transition duration-300 border-2 border-white rounded-lg hover:bg-white/10">
                        Learn About Ziipi
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>