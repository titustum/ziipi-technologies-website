<?php

use Livewire\Attributes\Title;
use Livewire\Volt\Component;
use App\Models\SuccessStory;

new
#[Title('Success Stories | Ziipi Technologies')]
class extends Component
{
    public function with() {
        return [
            'successStories' => SuccessStory::where('is_approved', true)
                ->latest()
                ->take(8)
                ->get(),
        ];
    }
};
?>

<main class="overflow-hidden">
    <!-- Hero Section -->
    <section class="relative py-20 overflow-hidden bg-gray-900">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/information-technology-background.jpg') }}" alt="Ziipi Campus"
                class="object-cover w-full h-full opacity-30">
            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/70 to-gray-900/90"></div>
        </div>
        <div class="container relative z-10 px-4 mx-auto text-center">
            <h1 class="mb-2 text-4xl font-bold text-white md:text-5xl lg:text-6xl">Client Success Stories</h1>
            <p class="max-w-2xl mx-auto text-lg text-gray-300 md:text-xl">
                Explore how Ziipi Technologies empowers startups, enterprises, and governments to innovate and scale
                through tailored digital solutions.
            </p>
        </div>
    </section>

    <!-- Success Stories Grid -->
    <section class="py-20 bg-gray-50">
        <div class="container px-4 mx-auto max-w-7xl">
            <div class="mb-16 text-center">
                <h2 class="mb-4 text-3xl font-bold text-gray-800 lg:text-4xl">Stories of Digital Transformation</h2>
                <div class="w-24 h-1 mx-auto bg-blue-600 rounded"></div>
                <p class="max-w-2xl mx-auto mt-4 text-lg text-gray-600">
                    Discover how our clients are driving impact across industries with Ziipi’s tech solutions.
                </p>
            </div>

            <div class="text-center mb-12">
                <a href="{{ route('create.success.story') }}"
                    class="inline-block px-6 py-3 text-white bg-blue-600 hover:bg-blue-700 font-semibold rounded-lg shadow-lg transition duration-300">
                    <i class="fas fa-plus-circle mr-2"></i> Share Your Success
                </a>
            </div>

            <!-- Story Cards -->
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3" data-aos="fade-up">
                @foreach ($successStories as $story)
                <div class="group">
                    <div
                        class="relative overflow-hidden bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                        <div class="relative p-6 pb-0">
                            <div class="flex justify-center">
                                <div class="relative">
                                    <div
                                        class="w-24 h-24 p-1 bg-gradient-to-r from-blue-400 to-blue-600 rounded-full shadow-lg">
                                        <img src="{{ $story->photo ? asset('storage/' . $story->photo) : asset('images/default-avatar.jpg') }}"
                                            alt="{{ $story->name }}" class="object-cover w-full h-full rounded-full">
                                    </div>
                                    <div
                                        class="absolute -bottom-2 -right-2 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center shadow-lg">
                                        <i class="fas fa-briefcase text-white text-xs"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 pt-4">
                            <div class="text-center mb-4">
                                <h3 class="text-xl font-bold text-gray-800 mb-1">{{ $story->name }}</h3>
                                <p class="text-blue-600 font-medium">{{ $story->project_type }}</p>

                                <div class="flex justify-center mt-3 mb-4 text-blue-400">
                                    @for ($i = 0; $i < $story->rating; $i++)
                                        <i class="fas fa-star text-sm"></i>
                                        @endfor
                                        @for ($i = 0; $i < 5 - $story->rating; $i++)
                                            <i class="far fa-star text-sm text-gray-300"></i>
                                            @endfor
                                </div>
                            </div>

                            <div class="mb-6">
                                <svg class="w-8 h-8 text-blue-200 mb-3" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.039 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" />
                                </svg>
                                <blockquote class="text-gray-600 leading-relaxed italic">
                                    {{ $story->statement }}
                                </blockquote>
                            </div>

                            <div class="border-t pt-4">
                                <p class="text-sm text-gray-500 mb-1">Client Role:</p>
                                <p class="font-semibold text-gray-800">
                                    <span class="text-green-600">{{ $story->occupation }}</span>
                                </p>
                                <p class="text-sm text-gray-600 mt-1">at {{ $story->company }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            @if($successStories->count() > 6)
            <div class="text-center mt-12">
                <button
                    class="px-8 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-300 shadow-lg hover:shadow-xl">
                    Load More Stories
                </button>
            </div>
            @endif
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-white">
        <div class="container px-4 mx-auto max-w-6xl">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 mx-auto mb-4 bg-blue-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-users text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-800 mb-2">{{ $successStories->count() }}+</h3>
                    <p class="text-gray-600">Happy Clients</p>
                </div>

                <div data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 mx-auto mb-4 bg-green-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-chart-line text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-800 mb-2">95%</h3>
                    <p class="text-gray-600">Project Success Rate</p>
                </div>

                <div data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 mx-auto mb-4 bg-yellow-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-handshake text-yellow-600 text-2xl"></i>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-800 mb-2">200+</h3>
                    <p class="text-gray-600">Business Partners</p>
                </div>

                <div data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 mx-auto mb-4 bg-purple-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-trophy text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-800 mb-2">50+</h3>
                    <p class="text-gray-600">Recognitions & Awards</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 text-white bg-blue-800">
        <div class="container px-4 mx-auto">
            <div class="flex flex-col items-center justify-between md:flex-row">
                <div class="mb-8 text-center md:mb-0 md:text-left" data-aos="fade-right">
                    <h2 class="mb-4 text-3xl font-bold">Looking to drive your next digital success?</h2>
                    <p class="max-w-xl text-white/90">
                        Partner with Ziipi Technologies to accelerate your transformation and turn ideas into impact.
                    </p>
                </div>
                <div class="flex flex-col gap-4 sm:flex-row" data-aos="fade-left">
                    <a href="{{ route('contact') }}"
                        class="px-6 py-3 font-bold text-center text-black transition duration-300 bg-white rounded-lg hover:bg-gray-100 shadow-lg hover:shadow-xl">
                        Let's Talk
                    </a>
                    <a href="{{ route('about') }}"
                        class="px-6 py-3 font-bold text-center text-white transition duration-300 border-2 border-white rounded-lg hover:bg-white/10">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>