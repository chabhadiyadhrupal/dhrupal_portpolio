<section id="testimonials" class="py-20 bg-white">
  <div class="container mx-auto px-6 text-center">
    <h2 class="text-green-500 text-sm uppercase font-bold mb-2">Testimonials</h2>
    <h3 class="text-3xl font-bold mb-10">What Clients Say</h3>

    <div class="grid md:grid-cols-3 gap-8">
      @foreach ([
        ['John Doe', '“Amazing design and great communication!”'],
        ['Lisa Smith', '“Delivered exactly what I wanted!”'],
        ['Adam Lee', '“Professional and creative designer.”'],
      ] as [$name, $quote])
      <div class="bg-gray-50 p-6 rounded-xl shadow-md">
        <p class="italic text-gray-700 mb-4">{{ $quote }}</p>
        <h4 class="font-semibold text-green-500">{{ $name }}</h4>
      </div>
      @endforeach
    </div>
  </div>
</section>
