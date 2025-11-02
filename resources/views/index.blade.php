<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dhrupal Chabhadiya - Portfolio</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<style>
  body {
    margin: 0;
    color: #e5e7eb;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(-45deg, #0f172a, #1e293b, #111827, #0c0a09);
    background-size: 400% 400%;
    animation: gradientMove 20s ease infinite;
    overflow-x: hidden;
  }

  /* Gradient animation */
  @keyframes gradientMove {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
  }

  /* Floating glow particles */
  .particles {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: -1;
  }
  .particle {
    position: absolute;
    width: 6px;
    height: 6px;
    background: rgba(255, 255, 255, 0.15);
    border-radius: 50%;
    animation: floatUp linear infinite;
  }

  @keyframes floatUp {
    from {
      transform: translateY(100vh) scale(0.8);
      opacity: 0;
    }
    50% {
      opacity: 1;
    }
    to {
      transform: translateY(-10vh) scale(1);
      opacity: 0;
    }
  }

  /* Profile border animation */
  @keyframes spin-border {
    0% { filter: hue-rotate(0deg); }
    100% { filter: hue-rotate(360deg); }
  }
  .profile-animate {
    border: 4px solid transparent;
    border-radius: 50%;
    background: linear-gradient(45deg, #ef4444, #3b82f6, #a855f7);
    background-size: 400% 400%;
    animation: gradientMove 6s linear infinite, spin-border 6s linear infinite;
    padding: 3px;
  }

  html {
    scroll-behavior: smooth;
  }

   .profile-ring {
    border-radius: 50%;
    background: rgba(239, 68, 68, 0.3);
    box-shadow: 0 0 20px rgba(239, 68, 68, 0.5);
    animation: pulseGlow 3s infinite ease-in-out;
    padding: 5px;
  }

  @keyframes pulseGlow {
    0% {
      box-shadow: 0 0 10px rgba(239, 68, 68, 0.4),
                  0 0 20px rgba(239, 68, 68, 0.2);
    }
    50% {
      box-shadow: 0 0 25px rgba(239, 68, 68, 0.7),
                  0 0 50px rgba(239, 68, 68, 0.4);
    }
    100% {
      box-shadow: 0 0 10px rgba(239, 68, 68, 0.4),
                  0 0 20px rgba(239, 68, 68, 0.2);
    }
  }
</style>


</head>
<body class="min-h-screen">
    <div class="particles">
  <span class="particle" style="left:10%; animation-duration:15s;"></span>
  <span class="particle" style="left:30%; animation-duration:20s;"></span>
  <span class="particle" style="left:50%; animation-duration:18s;"></span>
  <span class="particle" style="left:70%; animation-duration:25s;"></span>
  <span class="particle" style="left:90%; animation-duration:22s;"></span>
</div>


  <!-- Navbar -->
  <nav class="flex justify-between items-center px-8 py-4 bg-gray-900 bg-opacity-90 fixed top-0 w-full z-50 backdrop-blur-md">
    <h1 class="text-red-500 font-bold text-lg">Portfolio</h1>
    <ul class="flex space-x-6 text-sm text-gray-300">
      <li><a href="#about" class="hover:text-red-400">About</a></li>
      <li><a href="#services" class="hover:text-red-400">Services</a></li>
      <li><a href="#works" class="hover:text-red-400">Works</a></li>
      <li><a href="#contact" class="hover:text-red-400">Contact</a></li>
    </ul>
  </nav>

  <!-- Hero Section -->
<section class="text-center pt-32 pb-16" data-aos="fade-up">
  <div class="relative w-40 h-40 mx-auto">
    
    <!-- Animated Gradient Border -->
    <div class="absolute inset-0 rounded-full bg-gradient-to-r from-red-500 via-purple-500 to-cyan-500 animate-spin-slow p-[3px]"></div>
    
    <!-- Profile Image Wrapper -->
    <div class="relative w-40 h-40 flex items-center justify-center rounded-full overflow-hidden z-10 shadow-lg">
      <img src="/images/profile.jpg" alt="Profile"
           class="w-36 h-36 object-cover rounded-full border-2 border-gray-900 shadow-[0_0_25px_rgba(239,68,68,0.6)]">
    </div>
  </div>

  <h1 class="text-2xl font-semibold mt-6">
    Hello, I'm <span class="text-red-500 font-bold">Dhrupal Chabhadiya</span>
  </h1>
  <p class="text-gray-400 mt-2">Laravel Developer • Web Developer</p>
  <p class="max-w-xl mx-auto mt-4 text-gray-300 px-4">
    I'm a web developer who loves all things tech. I specialize in front-end and back-end Laravel development
    and love learning new tools to build efficient, beautiful experiences.
  </p>
  <a href="#contact" class="inline-block mt-6 px-6 py-2 bg-red-500 hover:bg-red-600 rounded-md text-white font-medium shadow-lg transition">
    Hire Me
  </a>
</section>


  <!-- Stats Section -->
  <section class="grid grid-cols-2 md:grid-cols-4 text-center bg-gray-800 py-8" data-aos="fade-up">
    <div><p class="text-2xl text-red-400 font-bold">20+</p><p class="text-sm text-gray-400">Projects</p></div>
    <div><p class="text-2xl text-red-400 font-bold">30+</p><p class="text-sm text-gray-400">Clients</p></div>
    <div><p class="text-2xl text-red-400 font-bold">42.5k+</p><p class="text-sm text-gray-400">Hours</p></div>
    <div><p class="text-2xl text-red-400 font-bold">5+</p><p class="text-sm text-gray-400">Years Exp.</p></div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-16 text-center" data-aos="fade-up">
    <h2 class="text-red-500 font-semibold text-xl mb-4">About Me</h2>
    <p class="max-w-2xl mx-auto text-gray-300">
      I'm a Laravel & front-end developer with experience in Blade, JavaScript, and more. I enjoy learning
      new tools and building efficient, beautiful interfaces.
    </p>
  </section>

  <!-- Services Section -->
  <section id="services" class="py-16 bg-gray-900 text-center" data-aos="zoom-in">
    <h2 class="text-red-500 font-semibold text-xl mb-8">Services</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto px-6">
      <div class="bg-gray-800 p-6 rounded-xl shadow-md hover:shadow-red-500/30 transition">
        <h3 class="font-semibold text-lg mb-2 text-white">Web Development</h3>
        <p class="text-gray-400 text-sm">Laravel, PHP, REST APIs, AJAX — responsive & fast websites.</p>
      </div>
      <div class="bg-gray-800 p-6 rounded-xl shadow-md hover:shadow-red-500/30 transition">
        <h3 class="font-semibold text-lg mb-2 text-white">Unity Game Dev</h3>
        <p class="text-gray-400 text-sm">Game prototypes, C# scripting, and optimization.</p>
      </div>
      <div class="bg-gray-800 p-6 rounded-xl shadow-md hover:shadow-red-500/30 transition">
        <h3 class="font-semibold text-lg mb-2 text-white">Branding & UI/UX</h3>
        <p class="text-gray-400 text-sm">Design systems, clean UI, and user-friendly interfaces.</p>
      </div>
    </div>
  </section>

  <!-- Works Section (Optional) -->
  <section id="works" class="py-16 text-center" data-aos="fade-up">
    <h2 class="text-red-500 font-semibold text-xl mb-4">Latest Works</h2>
    <p class="text-gray-400">No project images available right now. Stay tuned for upcoming work!</p>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-16 bg-gray-900 text-center" data-aos="fade-up">
    <h2 class="text-red-500 font-semibold text-xl mb-4">Let's Build Something Great</h2>
    <p class="text-gray-400 mb-6">Have an idea or project? I’d love to help — drop a message below.</p>
    <form class="max-w-md mx-auto space-y-4">
      <input type="text" placeholder="Your Name" class="w-full p-3 rounded-md bg-gray-800 text-white outline-none focus:ring-2 focus:ring-red-500">
      <input type="email" placeholder="Your Email" class="w-full p-3 rounded-md bg-gray-800 text-white outline-none focus:ring-2 focus:ring-red-500">
      <textarea placeholder="Your Message" class="w-full p-3 rounded-md bg-gray-800 text-white outline-none focus:ring-2 focus:ring-red-500"></textarea>
      <button type="submit" class="w-full bg-red-500 hover:bg-red-600 text-white py-2 rounded-md transition">Send Message</button>
    </form>
  </section>

  <!-- Footer -->
  <footer class="py-6 text-center text-gray-500 text-sm border-t border-gray-800">
    © 2025 Dhrupal Chabhadiya — All rights reserved. <br>
    Built with ❤️ using Tailwind CSS & AOS
  </footer>

  <script>
    AOS.init({ duration: 1000, once: true });
  </script>
</body>
</html>
