<section class="bg-[#2f4f4f] w-full py-12">
    <div class="max-w-3xl mx-auto text-center space-y-4 py-6">
        <h2 class="text-4xl font-extrabold text-yellow-400 sm:text-5xl mb-6">MY TESTIMONIALS</h2>
        <p class="text-2xl font-extrabold text-white">
            EXPERT IN TEACH AND DESIGN FOR <span class="text-green-400 mt-6">IMPACTFUL RESULTS.</span>
        </p>
    </div>

    <!-- Scrollable container -->
    <div  class=" flex justify-start space-x-8 bg-[#2f4f4f] py-8 overflow-x-auto max-w-5xl mx-auto my-12">
        @foreach ($testimonials as $item)
        <!-- Testimonial Card -->
        <div class="bg-[#3E6E6E] rounded-lg p-6 w-80 shadow-lg flex-shrink-0">
            <div class="flex items-center">
                <div class="h-12 w-12 rounded-full bg-gray-200 -ml-2 -mt-2">
                    <img src="{{ asset('img/testimonials/'. $item->foto) }}" alt="" class="object-cover w-full h-full rounded-full">
                </div>
                <div class="ml-3 -mt-2">
                    <div class="text-white font-bold text-base">{{ $item->nama }}</div>
                    <div class="-mt-1 text-teal-300">{{ $item->pekerjaan }}</div>
                </div>
            </div>
            <div>
                <p class="text-white mt-6 text-sm text-justify">
                    {{ $item->pesan }}
                </p>
            </div>
        </div>
        @endforeach
    </div>
</section>

