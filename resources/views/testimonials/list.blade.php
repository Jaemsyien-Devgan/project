<x-app-layout>
    <div class="py-12 bg-teal-900 min-h-screen">
        <!-- Alert -->
        @if (session('success'))
        <div class="w-full max-w-screen-xl mx-auto bg-green-200 text-green-900 p-3 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif

        <div class=" w-full max-w-screen-xl lg:py-8 mx-auto bg-white rounded-lg lg:p-8 text-white text-center">
                    <!-- Title and Create Button -->
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-[#2f4f4f] font-extrabold text-xl">MENAMPILKAN Data Testimonials</h1>
                <div class="flex space-x-2">
                    <a href="{{ url('pdf_generator') }}" target="_blank" class="bg-blue-400 text-white px-4 py-2 rounded-md flex items-center space-x-2">
                        Download
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7l7 7-7 7"></path>
                        </svg>
                    </a>
                    <a href="{{ route('testimonials.create') }}" class="bg-green-900 text-white px-4 py-2 rounded-md flex items-center space-x-2">
                        Create
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full border-collapse ">
                    <thead>
                        <tr class="bg-teal-900 text-yellow-500">
                            <th class="border border-green-600 p-2">ID</th>
                            <th class="border border-green-600 p-2">NAMA</th>
                            <th class="border border-green-600 p-2 ">PESAN</th>
                            <th class="border border-green-600 p-2">FOTO</th>
                            <th class="border border-green-600 p-2">PEKERJAAN</th>
                            <th class="border border-green-600 px-2">ACTION</th>
                        </tr>
                        @if ($testimonials->isNotEmpty())
                            @foreach ($testimonials as $item)
                            <tr>
                                <td class="border border-green-600 p-1 text-[#2f4f4f] align-middle">{{ $loop->iteration }}</td>
                                <td class="border border-green-600 p-1 text-[#2f4f4f] align-middle">{{ $item->nama }}</td>
                                <td class="border border-green-600 p-1 text-[#2f4f4f] align-middle">{{ $item->pesan }}</td>
                                <td class="border border-green-600 p-1 text-[#2f4f4f] align-middle">
                                    @if ($item->foto != "")
                                        <img src="{{ asset('img/testimonials/' . $item->foto) }}" alt="{{ $item->foto }}" class="w-full h-16 object-cover mx-auto">
                                    @endif
                                </td>
                                <td class="border border-green-600 p-1 text-[#2f4f4f] align-middle">{{ $item->pekerjaan }}</td>
                                <td class="border border-green-600 p-1 justify-center items-center space-x-2 align-middle min-w-[150px] ">

                                    <a href="{{ route('testimonials.destroy', $item->id) }}">
                                        <button class="bg-red-500 text-white px-3 py-1 rounded-md" onclick="return confirm('Are you sure you want to delete this data?');">Hapus</button>
                                    </a>
                                    <a href="{{ route('testimonials.edit', $item->id) }}">
                                        <button class="bg-blue-500 text-white px-3 py-1 rounded-md">Edit</button>
                                    </a>

                                </td>
                            </tr>
                            @endforeach
                        @endif
                    </thead>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>


