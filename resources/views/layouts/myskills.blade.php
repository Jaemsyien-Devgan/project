<!-- Skills section -->
<section>
    <div class="w-full bg-[#2f4f4f] ">
        <div class="max-w-3xl mx-auto text-center items-center space-y-4 mb-8 ">
            <h2 class="text-4xl font-extrabold text-yellow-400 sm:text-5xl">My Skills</h2>
            <p class="text-2xl font-extrabold text-white">
                EXPERT IN TEACH AND DESIGN FOR <span class="text-green-400">IMPACTFULL RESULTS.</span>
            </p>
        </div>
        <div class="max-w-xl mx-auto bg-[#2f4f4f] p-8">

            <!-- Skill 1 -->
            <div class="bg-[#2f4f4f] p-4 rounded-lg shadow mb-4 text-white border border-1 border-white">
                <div class="flex justify-between items-center cursor-pointer " onclick="toggleDropdown('dropdown-1')">
                    <div>
                        <h3 class="text-xl font-semibold">Data Analyst</h3>
                        <p class="text-[#ffd700]">More than 2 years</p>
                    </div>
                    <div>
                        <svg class="w-6 h-6 text-[#ffd700] transform transition-transform" id="icon-dropdown-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </div>

                <!-- Dropdown Content -->
                <div id="dropdown-1" class="hidden mt-4">
                    <div class="flex justify-between items-center">
                        <span>Python</span>
                        <span>60%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4">
                        <div class="bg-[#00ced1] h-2.5 rounded-full" style="width: 60%"></div>
                    </div>

                    <div class="flex justify-between items-center">
                        <span>Tableau</span>
                        <span>70%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4">
                        <div class="bg-[#00ced1] h-2.5 rounded-full" style="width: 70%"></div>
                    </div>

                    <div class="flex justify-between items-center">
                        <span>SQL</span>
                        <span>50%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4">
                        <div class="bg-[#00ced1] h-2.5 rounded-full" style="width: 50%"></div>
                    </div>

                    <div class="flex justify-between items-center">
                        <span>Google Suite</span>
                        <span>70%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4">
                        <div class="bg-[#00ced1] h-2.5 rounded-full" style="width: 70%"></div>
                    </div>
                </div>
            </div>

            <!-- Skill 2 -->
            <div class="bg-[#2f4f4f] p-4 rounded-lg shadow mb-4 text-white border border-1 border-white">
                <div class="flex justify-between items-center cursor-pointer" onclick="toggleDropdown('dropdown-2')">
                    <div>
                        <h3 class="text-xl font-semibold">Banker</h3>
                        <p class="text-[#ffd700]">More than 3 years</p>
                    </div>
                    <div>
                        <svg class="w-6 h-6 text-[#ffd700] transform transition-transform" id="icon-dropdown-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </div>

                <!-- Dropdown Content -->
                <div id="dropdown-2" class="hidden mt-4">
                    <div class="flex justify-between items-center">
                        <span>Financial Analysis</span>
                        <span>80%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4">
                        <div class="bg-[#00ced1] h-2.5 rounded-full" style="width: 80%"></div>
                    </div>
                </div>
            </div>

            <!-- Skill 3 -->
            <div class="bg-[#2f4f4f] p-4 rounded-lg shadow mb-4 text-white border border-1 border-white">
                <div class="flex justify-between items-center cursor-pointer" onclick="toggleDropdown('dropdown-3')">
                    <div>
                        <h3 class="text-xl font-semibold">Web Developer</h3>
                        <p class="text-[#ffd700]">More than 1 year</p>
                    </div>
                    <div>
                        <svg class="w-6 h-6 text-[#ffd700] transform transition-transform" id="icon-dropdown-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </div>

                <!-- Dropdown Content -->
                <div id="dropdown-3" class="hidden mt-4">
                    <div class="flex justify-between items-center">
                        <span>HTML/CSS</span>
                        <span>85%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4">
                        <div class="bg-[#00ced1] h-2.5 rounded-full" style="width: 85%"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    function toggleDropdown(id) {
        const dropdown = document.getElementById(id);
        const icon = document.getElementById('icon-' + id);

        dropdown.classList.toggle('hidden');
        icon.classList.toggle('rotate-180');
    }
</script>
