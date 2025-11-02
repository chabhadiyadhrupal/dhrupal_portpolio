<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>{{ $title ?? 'Dhrupal Chabhadiya — Portfolio' }}</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-[Poppins] bg-gray-50 text-gray-900">

  <!-- NAVBAR -->
  <header id="site-header" class="fixed w-full z-50 transition-all">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
      <a href="{{ route('home') }}" class="text-xl font-bold text-green-700">Portfx.</a>

      <nav class="hidden md:flex gap-6 items-center text-sm text-gray-700">
        <a href="#home" class="hover:text-green-600">Home</a>
        <a href="#about" class="hover:text-green-600">About</a>
        <a href="#services" class="hover:text-green-600">Services</a>
        <a href="#works" class="hover:text-green-600">Works</a>
        <a href="#contact" class="hover:text-green-600">Contact</a>
      </nav>

      <a href="#contact" class="hidden md:inline-block bg-green-600 text-white px-4 py-2 rounded-full hover:bg-green-700 transition">Hire Me</a>

      <button id="mobile-toggle" class="md:hidden text-2xl">☰</button>
    </div>
  </header>

  <main class="pt-20">
    @yield('content')
  </main>

  <footer class="bg-gray-900 text-gray-300 py-10 mt-16">
    <div class="max-w-7xl mx-auto px-6 text-center">
      <p class="mb-4">© {{ date('Y') }} Dhrupal Chabhadiya — All rights reserved.</p>
      <small class="text-xs text-gray-400">Built with Laravel & Tailwind CSS</small>
    </div>
  </footer>

</body>
</html>
