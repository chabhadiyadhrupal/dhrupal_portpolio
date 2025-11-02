<section id="blog" class="py-20 bg-gray-50">
  <div class="container mx-auto px-6 text-center">
    <h2 class="text-green-500 text-sm uppercase font-bold mb-2">Blog</h2>
    <h3 class="text-3xl font-bold mb-10">Latest Articles</h3>

    <div class="grid md:grid-cols-3 gap-8">
      @foreach ([
        ['Design Trends 2025', 'Latest updates in modern web design.'],
        ['Improving UX', 'Tips to improve user experience in websites.'],
        ['Personal Branding', 'Build a strong online design presence.'],
      ] as [$title, $desc])
      <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-xl">
        <h4 class="font-semibold text-lg mb-2">{{ $title }}</h4>
        <p class="text-gray-600">{{ $desc }}</p>
      </div>
      @endforeach
    </div>
  </div>
</section>
