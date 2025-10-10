<?php

use Livewire\Volt\Component;
use App\Models\CaseStudy;

new 
#Title('Case Study - Ziipi Technologies')
class extends Component {
    // Property to hold the specific case study
    public $caseStudy;

    public function mount($slug){ 
        $this->caseStudy = CaseStudy::where('slug', $slug)->firstOrFail();
    }
}; ?>


<main class="overflow-hidden bg-white">
    <!-- Hero Section -->
    <section class="relative py-24 overflow-hidden bg-gray-900">
        <div class="absolute inset-0 z-0">
            @if ($caseStudy->banner_pic)
            <img src="{{ asset('storage/' . $caseStudy->banner_pic) }}" alt="Ziipi Technologies Case Study Background"
                class="object-cover w-full h-full opacity-20">
            @endif
            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/70 to-gray-900/90"></div>
        </div>

        <div class="relative z-10 container px-4 mx-auto text-center">
            <h1 class="text-4xl font-bold text-white md:text-5xl">{{ $caseStudy->name }}</h1>
            <p class="mt-4 text-lg text-gray-300 max-w-2xl mx-auto">
                {{ $caseStudy->short_desc }}
            </p>
        </div>
    </section>

    <!-- Case Study Detail -->
    <div class="container px-4 mx-auto py-16">
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
            @if ($caseStudy->photo)
            <img src="{{ asset('storage/' . $caseStudy->photo) }}" alt="{{ $caseStudy->name }} Banner"
                class="object-contain w-full h-64 sm:h-80 md:h-96">
            @endif

            <div class="p-6 md:p-10">
                <h2 class="mb-4 text-3xl font-bold text-gray-800">{{ $caseStudy->name }}</h2>

                @if($caseStudy->short_desc)
                <p class="mb-6 text-gray-600 text-lg leading-relaxed">
                    {{ $caseStudy->short_desc }}
                </p>
                @endif

                <div id="case-study-desc" class="prose prose-lg max-w-none text-gray-800">
                    {{-- Render full description as HTML --}}
                    {!! $caseStudy->full_desc !!}
                </div>
            </div>
        </div>
    </div>
</main>