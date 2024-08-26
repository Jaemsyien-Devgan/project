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
                <h1 class="text-[#2f4f4f] font-extrabold text-xl">MENAMPILKAN PROJECT</h1>
                <div class="flex space-x-2">
                    <a href="{{ url('pdf_generator') }}" target="_blank" class="bg-blue-400 text-white px-4 py-2 rounded-md flex items-center space-x-2">
                        Download
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7l7 7-7 7"></path>
                        </svg>
                    </a>
                    <a href="{{ route('project.create') }}" class="bg-green-900 text-white px-4 py-2 rounded-md flex items-center space-x-2">
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
                            <th class="border border-green-600 p-2">JUDUL</th>
                            <th class="border border-green-600 p-2 ">DESKRIPSI</th>
                            <th class="border border-green-600 p-2">GAMBAR</th>
                            <th class="border border-green-600 p-2">PENULIS</th>
                            <th class="border border-green-600 px-2">ACTION</th>
                        </tr>
                        @if ($project->isNotEmpty())
                            @foreach ($project as $item)
                            <tr>
                                <td class="border border-green-600 p-1 text-[#2f4f4f] align-middle">{{ $loop->iteration }}</td>
                                <td class="border border-green-600 p-1 text-[#2f4f4f] align-middle">{{ $item->judul }}</td>
                                <td class="w-16 border border-green-600 p-1 text-[#2f4f4f] align-middle">{{ $item->deskripsi }}</td>
                                <td class="border border-green-600 p-1 text-[#2f4f4f] align-middle">
                                    @if ($item->image != "")
                                        <img src="{{ asset('img/crousel/' . $item->image) }}" alt="{{ $item->image }}" class="w-full h-16 object-cover mx-auto">
                                    @endif
                                </td>
                                <td class="border border-green-600 p-1 text-[#2f4f4f] align-middle">{{ $item->penulis }}</td>
                                <td class="border border-green-600 p-1 justify-center items-center space-x-2 align-middle min-w-[150px] ">

                                    <a href="{{ route('project.destroy', $item->id) }}">
                                        <button class="bg-red-500 text-white px-3 py-1 rounded-md" onclick="return confirm('Are you sure you want to delete this data?');">Hapus</button>
                                    </a>
                                    <a href="{{ route('project.edit', $item->id) }}">
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

{{-- <x-app-layout>
    <div class="py-12 bg-teal-900 min-h-screen">
        <!-- Alert -->
        @if (session('success'))
            <div class="w-full max-w-screen-xl mx-auto bg-green-200 text-green-900 p-3 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif

        <div class="w-full max-w-screen-xl lg:py-8 mx-auto bg-white rounded-lg lg:p-8 text-center">
            <!-- Title and Create Button -->
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-[#2f4f4f] font-extrabold text-xl">MENAMPILKAN PROJECT</h1>
                <a href="{{ route('project.create') }}" class="bg-green-900 text-white px-4 py-2 rounded-md flex items-center space-x-2">
                    Create
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-teal-900 text-yellow-500">
                            <th class="border border-green-600 p-2">ID</th>
                            <th class="border border-green-600 p-2">JUDUL</th>
                            <th class="border border-green-600 p-2">DESKRIPSI</th>
                            <th class="border border-green-600 p-2">GAMBAR</th>
                            <th class="border border-green-600 p-2">PENULIS</th>
                            <th class="border border-green-600 px-2">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($project->isNotEmpty())
                            @foreach ($project as $item)
                                <tr>
                                    <td class="border border-green-600 p-1 text-[#2f4f4f] align-middle">{{ $item->id }}</td>
                                    <td class="border border-green-600 p-1 text-[#2f4f4f] align-middle">{{ $item->judul }}</td>
                                    <td class="border border-green-600 p-1 text-[#2f4f4f] align-middle">{{ $item->deskripsi }}</td>
                                    <td class="border border-green-600 p-1 text-[#2f4f4f] align-middle">
                                        @if ($item->image != "")
                                            <img src="{{ asset('img/crousel/' . $item->image) }}" alt="{{ $item->image }}" class="w-10 h-10 object-cover mx-auto">
                                        @endif
                                    </td>
                                    <td class="border border-green-600 p-1 text-[#2f4f4f] align-middle">{{ $item->penulis }}</td>
                                    <td class="border border-green-600 p-1 flex justify-center items-center space-x-2 align-middle">
                                        <button class="bg-red-500 text-white px-3 py-1 rounded-md">hapus</button>
                                        <button class="bg-blue-500 text-white px-3 py-1 rounded-md">edit</button>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout> --}}
