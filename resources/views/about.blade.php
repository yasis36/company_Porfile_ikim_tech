<x-layout :title="$title" :activePage="$activePage">
    @section('page')
        <header class="bg-main font-ubuntu relative">
            <div class="absolute inset-0 bg-black/40"></div>
            <div class="relative pt-[16rem] pb-[7rem] pl-5 space-y-5 text-slate-100">
                <h1 class="text-5xl font-bold uppercase md:text-7xl">About</h1>
                <hr class="w-1/2 lg:w-1/3 border-2">
            </div>
        </header>

        <section class="bg-white lg:h-screen lg:flex lg:items-center font-ubuntu">
            <div
                class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-10 md:max-w-7xl md:grid-cols-2 md:px-8 lg:px-20">
                <div class="relative w-full h-0" style="padding-top: 80%">
                    <img src="{{ asset('images/alanxcode.png') }}" alt="Orang sedang berkemah"
                        class="absolute inset-0 object-cover w-full h-full rounded-lg bg-gray-100" />
                </div>
                <div class="font-cabin md:pr-14 space-y-4">
                    <h2 class="text-4xl font-semibold tracking-tight uppercase text-gray-900 lg:text-5xl lg:leading-normal">
                        About "IKIM Tech Co"</h2>
                    <p class="text-md text-gray-700">
                        is designed to understand and provide the best solutions to our customers based 
                        on their requirements and budget. Our expertise and the way we organized make us the preferred solution provider in the industry.
                         As it is known, our country Technology firms focus in Technology item supplies
                    </p>
                    <button
                        class="transition duration-300 bg-sky-800 text-white py-2 px-4 font-bold text-md uppercase hover:bg-white hover:text-sky-800 hover:ring hover:ring-sky-800">Start
                        Now</button>
                </div>
            </div>
        </section>

        <main class="bg-slate-100">
            <div class="grid grid-cols-1 py-20 px-6 space-y-6 md:grid-cols-2 md:gap-x-8 lg:px-20 items-center">
                <div class="space-y-4">
                    <h1 class="text-4xl font-bold md:text-5xl">SKILLS & EXPERTISE</h1>
                    <p>We have this kind of skills and Expertise of our Teams</p>
                    <button
                        class="transition duration-300 bg-sky-800 text-white py-2 px-4 font-bold text-md uppercase hover:bg-white hover:text-sky-800 hover:ring hover:ring-sky-800">Contact Now</button>
                </div>

                <div class="space-y-6">
                    <div>
                        <dl class="space-y-2">
                            <dt class="text-sm font-bold uppercase text-gray-900">Web Designer</dt>
                            <dd class="flex items-center mb-3">
                                <div class="w-full bg-slate-100 h-1 me-2">
                                    <div class="bg-sky-800 h-1" style="width: 88%"></div>
                                </div>
                            </dd>
                        </dl>
                    </div>
                    <div>
                        <dl class="space-y-2">
                            <dt class="text-sm font-bold uppercase text-gray-900">Motion Graphic</dt>
                            <dd class="flex items-center mb-3">
                                <div class="w-full bg-slate-100 h-1 me-2">
                                    <div class="bg-sky-800 h-1" style="width: 88%"></div>
                                </div>
                            </dd>
                        </dl>
                    </div>
                    <div>
                        <dl class="space-y-2">
                            <dt class="text-sm font-bold uppercase text-gray-900">Expertise</dt>
                            <dd class="flex items-center mb-3">
                                <div class="w-full bg-slate-100 h-1 me-2">
                                    <div class="bg-sky-800 h-1" style="width: 88%"></div>
                                </div>
                            </dd>
                        </dl>
                    </div>
                    <div>
                        <dl class="space-y-2">
                            <dt class="text-sm font-bold uppercase text-gray-900">Marketing</dt>
                            <dd class="flex items-center mb-3">
                                <div class="w-full bg-slate-100 h-1 me-2">
                                    <div class="bg-sky-800 h-1" style="width: 100%"></div>
                                </div>
                            </dd>
                        </dl>
                    </div>
                    <div>
                        <dl class="space-y-2">
                            <dt class="text-sm font-bold uppercase text-gray-900">Software Engineer</dt>
                            <dd class="flex items-center mb-3">
                                <div class="w-full bg-slate-100 h-1 me-2">
                                    <div class="bg-sky-800 h-1" style="width: 88%"></div>
                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </main>

        <section class="bg-white lg:h-screen lg:flex lg:items-center font-ubuntu">
            <div
                class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-10 md:max-w-7xl md:grid-cols-2 md:px-8 lg:px-20">
                <div class="relative w-full h-0" style="padding-top: 80%">
                    <img src="{{ asset('images/mainphoto2.jpg') }}" alt="Orang sedang berkemah"
                        class="absolute inset-0 object-cover w-full h-full rounded-lg bg-gray-100" />
                </div>
                <div class="font-cabin md:pr-14 space-y-4">
                    <h1 class="text-4xl font-semibold tracking-tight uppercase text-gray-900 lg:text-5xl lg:leading-normal">
                        OUR PROFESSIONAL SERVICES!!</h1>
                    <p class="text-md text-gray-700">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet, doloribus deleniti. Enim itaque
                        quae sapiente aspernatur ex, et aliquam doloribus aut est maxime aliquid reprehenderit minus esse!
                        Quaerat, odio dolores.
                    </p>
                    <button
                        class="transition duration-300 bg-sky-800 text-white py-2 px-4 font-bold text-md uppercase hover:bg-white hover:text-sky-800 hover:ring hover:ring-sky-800">Start
                        Now</button>
                </div>
            </div>
        </section>

        

    @endsection
</x-layout>
