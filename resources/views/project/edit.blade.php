
<x-app-layout>
    <div class="min-h-screen bg-teal-900 flex flex-col justify-center items-center p-8">
        <div class="font-extrabold py-6 text-white text-xl flex w-full max-w-6xl justify-between items-center">
            <h1>EDITPROJECT</h1>
            <a href="{{ route('project.index') }}" class="w-auto inline-flex items-center px-6 py-2 bg-white border border-transparent rounded-md font-semibold text-xs text-[#2f4f4f] uppercase tracking-widest hover:bg-green-700 focus:bg-green-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition ease-in-out duration-150 hover:text-white hover:border hover:border-yellow-500">
                <!-- Back Icon -->
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Back
            </a>
        </div>

        <div class="bg-white text-green-800 w-full max-w-6xl rounded-lg shadow-lg p-6 grid grid-cols-1 ">
            <!-- Bagian Kiri (Form Input Data) -->

            <div>
                <form action="{{ route('project.update', $project->id) }}" class="space-y-6 col-span-1" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <!-- Judul Project -->
                <div>
                    <label for="judul" class="block text-gray-700 font-extrabold text-base">JUDUL PROJECT</label>
                    <input type="text" value="{{ $project->judul }}" name="judul" id="judul" class="font-bold bg-white w-full p-3 border border-2 border-green-300 rounded-lg focus:outline-none focus:border-green-300" placeholder="Masukkan Judul Project">
                    @error('judul')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Deskripsi Project -->
                <div>
                    <label for="deskripsi" class="block text-gray-700 font-extrabold text-base">DESKRIPSI PROJECT</label>
                    <textarea name="deskripsi"  name="deskripsi" id="deskripsi" cols="30" rows="10" class="text-gray-700 font-bold bg-white w-full h-40 p-3 border border-2 border-green-300 rounded-lg focus:outline-none focus:border-green-300" placeholder="Masukkan Deskripsi Project">{{ $project->deskripsi }}</textarea>
                    @error('deskripsi')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Gambar Project -->
                <div>
                    <label for="image" class="block text-gray-700 font-extrabold text-base">GAMBAR PROJECT</label>
                    <input type="file" id="image" value="{{ $project->image }}" name="image" class="text-gray-700 font-bold bg-white w-full p-3 border border-2 border-green-300 rounded-lg focus:outline-none focus:border-green-300">
                    @if ($project->image != "")
                        <img src="{{ asset('img/crousel/' . $project->image) }}" alt="{{ $project->image }}" class="w-full h-16 object-cover mx-auto">
                    @endif
                </div>
                <!-- Penulis Project -->
                <div>
                    <label for="penulis" class="block text-gray-700 font-extrabold text-base">PENULIS PROJECT</label>
                    <input type="text" id="penulis" value="{{ $project->penulis }}" name="penulis" class="text-gray-700 font-bold bg-white w-full p-3 border border-2 border-green-300 rounded-lg focus:outline-none focus:border-green-300" placeholder="Masukkan Penulis Project">
                    @error('penulis')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Tombol Simpan -->
                <button class="ml-2 bg-white text-green-300 p-3 rounded-lg border border-2 border-green-300 hover:bg-[#2f4f4f] hover:text-white" onclick="return confirm('Are you sure you want to Update this data?');">UPDATE</button>
                </form>

            </div>
        </div>
    </div>

</x-app-layout>
