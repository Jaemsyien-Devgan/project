<x-app-layout>
    <div class="w-full h-screen items-center justify-center bg-teal-900">
        <!-- 01. Content -->
        <h1 class="text-left text-3xl font-extrabold mb-8 pt-6 pl-20 text-white">TODOLIST</h1>
        <div class="flex justify-center w-full max-w-full">
            <div class="w-full max-w-xl">
                @if (session('success'))
                    <div class="alert alert-success mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger mb-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- 02. Form input data -->
                <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                    <form id="todo-form" action="{{ route('todolist.post') }}" method="post">
                        @csrf
                        <div class="flex">
                            <input
                                type="text"
                                class="text-gray-700 font-bold bg-white w-full p-3 border border-2 border-green-300 rounded-lg focus:outline-none focus:border-green-300"
                                name="task"
                                id="todo-input"
                                placeholder="Tambah task baru"
                                required>
                            <button class="ml-2 bg-white text-green-300 p-3 rounded-lg border border-2 border-green-300 hover:bg-[#2f4f4f] hover:text-white" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>

                <!-- 03. Searching -->
                <div class="bg-white p-6 rounded-lg shadow-md h-96 text-gray-700">
                    <form id="todo-form" action="{{ route('todolist') }}" method="get">
                        <div class="flex mb-4 text-gray-700">
                            <input type="text" class="text-gray-700 font-bold bg-white w-full p-3 border border-2 border-green-300 rounded-lg focus:outline-none focus:border-green-300" name="search" value="" placeholder="masukkan kata kunci" >
                            <button class="ml-2 bg-white text-green-300 p-3 rounded-lg border border-2 border-green-300 hover:bg-[#2f4f4f] hover:text-white" type="submit">Cari</button>
                        </div>
                    </form>

                   <div class="max-h-56 overflow-y-scroll">

                    <ul class="space-y-3 pt-4 " id="todo-list">
                        @foreach ($data as $item)
                        <!-- 04. Display Data -->

                        <li x-data="{ open: false }" class="font-bold text-gray-700 bg-white p-2 rounded-lg flex flex-col space-y-2 border border-green-300">
                            <div class="flex justify-between items-center">
                                <span class="task-text">
                                    {!! $item->is_done == '1' ? '<del>' : ''!!}
                                        {{ $item->task }}

                                             {!! $item->is_done == '1' ? '</del>' : ''!!}

                                        </span>


                                <div class="space-x-2 flex">
                                    <form action="{{ route('todolist.delete', $item->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this data?');">

                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-red-500 text-white px-3 py-1 rounded-lg btn-sm delete-btn">✕</button>
                                    </form>

                                    <button
                                        @click="open = !open"
                                        class="bg-blue-500 text-white px-3 py-1 rounded-lg btn-sm edit-btn"
                                        aria-expanded="false">
                                        ✎
                                    </button>
                                </div>
                            </div>

                            <!-- 05. Update Data -->
                            <div x-show="open" x-cloak class="bg-white border border-2 border-green-300 p-2 rounded-lg">
                                <form action="{{ route('todolist.update', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to change this data?');">

                                    @csrf
                                    @method('PUT')
                                    <div class="flex mb-2">
                                        <input type="text" class="bg-white w-full p-2 border border-2 border-blue-300 rounded-lg focus:outline-none focus:border-blue-300" name="task" value="{{ $item->task }}">
                                        <button class="ml-2 bg-blue-500 text-white p-2 rounded-lg" type="submit">Update</button>
                                    </div>
                                    <div class="flex space-x-2">
                                        <div class="flex items-center ml-1">
                                            <input type="radio" id="done-{{ $loop->index }}" value="1" name="is_done" class="mr-2 cursor-pointer appearance-none w-3 h-3 border border-gray-300 rounded-full checked:bg-green-500 checked:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2" {{ $item->is_done ? 'checked' : '' }}>
                                            <label for="done-{{ $loop->index }}">Selesai</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input type="radio" id="not-done-{{ $loop->index }}" value="0" name="is_done" class="ml-2 mr-2 cursor-pointer appearance-none w-3 h-3 border border-gray-300 rounded-full checked:bg-red-500 checked:border-red-500 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2" {{ !$item->is_done ? 'checked' : '' }}>
                                            <label for="not-done-{{ $loop->index }}">Belum</label>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </li>

                        @endforeach
                    </ul>
                   </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
