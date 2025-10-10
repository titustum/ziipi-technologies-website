<?php

use Livewire\Volt\Component;
use App\Models\CaseStudy;


new 
#[Title('Case Studies - Ziipi Technologies')]
class extends Component {
    
    public function with()
    {
        return [
            'caseStudies' => CaseStudy::latest()->get(), // optional: show latest first
        ];
    }

}; ?>

<main class="overflow-hidden bg-white">
    <!-- Hero Section with Parallax Effect -->
    <section class="relative py-20 overflow-hidden bg-gray-900">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/information-technology-background.jpg') }}" alt="Ziipi Campus"
                class="object-cover w-full h-full opacity-30">
            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/70 to-gray-900/90"></div>
        </div>
        <div class="container relative z-10 px-4 mx-auto text-center">
            <h1 class="mb-2 text-4xl font-bold text-white md:text-5xl lg:text-6xl">Case Studies</h1>
            <p class="max-w-2xl mx-auto mt-4 text-lg text-gray-300">
                Discover how Ziipi Technologies has empowered businesses across various industries with innovative
                solutions and transformative technologies.
        </div>
    </section>




    <div class="container px-4 mx-auto py-16">


        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($caseStudies as $caseStudy)
            <a href="{{ route('case.study', $caseStudy->slug) }}"
                class="group block overflow-hidden rounded-lg shadow-md hover:shadow-xl transition duration-300 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500">

                @if ($caseStudy->photo)
                <img src="{{ asset('storage/' . $caseStudy->photo) }}" alt="{{ $caseStudy->name }}"
                    class=" w-full h-48 transition-transform duration-300 object-contain group-hover:scale-105">
                @endif

                <div class="p-5">
                    <h2 class="mb-2 text-xl font-semibold text-gray-800 group-hover:text-blue-600">
                        {{ $caseStudy->name }}
                    </h2>
                    <p class="text-gray-600 text-sm leading-relaxed line-clamp-4">
                        {{ $caseStudy->short_desc }}
                    </p>
                    <div class="mt-4 text-sm font-medium text-blue-600 group-hover:underline">
                        Read More →
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>



    <!-- ====================== Call to Action (CTA) Section ====================== -->
    <section class="py-16 text-white bg-gradient-to-r from-indigo-700 to-indigo-500">
        <div class="container px-4 mx-auto">
            <div class="flex flex-col items-center justify-between md:flex-row">
                <div class="mb-8 text-center md:mb-0 md:text-left" data-aos="fade-right">
                    <h2 class="mb-4 text-3xl font-bold">
                        Let’s Build What’s Next — Together.
                    </h2>
                    <p class="max-w-xl text-white/90">
                        Whether you're modernizing legacy systems, launching a new product, or scaling your
                        infrastructure — Ziipi Technologies is your strategic tech partner. Reach out and discover how
                        we can help.
                    </p>
                </div>
                <div class="flex flex-col gap-4 sm:flex-row" data-aos="fade-left">
                    <a href="{{ route('contact') }}"
                        class="px-6 py-3 font-bold text-center text-indigo-600 transition duration-300 bg-white rounded-lg hover:bg-gray-100 shadow">
                        Start the Conversation
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