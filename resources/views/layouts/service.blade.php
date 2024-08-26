<section class="bg-[#2f4f4f] w-full py-12">
    <div class="max-w-3xl mx-auto text-center space-y-4 py-6">
        <h2 class="text-4xl font-extrabold text-yellow-400 sm:text-5xl mb-6">MY SERVICE</h2>
        <p class="text-2xl font-extrabold text-white">
          EXPERT IN TEACH AND DESIGN FOR <span class="text-green-400 mt-6">IMPACTFUL RESULTS.</span>
        </p>
      </div>
    <!-- Card Container -->
    <div class="flex justify-center space-x-8 mt-12">
      <!-- Card 1 -->
      <div class="bg-[#3e6e6e]  rounded-lg shadow-lg w-[250px] h-[300px] flex flex-col justify-between bg-cover bg-center opacity-90" style="background-image: url('{{ asset('img/data.jpg') }}');">
        <div class="flex flex-col justify-end h-full bg-black bg-opacity-50 p-4 rounded-lg">
            <h2 class="text-xl font-bold text-left mb-2 text-white">Data Analyst</h2>
            <div class="flex justify-start items-center space-x-2">
                <span id="arrow-button1" class="text-base font-medium text-yellow-400 cursor-pointer">view more   🡒</span>
            </div>
        </div>
    </div>


      <!-- Modal Content for Data Analyst -->
      <div id="myModal1" class="fixed hidden z-50 inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-[#2f4f4f] p-8 rounded-lg shadow-lg w-[400px]">
          <div class="flex justify-between">
            <h3 class="text-2xl font-bold text-white mb-4">Data Analyst</h3>
            <button id="closeModal1" class="text-white font-bold">X</button>
          </div>
          <ul class="text-gray-300 space-y-3">
            <li class="flex items-center">
              <span class="text-green-400 mr-2">✔</span> I analyze data systems.
            </li>
            <li class="flex items-center">
              <span class="text-green-400 mr-2">✔</span> Automating information retrieval.
            </li>
            <li class="flex items-center">
              <span class="text-green-400 mr-2">✔</span> Systematically applying statistical and logical techniques.
            </li>
            <li class="flex items-center">
              <span class="text-green-400 mr-2">✔</span> Visualizing graphs, charts and preparing reports and dashboards.
            </li>
          </ul>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-[#3e6e6e]  rounded-lg shadow-lg w-[250px] h-[300px] flex flex-col justify-between bg-cover bg-center opacity-90" style="background-image: url('{{ asset('img/data2.jpg') }}');">
        <div class="flex flex-col justify-end h-full bg-black bg-opacity-50 p-4 rounded-lg">
            <h2 class="text-xl font-bold text-left mb-2 text-white">UX Designer</h2>
            <div class="flex justify-start items-center space-x-2">
                <span id="arrow-button2" class="text-base font-medium text-yellow-400 cursor-pointer">view more   🡒</span>
            </div>
        </div>
    </div>

      <!-- Modal Content for UX Designer -->
      <div id="myModal2" class="fixed hidden z-50 inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-[#2f4f4f] p-8 rounded-lg shadow-lg w-[400px]">
          <div class="flex justify-between">
            <h3 class="text-2xl font-bold text-white mb-4">UX Designer</h3>
            <button id="closeModal2" class="text-white font-bold">X</button>
          </div>
          <ul class="text-gray-300 space-y-3">
            <li class="flex items-center">
              <span class="text-green-400 mr-2">✔</span> Conducting user research and analysis.
            </li>
            <li class="flex items-center">
              <span class="text-green-400 mr-2">✔</span> Designing user-friendly interfaces.
            </li>
            <li class="flex items-center">
              <span class="text-green-400 mr-2">✔</span> Creating wireframes and prototypes.
            </li>
            <li class="flex items-center">
              <span class="text-green-400 mr-2">✔</span> Collaborating with developers for implementation.
            </li>
          </ul>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-[#3e6e6e]  rounded-lg shadow-lg w-[250px] h-[300px] flex flex-col justify-between bg-cover bg-center opacity-90" style="background-image: url('{{ asset('img/data3.jpg') }}');">
        <div class="flex flex-col justify-end h-full bg-black bg-opacity-50 p-4 rounded-lg">
            <h2 class="text-xl font-bold text-left mb-2 text-white">Web Developer</h2>
            <div class="flex justify-start items-center space-x-2">
                <span id="arrow-button3" class="text-base font-medium text-yellow-400 cursor-pointer">view more   🡒</span>
            </div>
        </div>
    </div>

      <!-- Modal Content for Web Developer -->
      <div id="myModal3" class="fixed hidden z-50 inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-[#2f4f4f] p-8 rounded-lg shadow-lg w-[400px]">
          <div class="flex justify-between">
            <h3 class="text-2xl font-bold text-white mb-4">Web Developer</h3>
            <button id="closeModal3" class="text-white font-bold">X</button>
          </div>
          <ul class="text-gray-300 space-y-3">
            <li class="flex items-center">
              <span class="text-green-400 mr-2">✔</span> Building and maintaining websites.
            </li>
            <li class="flex items-center">
              <span class="text-green-400 mr-2">✔</span> Optimizing website performance.
            </li>
            <li class="flex items-center">
              <span class="text-green-400 mr-2">✔</span> Writing clean, efficient code.
            </li>
            <li class="flex items-center">
              <span class="text-green-400 mr-2">✔</span> Collaborating with designers and back-end developers.
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Script to handle modal interactions -->
  <script>
    const modals = [
      { button: document.getElementById('arrow-button1'), modal: document.getElementById('myModal1'), close: document.getElementById('closeModal1') },
      { button: document.getElementById('arrow-button2'), modal: document.getElementById('myModal2'), close: document.getElementById('closeModal2') },
      { button: document.getElementById('arrow-button3'), modal: document.getElementById('myModal3'), close: document.getElementById('closeModal3') },
    ];

    modals.forEach(({ button, modal, close }) => {
      button.addEventListener('click', () => modal.classList.remove('hidden'));
      close.addEventListener('click', () => modal.classList.add('hidden'));
      window.addEventListener('click', (event) => {
        if (event.target === modal) modal.classList.add('hidden');
      });
    });
  </script>

