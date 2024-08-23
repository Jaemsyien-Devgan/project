<x-app-layout>
    @foreach ($todolist as $data )
    <h1>{{ $data->task }}</h1>
    @endforeach
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-[#2f4f4f] text-black">
    <div class="container mx-auto p-8 bg-[#2f4f4f]">
        <!-- Header -->
        <div class="text-center my-12">
            <h1 class="text-5xl font-bold mb-4 text-white">Plan Your Perfect Day with Ease</h1>
            <p class="text-lg text-white">Discover the ultimate collection of scheduling tools that will transform the way you organize your time. We're constantly seeking
                <br>out and curating the best resources to help you stay on top of your game.
            </p>
        </div>

        <!-- Search Bar -->
        <div class="flex justify-center mb-8">
            <input type="text" placeholder="e.g. Blog"
                class="bg-white p-2 text-black rounded-l-lg border border-black w-full max-w-lg focus:outline-none focus:ring-2 focus:ring-purple-300">
            <button class="p-2 bg-purple-600 text-white rounded-r-lg hover:bg-purple-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5A7 7 0 1012 4a7 7 0 005 11z" />
                </svg>
            </button>
        </div>


        <!-- Filter Options -->
        <div class="flex justify-between mb-8 items-center">
            <select class="bg-white p-2 rounded border border-black w-20 text-black">
                <option>Free</option>
                <option>Paid</option>
            </select>
            <div class="flex space-x-3 text-black">
                <button class=" bg-white p-2 border border-black rounded">All</button>
                <button class="bg-white p-2 border border-black rounded">Templates</button>
                <button class="bg-white p-2 border border-black rounded">UI kits</button>
            </div>
            <select class="bg-white p-2 rounded border border-black w-40 text-black">
                <option>See More</option>
                <option>Laravel</option>
                <option>Laravel</option>
                <option>Laravel</option>
            </select>
        </div>

        <!-- Templates Showcase -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 pt-2 pb-8">
            <div class="border rounded-lg overflow-hidden shadow-lg bg-white">
                <img src="{{ asset('img/gambar1.jpg') }}"  alt="Template 1" class="w-[400px] h-[250px] w-full">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Latest</h2>
                    <p class="text-gray-600">Introducing Scheduler for Starter Blog...</p>
                </div>
            </div>
            <div class="border rounded-lg overflow-hidden shadow-lg bg-white">
                <img src="{{ asset('img/gambar2.png') }}"  alt="Template 2" class="w-[400px] h-[250px] w-full">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Free Landing Page Template</h2>
                    <p class="text-gray-600">Jadwalku is a free landing page template...</p>
                </div>
            </div>
            <div class="border rounded-lg overflow-hidden shadow-lg bg-white">
                <img src="{{ asset('img/gambar3.png') }}" alt="Template 3" class="w-[400px] h-[250px] w-full">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Analytics Dashboard</h2>
                    <p class="text-gray-600">Good job, Users! Your dashboard is...</p>
                </div>
            </div>
            <div class="border rounded-lg overflow-hidden shadow-lg bg-white">
                <img src="{{ asset('img/gambar1.jpg') }}"  alt="Template 1" class="w-[400px] h-[250px] w-full">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Latest</h2>
                    <p class="text-gray-600">Introducing Scheduler for Starter Blog...</p>
                </div>
            </div>
            <div class="border rounded-lg overflow-hidden shadow-lg bg-white">
                <img src="{{ asset('img/gambar2.png') }}"  alt="Template 2" class="w-[400px] h-[250px] w-full">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Free Landing Page Template</h2>
                    <p class="text-gray-600">Jadwalku is a free landing page template...</p>
                </div>
            </div>
            <div class="border rounded-lg overflow-hidden shadow-lg bg-white">
                <img src="{{ asset('img/gambar3.png') }}" alt="Template 3" class="w-[400px] h-[250px] w-full">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Analytics Dashboard</h2>
                    <p class="text-gray-600">Good job, Users! Your dashboard is...</p>
                </div>
            </div>
            <div class="border rounded-lg overflow-hidden shadow-lg bg-white">
                <img src="{{ asset('img/gambar1.jpg') }}"  alt="Template 1" class="w-[400px] h-[250px] w-full">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Latest</h2>
                    <p class="text-gray-600">Introducing Scheduler for Starter Blog...</p>
                </div>
            </div>
            <div class="border rounded-lg overflow-hidden shadow-lg bg-white">
                <img src="{{ asset('img/gambar2.png') }}"  alt="Template 2" class="w-[400px] h-[250px] w-full">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Free Landing Page Template</h2>
                    <p class="text-gray-600">Jadwalku is a free landing page template...</p>
                </div>
            </div>
            <div class="border rounded-lg overflow-hidden shadow-lg bg-white">
                <img src="{{ asset('img/gambar3.png') }}" alt="Template 3" class="w-[400px] h-[250px] w-full">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Analytics Dashboard</h2>
                    <p class="text-gray-600">Good job, Users! Your dashboard is...</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-white  shadow-lg bg-transparent shadow-md z-50 py-3 backdrop-blur-md">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="https://flowbite.com/" class="flex items-center">
                        <img src="{{ asset('img/logo.png') }}" class="h-12 me-2" alt="Jadwalku Logo" />
                        <span class="self-center text-2xl font-bold whitespace-nowrap text-green-400"><SPan class=" font-bold text-yellow-400">DEV</SPan>PORTFOLIO</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-bold text-black cursor-pointer uppercase hover:text-yellow-400">Resources</h2>
                        <ul class="text-black font-medium">
                            <li class="mb-4">
                                <a href="https://laravel.com/" class="hover:text-green-400">Laravel</a>
                            </li>
                            <li>
                                <a href="https://tailwindcss.com/" class="hover:text-green-400">Tailwind CSS</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-bold text-black cursor-pointer uppercase hover:text-yellow-400">Follow us</h2>
                        <ul class="text-black font-medium">
                            <li class="mb-4">
                                <a href="https://github.com/themesberg/flowbite" class="hover:text-green-400">Github</a>
                            </li>
                            <li>
                                <a href="https://discord.gg/4eeurUVvTy" class="hover:text-green-400">Linkedin</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-bold text-black cursor-pointer uppercase hover:text-yellow-400">Legal</h2>
                        <ul class="text-black font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:text-green-400">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:text-green-400">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-green-400 sm:mx-auto lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-center items-center">
                <span class="font-medium  text-sm text-gray-800 sm:text-center hover:text-green-400 cursor-pointer">© 2024 <a href="https://flowbite.com/" ">DevPortfolio™</a>. All Rights Reserved.
                </span>
                </div>
        </div>
    </footer>


</body>

</html>

</x-app-layout>
