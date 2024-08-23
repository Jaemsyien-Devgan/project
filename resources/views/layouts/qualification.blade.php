{{-- membuat section qualification --}}
<section class="w-full mx-auto py-20 bg-[#2f4f4f]">
    <div class="max-w-3xl mx-auto">
        <h2 class="text-3xl font-extrabold text-yellow-400 sm:text-5xl text-center ">Qualification</h2>
    <p class="text-2xl font-extrabold text-white text-center py-2">My personal journey</p>
    <div class="flex justify-center space-x-8 mb-8 pt-6">
        <button id="education-tab" class="tab-button text-2xl font-extrabold text-white text-center py-2">Education</button>
        <button id="work-tab" class="tab-button text-2xl font-extrabold text-white text-center py-2">Work</button>
    </div>

    <!-- Konten untuk Education -->
    <div id="education-content" class="tab-content block flex-col items-center justify-center">
        <div class="relative pl-8 mb-6 items-center justify-center">
            <div class="absolute left-0 top-1.5 w-2 h-2 bg-yellow-400 rounded-full"></div>
            <h3 class="text-xl font-semibold text-gray-200">Diploma in English</h3>
            <p class="text-gray-400">British Council, Kandy</p>
            <p class="text-gray-400 text-sm"><i class="far fa-calendar-alt"></i> 2011 - 2012</p>
        </div>
        <div class="relative pl-8 mb-6">
            <div class="absolute left-0 top-1.5 w-2 h-2 bg-yellow-400 rounded-full"></div>
            <h3 class="text-xl font-semibold text-gray-200">GCE Advance Level</h3>
            <p class="text-gray-400">St. Anthony's College, Kandy</p>
            <p class="text-gray-400 text-sm"><i class="far fa-calendar-alt"></i> 2012 - 2014</p>
        </div>
        <div class="relative pl-8 mb-6">
            <div class="absolute left-0 top-1.5 w-2 h-2 bg-yellow-400 rounded-full"></div>
            <h3 class="text-xl font-semibold text-gray-200">BSc Management Information System</h3>
            <p class="text-gray-400">NSBM Green University</p>
            <p class="text-gray-400 text-sm"><i class="far fa-calendar-alt"></i> 2015 - 2018</p>
        </div>
        <div class="relative pl-8">
            <div class="absolute left-0 top-1.5 w-2 h-2 bg-yellow-400 rounded-full"></div>
            <h3 class="text-xl font-semibold text-gray-200">Data Analyst Professional Certification</h3>
            <p class="text-gray-400">Google | Coursera</p>
            <p class="text-gray-400 text-sm"><i class="far fa-calendar-alt"></i> 2021 - Present</p>
        </div>
    </div>

    <!-- Konten untuk Work -->
    <div id="work-content" class="tab-content hidden">
        <div class="relative pl-8 mb-6">
            <div class="absolute left-0 top-1.5 w-2 h-2 bg-yellow-400 rounded-full"></div>
            <h3 class="text-xl font-semibold text-gray-200">Junior Developer</h3>
            <p class="text-gray-400">XYZ Solutions, Colombo</p>
            <p class="text-gray-400 text-sm"><i class="far fa-calendar-alt"></i> 2018 - 2019</p>
        </div>
        <div class="relative pl-8 mb-6">
            <div class="absolute left-0 top-1.5 w-2 h-2 bg-yellow-400 rounded-full"></div>
            <h3 class="text-xl font-semibold text-gray-200">Software Engineer</h3>
            <p class="text-gray-400">ABC Tech, Kandy</p>
            <p class="text-gray-400 text-sm"><i class="far fa-calendar-alt"></i> 2019 - 2022</p>
        </div>
        <div class="relative pl-8">
            <div class="absolute left-0 top-1.5 w-2 h-2 bg-yellow-400 rounded-full"></div>
            <h3 class="text-xl font-semibold text-gray-200">Senior Software Engineer</h3>
            <p class="text-gray-400">DEF Innovations, Remote</p>
            <p class="text-gray-400 text-sm"><i class="far fa-calendar-alt"></i> 2022 - Present</p>
        </div>
    </div>
    </div>
</section>


 {{-- script qulaification section --}}
 <script>
    document.getElementById('education-tab').addEventListener('click', function() {
        document.getElementById('education-content').classList.remove('hidden');
        document.getElementById('education-content').classList.add('block');
        document.getElementById('work-content').classList.add('hidden');

        this.classList.add('text-yellow-400');
        this.classList.remove('text-white');
        document.getElementById('work-tab').classList.add('text-white','font-bold');
        document.getElementById('work-tab').classList.remove('text-yellow-400');
    });

    document.getElementById('work-tab').addEventListener('click', function() {
        document.getElementById('work-content').classList.remove('hidden');
        document.getElementById('work-content').classList.add('block');
        document.getElementById('education-content').classList.add('hidden');

        this.classList.add('text-yellow-400');
        this.classList.remove('text-gray-400');
        document.getElementById('education-tab').classList.add('text-white','font-bold');
        document.getElementById('education-tab').classList.remove('text-yellow-400');
    });
</script>
