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
                    class="object-cover w-full h-48 transition-transform duration-300 group-hover:scale-105">
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
</main>