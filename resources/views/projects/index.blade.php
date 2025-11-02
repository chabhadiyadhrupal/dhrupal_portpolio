@extends('layouts.app')

@section('content')

    {{-- Hero Section --}}
    <section id="home" class="relative bg-gradient-to-br from-green-900 via-green-800 to-green-700 text-white py-24 md:py-32 overflow-hidden">
        <div class="max-w-6xl mx-auto flex flex-col-reverse md:flex-row items-center justify-between px-6 gap-10">
            
            {{-- Left content --}}
            <div class="md:w-1/2 space-y-6 text-center md:text-left">
                <h2 class="text-4xl md:text-6xl font-extrabold leading-tight">
                    Hello, I'm <span class="text-green-300">Utsav</span>
                </h2>
                <h3 class="text-2xl font-semibold text-green-200">A UI/UX Designer</h3>
                <p class="text-gray-200 max-w-md mx-auto md:mx-0 leading-relaxed">
                    I design and develop modern, user-centered digital products that blend functionality with clean aesthetics.
                </p>
                <a href="#contact"
                class="inline-block bg-green-500 hover:bg-green-600 text-white px-8 py-3 rounded-lg font-semibold transition transform hover:scale-105 shadow-md">
                    Hire Me
                </a>
            </div>

            {{-- Right image --}}
            <div class="md:w-1/2 flex justify-center relative">
                <div class="absolute w-72 h-72 md:w-96 md:h-96 bg-green-600/20 rounded-full blur-3xl -z-10"></div>
                <img src="/images/profile.jpg" alt="Utsav" 
                    class="w-72 md:w-96 h-auto rounded-3xl shadow-2xl ring-4 ring-green-500/30 object-cover object-top">
            </div>
        </div>

        {{-- bottom shape --}}
        <svg class="absolute bottom-0 left-0 w-full text-gray-50" viewBox="0 0 1440 150">
            <path fill="currentColor" d="M0,64L80,80C160,96,320,128,480,144C640,160,800,160,960,144C1120,128,1280,96,1360,80L1440,64V0H0Z"></path>
        </svg>
    </section>


    {{-- About Section --}}
    <section id="about" class="py-20 bg-gray-50 text-gray-800">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <img src="/images/about.jpg" class="rounded-2xl shadow-lg hover:scale-105 transition-transform" alt="About Me">
            <div>
                <h2 class="text-4xl font-bold mb-4 text-green-700">About Me</h2>
                <p class="mb-6 text-gray-600 leading-relaxed">
                    I'm a creative designer and developer with a passion for crafting seamless digital experiences.
                </p>

                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between mb-1 text-sm font-medium">
                            <span>UI/UX Design</span><span>90%</span>
                        </div>
                        <div class="w-full bg-gray-200 h-2 rounded-full overflow-hidden">
                            <div class="bg-green-500 h-2 rounded-full w-[90%]"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between mb-1 text-sm font-medium">
                            <span>Web Development</span><span>80%</span>
                        </div>
                        <div class="w-full bg-gray-200 h-2 rounded-full overflow-hidden">
                            <div class="bg-green-500 h-2 rounded-full w-[80%]"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Services --}}
    <section id="services" class="bg-white py-20">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-green-700 mb-12">My Services</h2>
            <div class="grid md:grid-cols-3 gap-10">
                @foreach ([
                    ['title' => 'UI/UX Design', 'desc' => 'Clean, modern, and user-friendly interface designs.'],
                    ['title' => 'Web Development', 'desc' => 'Responsive Laravel & Tailwind websites built to perform.'],
                    ['title' => 'Branding', 'desc' => 'Professional brand identity that speaks for your business.']
                ] as $service)
                    <div class="bg-gray-50 hover:bg-green-50 p-8 rounded-2xl shadow-md hover:shadow-xl transition-all">
                        <h3 class="font-bold text-xl text-green-700 mb-3">{{ $service['title'] }}</h3>
                        <p class="text-gray-600">{{ $service['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Portfolio --}}
    <section id="portfolio" class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-green-700 mb-12">Latest Works</h2>
            <div class="grid md:grid-cols-3 gap-10">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
                    <img src="/images/work1.jpg" alt="Project" class="w-full h-56 object-cover">
                    <div class="p-6 text-left">
                        <h3 class="text-lg font-semibold text-green-700 mb-2">Project Title</h3>
                        <p class="text-gray-600 text-sm">Short description about your project goes here.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
