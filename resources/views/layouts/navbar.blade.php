{{-- ///-----Menu Navbar --}}
<section>
    <nav class="fixed w-full bg-transparent shadow-md z-50 py-3 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-white" />
                    </a>
                </div>

                <!-- Buttons -->
                <div class="flex space-x-4">

                @if (Route::has('login'))
                    @auth
                        <a href="{{ route('dashboard') }}" class="rounded text-white bg-[#2f4f4f] border-2 border-white flex items-center justify-center px-3 my-3 hover:bg-white hover:text-[#2f4f4f] hover:border-1 hover:border-black ">
                        Dashboard</a>
                        @else
                        <a href="{{ route('login') }}" class="rounded text-white bg-[#2f4f4f] border-2 border-white flex items-center justify-center px-3 my-3 hover:bg-white hover:text-[#2f4f4f] hover:border-1 hover:border-black">Login</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="rounded text-white bg-[#2f4f4f] border-2 border-white flex items-center justify-center px-3 my-3 hover:bg-white hover:text-[#2f4f4f] hover:border-1 hover:border-black">Register</a>
                        @endif
                    @endauth
                @endif
                </div>
            </div>
        </div>
    </nav>
</section>
