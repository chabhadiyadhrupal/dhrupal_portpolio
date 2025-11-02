<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-black text-white font-sans">

    <!-- Hero Section -->
    <section class="min-h-screen flex flex-col md:flex-row items-center justify-center px-8">
        <div class="text-center md:text-left md:w-1/2 space-y-4">
            <h1 class="text-4xl font-bold">Hello, I'm <span class="text-indigo-400">Utsav</span></h1>
            <h2 class="text-xl font-semibold text-gray-300">A UI/UX Designer</h2>
            <p class="text-gray-400 max-w-md">
                I design and develop modern, user-centered digital products.
            </p>
            <a href="#contact" class="inline-block bg-indigo-500 hover:bg-indigo-600 text-white px-6 py-2 rounded-lg transition">Hire Me</a>
        </div>

        <div class="mt-8 md:mt-0 md:w-1/2 flex justify-center">
            <!-- Dynamic Image -->
            <img src="{{ asset('storage/' . $user->profile_photo) }}" 
                 alt="Profile Photo" 
                 class="rounded-2xl shadow-lg w-64 h-64 object-cover border-2 border-indigo-500">
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 px-8 text-center">
        <h2 class="text-3xl font-bold mb-4">About Me</h2>
        <p class="text-gray-400 max-w-2xl mx-auto">
            I'm a creative designer and developer with a passion for digital experiences.
        </p>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 px-8 bg-gray-900">
        <h2 class="text-3xl font-bold text-center mb-10">My Services</h2>
        <div class="grid md:grid-cols-3 gap-8 text-center">
            <div class="p-6 bg-gray-800 rounded-xl hover:bg-gray-700 transition">
                <h3 class="font-semibold text-xl mb-2">UI/UX Design</h3>
                <p class="text-gray-400">Clean and modern interfaces with user-friendly experiences.</p>
            </div>
            <div class="p-6 bg-gray-800 rounded-xl hover:bg-gray-700 transition">
                <h3 class="font-semibold text-xl mb-2">Web Development</h3>
                <p class="text-gray-400">High-quality responsive websites built with Laravel & Tailwind.</p>
            </div>
            <div class="p-6 bg-gray-800 rounded-xl hover:bg-gray-700 transition">
                <h3 class="font-semibold text-xl mb-2">Branding</h3>
                <p class="text-gray-400">Consistent and professional identity for your business.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-6 text-center text-gray-500 text-sm">
        © {{ date('Y') }} My Portfolio. All rights reserved.
    </footer>

</body>
</html>
