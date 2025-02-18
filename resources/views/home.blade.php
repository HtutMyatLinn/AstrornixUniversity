<x-app-layout>
    <div class="flex flex-col md:flex-row justify-center items-center gap-6 px-6 bg-gray-100 rounded-lg shadow-md">
        <!-- Title Section -->
        <div class="text-left text-xl font-semibold bg-blue-900 text-white p-4 pr-6">
            <p>17th</p>
            <p>Best</p>
            <p>Articles</p>
        </div>

        <!-- Image Section -->
        <div class="w-[400px] md:w-[600px] lg:w-[700px] h-[350px] md:h-[450px] lg:h-[500px]">
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

    <div class="px-3 bg-white">
        {{-- Hero --}}
        <div class="max-w-5xl mx-auto grid grid-cols-2 py-10 px-3">
            <div class="text-5xl font-light">
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
        <div class="flex justify-center mb-14">
            <div class="max-w-6xl w-full mx-auto">
                <h2
                    class="text-3xl font-semibold text-center mb-10 pb-2 underline underline-offset-8 decoration-1 decoration-gray-500">
                    Top
                    Contributions
                </h2>
                <div class="grid grid-cols-2 md:grid-cols-2">
                    <!-- Large Image -->
                    <div class="relative col-span-1">
                        <img src="{{ asset('images/809812e35ca241ddeca6bd1f191e857e.jfif') }}"
                            class="w-full h-full object-cover" alt="Adventure">
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
                                class="w-full h-full object-cover" alt="Business">
                            <div class="absolute bottom-0 left-0 text-white p-4">
                                <span class="bg-[#5A7BAF] text-white px-2 py-1 text-sm">Business</span>
                                <p class="text-sm mt-2">Lorem ipsum dolor sit amet consectetur. In tincidunt volutpat
                                    ullamcorper diam dui molestie ullamcorper</p>
                            </div>
                        </div>

                        <!-- Two Smaller Images -->
                        <div class="relative col-span-1">
                            <img src="{{ asset('images/809812e35ca241ddeca6bd1f191e857e.jfif') }}"
                                class="w-full h-full object-cover" alt="Digital">
                            <div class="absolute bottom-0 left-0 text-white p-4">
                                <span class="bg-[#5A7BAF] text-white px-2 py-1 text-sm">Digital</span>
                                <p class="text-sm mt-2">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                        <div class="relative col-span-1">
                            <img src="{{ asset('images/809812e35ca241ddeca6bd1f191e857e.jfif') }}"
                                class="w-full h-full object-cover" alt="Digital">
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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-3 pb-10">
            <div class="uppercase text-red-700 mb-16">
                <h1 class="text-2xl font-bold">The Magazine</h1>
                <p class="text-red-600">Contribution</p>
            </div>

            <div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-5">
                    <!-- Book Card -->
                    <a href="" class="overflow-hidden flex flex-col items-center">
                        <div class="w-48">
                            <img src="{{ asset('images/2e92a52a02cfe1c2bb1f75d5faf45fbb.jfif') }}" alt="Book Cover"
                                class="w-full h-70 object-cover rounded">
                        </div>
                        <p class="text-sm text-gray-600 mt-3">Lorem ipsum dolor sit amet consectetur.</p>
                    </a>

                    <a href="" class="overflow-hidden flex flex-col items-center">
                        <div class="w-48">
                            <img src="{{ asset('images/2e92a52a02cfe1c2bb1f75d5faf45fbb.jfif') }}" alt="Book Cover"
                                class="w-full h-70 object-cover rounded">
                        </div>
                        <div class="px-4">
                            <h1 class="font-bold text-lg text-gray-900">Book Title</h1>
                            <p class="text-sm text-gray-600 mt-1">Author Name</p>
                        </div>
                    </a>

                    <a href="" class="overflow-hidden flex flex-col items-center">
                        <div class="w-48">
                            <img src="{{ asset('images/2e92a52a02cfe1c2bb1f75d5faf45fbb.jfif') }}" alt="Book Cover"
                                class="w-full h-70 object-cover rounded">
                        </div>
                        <div class="px-4">
                            <h1 class="font-bold text-lg text-gray-900">Book Title</h1>
                            <p class="text-sm text-gray-600 mt-1">Author Name</p>
                        </div>
                    </a>

                    <a href="" class="overflow-hidden flex flex-col items-center">
                        <div class="w-48">
                            <img src="{{ asset('images/2e92a52a02cfe1c2bb1f75d5faf45fbb.jfif') }}" alt="Book Cover"
                                class="w-full h-70 object-cover rounded">
                        </div>
                        <div class="px-4">
                            <h1 class="font-bold text-lg text-gray-900">Book Title</h1>
                            <p class="text-sm text-gray-600 mt-1">Author Name</p>
                        </div>
                    </a>

                    <a href="" class="overflow-hidden flex flex-col items-center">
                        <div class="w-48">
                            <img src="{{ asset('images/2e92a52a02cfe1c2bb1f75d5faf45fbb.jfif') }}" alt="Book Cover"
                                class="w-full h-70 object-cover rounded">
                        </div>
                        <div class="px-4">
                            <h1 class="font-bold text-lg text-gray-900">Book Title</h1>
                            <p class="text-sm text-gray-600 mt-1">Author Name</p>
                        </div>
                    </a>
                </div>
            </div>
            <a href="" class="text-red-600 underline underline-offset-2">Read all Contributions</a>
        </div>
    </div>
</x-app-layout>
