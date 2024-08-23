 {{-- ///----Hero Section --}}
 <section>
    <div class="bg-[#2f4f4f] text-white h-screen flex items-center" >
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center">
            <!-- Left Content -->
            <div class="md:w-1/2 flex flex-col space-y-5" data-aos="fade-right">
                <h2 class="text-yellow-400 font-bold tracking-wide uppercase text-2xl">
                    Transforming Ideas into Beautiful Digital Experiences
                </h2>
                <h1 class="text-4xl font-extrabold text-white">
                    Crafting Exceptional Experiences Through Creative <span class="text-green-400"> Excellence</span>
                </h1>
                <p class="text-white-300 text-justify">
                    Discover the pinnacle of design and development with our innovative solutions. Transform your ideas into engaging digital experiences with ease and precision.
                    From seamless user interfaces to impactful branding, our portfolio showcases a blend of creativity and technical excellence.
                    Explore how our work can elevate your projects and set you apart in the digital landscape.
                </p>
                <div class="flex space-x-4 mt-6 pt-10">
                    <a href="{{ route('register') }}" class="bg-green-400 text-blue-900 font-semibold py-2 px-6 rounded-full hover:bg-green-500">
                        Get started
                    </a>
                    <a href="{{ route('dashboard') }}" class="bg-transparent border-2 border-white text-white font-semibold py-2 px-6 rounded-full hover:bg-white hover:text-blue-900">
                        Lihat lebih banyak ---->
                    </a>
                </div>
            </div>

            <!-- Right Content (Image) -->
            <div class="w-full md:w-1/2 flex justify-center mt-8 md:mt-0" data-aos="zoom-in-up">
                <img src="{{ asset('img/hero.png') }}" alt="Experience" class="">
            </div>
        </div>
    </div>
</section>
