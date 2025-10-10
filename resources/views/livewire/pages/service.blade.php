<?php

use Livewire\Attributes\Title;
use Livewire\Volt\Component;
use App\Models\Service;
use App\Models\SuccessStory;

new
#[Title('Service Details')]
class extends Component
{
    public $service; 
    public $successStories = [];

    public function mount($slug)
    { 
        $this->service = Service::where('slug', $slug)->firstOrFail();
        $this->successStories = SuccessStory::take(3)->get();
    }
};
?>


<section class="min-h-screen text-gray-800 bg-gray-50">

    <header class="relative">
        <div class="h-96 md:h-[500px] w-full overflow-hidden">
            <img src="{{ asset('storage/'.$service->banner_pic) }}" alt="{{ $service->name }} Banner"
                class="object-cover w-full h-full">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 p-6 md:p-12">
            <div class="container mx-auto">
                <div class="inline-block px-4 py-1 mb-3 text-sm font-semibold text-white bg-blue-700 rounded-full">
                    Service
                </div>
                <h1 class="mb-2 text-3xl font-bold text-white md:text-5xl">{{ $service->name }}</h1>
                <p class="max-w-3xl text-lg md:text-xl text-white/90">{{ $service->short_desc }}</p>
            </div>
        </div>
    </header>


    <main>
        <!-- service Overview Section -->
        <section class="py-16 bg-white">
            <div class="container px-4 mx-auto">
                <div class="p-6 prose prose-lg max-w-none" data-aos="fade-up">
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                        <div class="md:col-span-2">
                            <h2 class="mb-6 text-3xl font-bold">Service Overview</h2>
                            <p class="mb-4 text-gray-600">{{ $service->full_desc }}</p>

                            <div class="grid grid-cols-1 gap-6 my-12 md:grid-cols-3">
                                <div class="p-6 text-center rounded-lg bg-orange-50">
                                    <span class="block mb-2 text-3xl font-bold text-blue-700">
                                        {{ random_int(1, 100) }}</span>
                                    <span class="text-gray-600">Custom Solutions</span>
                                </div>
                                <div class="p-6 text-center rounded-lg bg-blue-50">
                                    <span class="block mb-2 text-3xl font-bold text-blue-600">
                                        {{ random_int(1, 100) }}</span>
                                    <span class="text-gray-600">Expert Consultants</span>
                                </div>
                                <div class="p-6 text-center rounded-lg bg-green-50">
                                    <span class="block mb-2 text-3xl font-bold text-green-600">
                                        {{ random_int(95,99) }}%</span>
                                    <span class="text-gray-600">Client Satisfaction</span>
                                </div>
                            </div>

                            <h3 class="mb-4 text-2xl font-bold">Hands-On Implementation</h3>
                            <p class="mt-4">
                                At Ziipi, our {{ $service->name }} offering emphasizes real-world execution through
                                agile delivery, tech prototyping, and collaborative development. We build and iterate
                                with our clients — not just for them.
                            </p>

                            <h3 class="mb-4 mt-10 text-2xl font-bold">Industry Integration</h3>
                            <p>
                                Our deep partnerships with enterprise and startup clients alike give us unmatched
                                insight into market trends, enabling us to craft future-ready, scalable solutions.
                            </p>
                        </div>

                        <div>
                            @if($service->photo)
                            <img src="{{ asset('storage/' . $service->photo) }}" alt="{{ $service->name }} Photo"
                                class="w-full mb-4 rounded-lg shadow-md">
                            @endif
                            <div class="p-4 bg-blue-100 rounded-lg">
                                <h3 class="mb-2 text-xl font-semibold text-blue-700">Quick Facts</h3>
                                <p class="text-gray-700">{{ $service->short_desc }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Services Section -->

        <section class="py-8 bg-gray-50">
            <div class="container px-4 mx-auto">
                <div class="mb-8 overflow-hidden bg-white rounded-lg shadow-xl">
                    <div class="p-6">
                        <h2 class="mb-6 text-2xl font-semibold text-gray-800">Key Solutions</h2>
                        <div class="mb-12 overflow-x-auto">
                            <table class="w-full overflow-hidden bg-white rounded-lg shadow-md">
                                <thead class="text-white bg-blue-700">
                                    <tr>
                                        <th class="px-4 py-3 text-left">Solution</th>
                                        <th class="hidden px-4 py-3 text-left sm:table-cell">Technical Stack</th>
                                        <th class="hidden px-4 py-3 text-left md:table-cell">Timeline</th>
                                        <th class="hidden px-4 py-3 text-left md:table-cell">Delivery Model</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    // generate items
                                    $randomItems = ['Cloud Migration', 'AI Integration', 'Data Analytics', 'Custom
                                    Software Development', 'Cybersecurity Enhancement', 'IoT Solutions', 'Blockchain
                                    Implementation', 'DevOps Automation'];
                                    $service->items = collect();
                                    for ($i = 0; $i < random_int(3, 7); $i++) { $item=new stdClass(); $item->name =
                                        $randomItems[array_rand($randomItems)];
                                        $item->requirement = ['Basic', 'Intermediate', 'Advanced'][array_rand(['Basic',
                                        'Intermediate', 'Advanced'])];
                                        $item->duration = random_int(1, 6) . ' months';
                                        $item->exam_body = ['In-house Team', 'Third-party Vendor', 'Hybrid
                                        Model'][array_rand(['In-house
                                        Team', 'Third-party Vendor', 'Hybrid Model'])];
                                        $service->items->push($item);
                                        }

                                        @endphp
                                        @foreach($service->items as $item)
                                        <tr class="border-b">
                                            <td class="px-4 py-3">
                                                <div class="font-medium">{{ $item->name }}</div>
                                                <div class="text-sm text-gray-500 sm:hidden">{{ $item->requirement }}
                                                </div>
                                                <div class="text-sm text-gray-500 sm:hidden md:hidden">
                                                    {{ $item->duration }} | {{ $item->exam_body }}
                                                </div>
                                            </td>
                                            <td class="hidden px-4 py-3 sm:table-cell">{{ $item->requirement }}</td>
                                            <td class="hidden px-4 py-3 md:table-cell">{{ $item->duration }}</td>
                                            <td class="hidden px-4 py-3 md:table-cell">{{ $item->exam_body }}</td>
                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section -->


        <!-- Client Success Stories Carousel -->
        <section class="py-16 bg-gray-50">
            <div class="container px-4 mx-auto">
                <!-- Section Header -->
                <div class="mb-12 text-center" data-aos="fade-up">
                    <h2 class="text-3xl font-bold">Client Success Stories</h2>
                    <div class="w-24 h-1 mx-auto mt-4 bg-blue-600 rounded"></div>
                    <p class="max-w-3xl mx-auto mt-4 text-lg text-gray-600">
                        See how our clients have transformed their businesses after partnering with us.
                    </p>
                </div>

                <!-- Swiper Carousel -->
                <div class="testimonial-slider" data-aos="fade-up">
                    <div class="swiper-container overflow-hidden">
                        <div class="swiper-wrapper">
                            @foreach ($successStories as $story)
                            <div class="swiper-slide">
                                <div class="p-6 bg-white rounded-lg shadow-md">
                                    <!-- Header with photo and info -->
                                    <div class="flex items-center mb-4">
                                        <div class="w-16 h-16 mr-4 overflow-hidden rounded-full">
                                            <img src="{{ asset('storage/' . $story->photo) }}"
                                                alt="{{ $story->name }} Photo" class="object-cover w-full h-full">
                                        </div>
                                        <div>
                                            <h4 class="font-bold">{{ $story->name }}</h4>
                                            <p class="text-sm text-gray-600">
                                                {{ $story->company }}
                                            </p>

                                            <!-- ⭐ Star Rating -->
                                            <div class="flex mt-1">
                                                @for ($i = 0; $i < $story->rating; $i++)
                                                    <i class="fas fa-star text-yellow-400 text-sm mr-1"></i>
                                                    @endfor
                                                    @for ($i = 0; $i < 5 - $story->rating; $i++)
                                                        <i class="far fa-star text-gray-300 text-sm mr-1"></i>
                                                        @endfor
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Testimonial Content -->
                                    <p class="italic text-gray-600 mb-4">"{{ $story->statement }}"</p>
                                    <p class="text-sm text-gray-500">
                                        Project Completed in {{ $story->year }}, Now Scaling at {{ $story->company }}
                                    </p>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <!-- Swiper Controls -->
                        <div class="mt-6 swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </section>


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
                            infrastructure — Ziipi Technologies is your strategic tech partner. Reach out and discover
                            how
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

    <!-- JavaScript for interactive elements -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js"></script>
    <script>
        // Initialize AOS animation library
    AOS.init({
      once: true,
      duration: 800,
      offset: 100,
    });
    
    // Initialize testimonial slider
    document.addEventListener('DOMContentLoaded', function() {
      new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 30,
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
        breakpoints: {
          768: {
            slidesPerView: 2,
          },
          1024: {
            slidesPerView: 3,
          }
        }
      });
    });
     
    </script>

</section>