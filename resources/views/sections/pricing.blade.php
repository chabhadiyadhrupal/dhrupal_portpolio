<section id="pricing" class="py-20 bg-gray-50">
  <div class="container mx-auto px-6 text-center">
    <h2 class="text-green-500 text-sm uppercase font-bold mb-2">Pricing</h2>
    <h3 class="text-3xl font-bold mb-10">Choose Your Plan</h3>

    <div class="grid md:grid-cols-3 gap-8">
      @foreach ([
        ['Basic', '$99', '1 Page Design'],
        ['Standard', '$199', 'Up to 5 Pages'],
        ['Premium', '$299', 'Unlimited Pages'],
      ] as [$title, $price, $feature])
      <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-xl">
        <h4 class="text-xl font-semibold mb-2">{{ $title }}</h4>
        <p class="text-green-500 text-3xl font-bold mb-4">{{ $price }}</p>
        <p class="text-gray-600 mb-6">{{ $feature }}</p>
        <a href="#contact" class="bg-green-500 text-white px-6 py-2 rounded-lg">Get Started</a>
      </div>
      @endforeach
    </div>
  </div>
</section>
