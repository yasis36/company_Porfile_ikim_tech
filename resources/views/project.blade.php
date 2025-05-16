<x-layout :title="$title" :activePage="$activePage">
    @section('page')
        <header class="bg-main font-ubuntu relative">
            <div class="absolute inset-0 bg-black/40"></div>
            <div class="relative pt-[16rem] pb-[7rem] pl-5 space-y-5 text-slate-100">
                <h1 class="text-5xl font-bold uppercase md:text-7xl">Our Project</h1>
                <hr class="w-1/2 lg:w-1/3 border-2">
            </div>
        </header>

      <main class="bg-white font-ubuntu py-12 px-6 lg:px-20">
    <h1 class="text-4xl font-bold text-center mb-10">Our Projects</h1>

    <!-- Filter Buttons -->
    <div class="flex flex-wrap justify-center gap-4 mb-8">
        <button onclick="filterGallery('all')" class="bg-sky-800 text-white px-4 py-2 rounded hover:bg-sky-700">All</button>
        <button onclick="filterGallery('mobile')" class="bg-sky-800 text-white px-4 py-2 rounded hover:bg-sky-700">Mobile</button>
        <button onclick="filterGallery('web')" class="bg-sky-800 text-white px-4 py-2 rounded hover:bg-sky-700">Web</button>
        <button onclick="filterGallery('design')" class="bg-sky-800 text-white px-4 py-2 rounded hover:bg-sky-700">Design</button>
    </div>

    <!-- Gallery Grid -->
    <div id="gallery" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        <!-- Example Card (repeat per image) -->
        <div class="gallery-item mobile relative group overflow-hidden rounded-lg shadow-lg cursor-pointer">
            <img src="{{ asset('images/6528c2fc5cfae.jpg') }}" alt="Mobile Project 1" class="w-full h-64 object-cover transform transition duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-center text-white p-4">
                <h2 class="text-xl font-bold mb-2">Mobile App 1</h2>
                <p class="text-sm">An intuitive mobile solution for modern businesses.</p>
            </div>
        </div>

        <div class="gallery-item mobile relative group overflow-hidden rounded-lg shadow-lg cursor-pointer">
            <img src="{{ asset('images/bord.jpg') }}" alt="Mobile Project 2" class="w-full h-64 object-cover transform transition duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-center text-white p-4">
                <h2 class="text-xl font-bold mb-2">Mobile App 2</h2>
                <p class="text-sm">Design-first mobile interface built for speed.</p>
            </div>
        </div>

        <div class="gallery-item mobile relative group overflow-hidden rounded-lg shadow-lg cursor-pointer">
            <img src="{{ asset('images/smart.jpg') }}" alt="Mobile Project 3" class="w-full h-64 object-cover transform transition duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-center text-white p-4">
                <h2 class="text-xl font-bold mb-2">Mobile App 3</h2>
                <p class="text-sm">Innovative features for smart devices.</p>
            </div>
        </div>

<div class="gallery-item web relative group overflow-hidden rounded-lg shadow-lg cursor-pointer">
            <img src="{{ asset('images/code.jpg') }}" alt="web Project 1" class="w-full h-64 object-cover transform transition duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-center text-white p-4">
                <h2 class="text-xl font-bold mb-2">web App 1</h2>
                <p class="text-sm">An intuitive mobile solution for modern businesses.</p>
            </div>
        </div>

        <div class="gallery-item web relative group overflow-hidden rounded-lg shadow-lg cursor-pointer">
            <img src="{{ asset('images/light.jpg') }}" alt="web Project 2" class="w-full h-64 object-cover transform transition duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-center text-white p-4">
                <h2 class="text-xl font-bold mb-2">web App 2</h2>
                <p class="text-sm">Design-first mobile interface built for speed.</p>
            </div>
        </div>

        <div class="gallery-item web relative group overflow-hidden rounded-lg shadow-lg cursor-pointer">
            <img src="{{ asset('images/matrix.jpg') }}" alt="web Project 3" class="w-full h-64 object-cover transform transition duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-center text-white p-4">
                <h2 class="text-xl font-bold mb-2">web App 3</h2>
                <p class="text-sm">Innovative features for smart devices.</p>
            </div>
        </div>       
        

    </div>
</main>



<script>
    function filterGallery(category) {
        const items = document.querySelectorAll('.gallery-item');
        items.forEach(item => {
            if (category === 'all') {
                item.classList.remove('hidden');
            } else {
                item.classList.toggle('hidden', !item.classList.contains(category));
            }
        });
    }
</script>


        <section class="bg-slate-200 font-ubuntu">
            <div class="py-20 px-8 space-y-6 lg:px-20">
                <div class="text-center text-gray-900 space-y-4">
                    <h1 class="uppercase font-bold text-4xl lg:text-5xl">
                        HOW WE PLAN OUR WORK
                    </h1>
                    <p class="text-sm text-gray-900/50">Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                        Phasellus viverra nulla metus varius
                        laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper
                        ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus</p>
                </div>

                <div class="text-center grid grid-cols-1 gap-y-6 lg:grid-cols-3 lg:gap-x-6">
                    
                    <div class="p-10 bg-white border  rounded-lg shadow space-y-4">
                        <div>
                            <a href="#">
                                <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900">Plan 01 
                                </h5>
                            </a>
                        </div>

                        <div>
                            <p class="font-normal text-gray-900/50 text-sm">curabitur ullamcorper ultricies
                                nisi. Nam
                                eget dui.
                                Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.</p>
                        </div>
                    </div>

                    <div class="p-10 bg-white border border-gray-200 rounded-lg shadow space-y-4">
                        <div>
                            <a href="#">
                                <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900"> Plan 02 

                                </h5>
                            </a>
                        </div>

                        <div>
                            <p class="font-normal text-gray-900/50 text-sm">curabitur ullamcorper ultricies
                                nisi. Nam
                                eget dui.
                                Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.</p>
                        </div>
                    </div>

                    <div class="p-10 bg-white border border-gray-200 rounded-lg shadow space-y-4">
                        <div>
                            <a href="#">
                                <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900">Plan 03 

                                </h5>
                            </a>
                        </div>

                        <div>
                            <p class="font-normal text-gray-900/50 text-sm">curabitur ullamcorper ultricies
                                nisi. Nam
                                eget dui.
                                Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
    @endsection
</x-layout>
