{{-- <section class="w-full mx-auto bg-[#2f4f4f] pb-24">
    <div class="text-center">
        <h1 class="text-3xl font-extrabold text-yellow-400 sm:text-4xl py-4">MY PROJECT</h1>
        <p class="text-lg font-bold text-white mb-6">SIMPLIFYING TASKS AND ENHANCING EXPERIENCES</p>
    </div>

    <div class="mt-12 max-w-5xl mx-auto snap-x ">
        <div id="draggable-container" class="w-100 flex justify-start space-x-16 overflow-x-auto no-scrollbar ">
            @foreach ($project as $item)
                <div class="bg-white rounded-lg shadow-lg flex-none w-72 p-4 snap-center border border-2 border-green-600">
                    <div class="bg-pink-200 h-24 w-full rounded ">
                        <img src="{{ asset('img/crousel/'. $item->image) }}" alt="" class="object-cover w-full h-full rounded-lg">
                    </div>
                    <h3 class="mt-4 font-bold text-sm h-8 text-gray-700">{{ $item->judul }}</h3>
                    <p class="text-gray-700 mt-2 text-sm h-24 text-justify">{{ $item->deskripsi }}</p>
                    <div class="flex items-center mt-4">
                        <span class="mt-2 text-sm text-gray-700 font-medium ">{{ $item->penulis }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



</section> --}}

<section class="bg-[#2f4f4f] w-full py-12">
    <div class="max-w-3xl mx-auto text-center space-y-4 py-6">
        <h2 class="text-4xl font-extrabold text-yellow-400 sm:text-5xl mb-6">MY PORTFOLIO</h2>
        <p class="text-2xl font-extrabold text-white">
            EXPERT IN TEACH AND DESIGN FOR <span class="text-green-400 mt-6">IMPACTFUL RESULTS.</span>
        </p>
    </div>

    <!-- Scrollable container -->
    <div  class=" flex justify-start space-x-8 bg-[#2f4f4f] py-8 overflow-x-auto max-w-5xl mx-auto my-12">
        @foreach ($project as $item)
        <!-- Testimonial Card -->
        <div class="bg-[#3E6E6E] rounded-lg p-2 w-80 shadow-lg flex-shrink-0">
            <div class=" items-center">
                <div class=" h-[150px] w-full bg-gray-200 rounded-lg">
                    <img src="{{ asset('img/crousel/'. $item->image) }}" alt="" class="object-cover w-full h-full rounded-lg">
                </div>
            </div>
            <div class="my-2 ml-2 items-center">
                <div class="text-white font-bold text-base h-12">{{ $item->judul }}</div>
                <p class="text-white text-sm text-justify h-24 overflow-y-hidden">
                    {{ $item->deskripsi }}
                </p>
            </div>
            <div>
                <div class="ml-2 mt-6 text-yellow-300 font-bold text-base">{{ $item->penulis }}</div>
            </div>
        </div>
        @endforeach
    </div>
</section>




