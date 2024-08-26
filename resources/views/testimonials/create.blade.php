
<x-app-layout>
    <div class="min-h-screen bg-[#2f4f4f] flex flex-col justify-center items-center p-8">
        <div class="font-extrabold py-6 text-white text-xl flex w-full max-w-6xl justify-between items-center">
            <h1>Tambah Data Testimonials</h1>
            <a href="{{ route('testimonials.index') }}" class="w-auto inline-flex items-center px-6 py-2 bg-white border border-transparent rounded-md font-semibold text-xs text-[#2f4f4f] uppercase tracking-widest hover:bg-green-700 focus:bg-green-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition ease-in-out duration-150 hover:text-white hover:border hover:border-yellow-500">
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
                <form action="{{ route('testimonials.store') }}" class="space-y-6 col-span-1" method="post" enctype="multipart/form-data">
                @csrf
                <!-- Judul Project -->
                <div>
                    <label for="nama" class="block text-gray-700 font-extrabold text-base">Nama User</label>
                    <input type="text" name="nama" id="nama" class="font-bold bg-white w-full p-3 border border-2 border-green-300 rounded-lg focus:outline-none focus:border-green-300" placeholder="Masukkan Judul Project">
                    @error('nama')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Deskripsi Project -->
                <div>
                    <label for="pesan" class="block text-gray-700 font-extrabold text-base">Pesan User</label>
                    <textarea name="pesan" name="pesan" id="pesan" cols="30" rows="10" class="text-gray-700 font-bold bg-white w-full h-40 p-3 border border-2 border-green-300 rounded-lg focus:outline-none focus:border-green-300" placeholder="Masukkan Deskripsi Project"></textarea>
                    @error('pesan')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Gambar Project -->
                <div>
                    <label for="foto" class="block text-gray-700 font-extrabold text-base">Foto Pengguna</label>
                    <input type="file" id="foto" name="foto" class="text-gray-700 font-bold bg-white w-full p-3 border border-2 border-green-300 rounded-lg focus:outline-none focus:border-green-300">
                    @error('foto')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Penulis Project -->
                <div>
                    <label for="pekerjaan" class="block text-gray-700 font-extrabold text-base">Pekerjan User</label>
                    <input type="text" id="pekerjaan" name="pekerjaan" class="text-gray-700 font-bold bg-white w-full p-3 border border-2 border-green-300 rounded-lg focus:outline-none focus:border-green-300" placeholder="Masukkan Penulis Project">
                    @error('pekerjaan')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Tombol Simpan -->
                <button class="ml-2 bg-white text-green-300 p-3 rounded-lg border border-2 border-green-300 hover:bg-[#2f4f4f] hover:text-white">SIMPAN</button>
                </form>

            </div>
        </div>
    </div>

</x-app-layout>

