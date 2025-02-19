<x-app-layout>
    <div
        class="flex flex-col sm:flex-row justify-center items-center gap-6 px-6 bg-gray-100 rounded-lg shadow-md min-w-[350px]">
        <!-- Title Section -->
        <div class="text-left text-xl font-semibold bg-blue-900 text-white p-4 pr-6">
            <p>17th</p>
            <p>Best</p>
            <p>Articles</p>
        </div>

        <!-- Image Section -->
        <div class="w-[400px] md:w-[600px] lg:w-[700px] h-[350px] md:h-[450px] lg:h-[500px] select-none">
            <img src="{{ asset('images/809812e35ca241ddeca6bd1f191e857e.jfif') }}" alt="Book Cover"
                class="w-full h-full object-cover">
        </div>

        <!-- View Button -->
        <div class="flex items-center px-6 py-3">
            <a href="" class="font-semibold underline underline-offset-4 transition duration-300">
                View
            </a>
            <i class="ri-arrow-right-long-line"></i>
        </div>
    </div>

    <div class="px-3 sm:px-6 bg-white min-w-[350px]">
        {{-- Hero --}}
        <div class="max-w-5xl mx-auto grid grid-cols-1 sm:grid-cols-2 py-10 px-3">
            <div class="text-5xl font-light pb-5 sm:pb-0">
                <p>Lorem</p>
                <p>ipsum dolo</p>
            </div>
            <div class="text-2xl leading-relaxed text-gray-800">
                <p>Our university fosters a dynamic learning environment where creativity, critical thinking, and
                    collaboration thrive. Whether through <span class="italic">academics</span>, extracurricular
                    activities, or global partnerships, we strive to shape future leaders who will make a positive
                    impact on society.</p>
            </div>
        </div>

        {{-- Top Contributions --}}
        <div class="flex justify-center border-b-2">
            <div class="max-w-5xl w-full mx-auto">
                <h2
                    class="text-3xl font-semibold text-center underline underline-offset-8 decoration-1 decoration-gray-500">
                    Top
                    Contributions
                </h2>
                <div class="grid grid-cols-2 md:grid-cols-2 py-24">
                    <!-- Large Image -->
                    <div class="relative col-span-1">
                        <img src="{{ asset('images/809812e35ca241ddeca6bd1f191e857e.jfif') }}"
                            class="w-full h-full object-cover select-none" alt="Adventure">
                        <div class="absolute bottom-0 left-0 text-white p-4">
                            <span class="bg-[#5A7BAF] text-white px-2 py-1 text-sm">Adventure</span>
                            <p class="text-sm mt-2">Lorem ipsum dolor sit amet consectetur. In tincidunt volutpat
                                ullamcorper diam dui molestie ullamcorper</p>
                        </div>
                    </div>

                    <!-- Right Grid -->
                    <div class="grid grid-cols-2">
                        <!-- Medium Image -->
                        <div class="relative col-span-2 md:col-span-2">
                            <img src="{{ asset('images/809812e35ca241ddeca6bd1f191e857e.jfif') }}"
                                class="w-full h-full object-cover select-none" alt="Business">
                            <div class="absolute bottom-0 left-0 text-white p-4">
                                <span class="bg-[#5A7BAF] text-white px-2 py-1 text-sm">Business</span>
                                <p class="text-sm mt-2">Lorem ipsum dolor sit amet consectetur. In tincidunt volutpat
                                    ullamcorper diam dui molestie ullamcorper</p>
                            </div>
                        </div>

                        <!-- Two Smaller Images -->
                        <div class="relative col-span-1">
                            <img src="{{ asset('images/809812e35ca241ddeca6bd1f191e857e.jfif') }}"
                                class="w-full h-full object-cover select-none" alt="Digital">
                            <div class="absolute bottom-0 left-0 text-white p-4">
                                <span class="bg-[#5A7BAF] text-white px-2 py-1 text-sm">Digital</span>
                                <p class="text-sm mt-2">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                        <div class="relative col-span-1">
                            <img src="{{ asset('images/809812e35ca241ddeca6bd1f191e857e.jfif') }}"
                                class="w-full h-full object-cover select-none" alt="Digital">
                            <div class="absolute bottom-0 left-0 text-white p-4">
                                <span class="bg-[#5A7BAF] text-white px-2 py-1 text-sm">Digital</span>
                                <p class="text-sm mt-2">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Magazine --}}
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 pt-8 py-14 flex flex-col gap-3">
            <div class="uppercase text-red-700 mb-5 sm:mb-16">
                <h1 class="text-2xl font-bold">The Magazine</h1>
                <p class="text-red-600">Contribution</p>
            </div>

            <div>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-1 sm:gap-5">
                    <!-- Book Card -->
                    <a href="" class="overflow-hidden flex flex-col items-center">
                        <div class="w-48 select-none">
                            <img src="{{ asset('images/2e92a52a02cfe1c2bb1f75d5faf45fbb.jfif') }}" alt="Book Cover"
                                class="w-full h-70 object-cover rounded">
                        </div>
                        <p class="text-sm text-gray-600 mt-3">Lorem ipsum dolor sit amet consectetur.</p>
                    </a>

                    <a href="" class="overflow-hidden flex flex-col items-center">
                        <div class="w-48 select-none">
                            <img src="{{ asset('images/2e92a52a02cfe1c2bb1f75d5faf45fbb.jfif') }}" alt="Book Cover"
                                class="w-full h-70 object-cover rounded">
                        </div>
                        <p class="text-sm text-gray-600 mt-3">Lorem ipsum dolor sit amet consectetur.</p>
                    </a>

                    <a href="" class="overflow-hidden flex flex-col items-center">
                        <div class="w-48 select-none">
                            <img src="{{ asset('images/2e92a52a02cfe1c2bb1f75d5faf45fbb.jfif') }}" alt="Book Cover"
                                class="w-full h-70 object-cover rounded">
                        </div>
                        <p class="text-sm text-gray-600 mt-3">Lorem ipsum dolor sit amet consectetur.</p>
                    </a>

                    <a href="" class="overflow-hidden flex flex-col items-center">
                        <div class="w-48 select-none">
                            <img src="{{ asset('images/2e92a52a02cfe1c2bb1f75d5faf45fbb.jfif') }}" alt="Book Cover"
                                class="w-full h-70 object-cover rounded">
                        </div>
                        <p class="text-sm text-gray-600 mt-3">Lorem ipsum dolor sit amet consectetur.</p>
                    </a>

                    <a href="" class="overflow-hidden flex flex-col items-center">
                        <div class="w-48 select-none">
                            <img src="{{ asset('images/2e92a52a02cfe1c2bb1f75d5faf45fbb.jfif') }}" alt="Book Cover"
                                class="w-full h-70 object-cover rounded">
                        </div>
                        <p class="text-sm text-gray-600 mt-3">Lorem ipsum dolor sit amet consectetur.</p>
                    </a>
                </div>
            </div>
            <a href="" class="text-red-600 underline underline-offset-2 mt-1">Read all Contributions</a>
        </div>
    </div>
</x-app-layout>
