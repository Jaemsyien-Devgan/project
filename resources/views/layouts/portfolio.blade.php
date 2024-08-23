<section class="w-full mx-auto bg-[#2f4f4f] pb-24">
    <div class="text-center">
        <h1 class="text-3xl font-extrabold text-yellow-400 sm:text-4xl py-4">MY PROJECT</h1>
        <p class="text-lg font-bold text-white">SIMPLIFYING TASKS AND ENHANCING EXPERIENCES</p>
    </div>

    <div class="mt-8 max-w-5xl mx-auto snap-x ">
        <h2 class="text-white text-lg font-semibold mb-4 pb-4">MOST RECENT WORK</h2>
        <div id="draggable-container" class="w-100 flex justify-start space-x-16 overflow-x-auto no-scrollbar">
            @foreach ($project as $item)
                <div class="bg-white rounded-lg shadow-lg flex-none w-72 p-4 snap-center border border-4 border-yellow-400">
                    <div class="bg-pink-200 h-24 w-full rounded ">
                        <img src="{{ asset('img/crousel/'. $item->image) }}" alt="" class="object-cover w-full h-full">
                    </div>
                    <h3 class="mt-4 font-bold text-sm h-8 text-gray-700">{{ $item->judul }}</h3>
                    <p class="text-gray-700 mt-2 text-sm h-24 overflow-y-hidden text-justify">{{ $item->deskripsi }}</p>
                    <div class="flex items-center mt-4">
                        <span class="mt-2 text-sm text-gray-700 font-medium ">{{ $item->penulis }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</section>


<script>
    const slider = document.getElementById('draggable-container');
    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        slider.classList.add('active');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });

    slider.addEventListener('mouseleave', () => {
        isDown = false;
        slider.classList.remove('active');
    });

    slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.classList.remove('active');
    });

    slider.addEventListener('mousemove', (e) => {
        if(!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 2; // scroll-fast
        slider.scrollLeft = scrollLeft - walk;
    });
</script>
