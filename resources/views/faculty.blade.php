<x-app-layout>

    <!-- Hero Section -->
    <div class="bg-[#5A7BAF] text-white text-center py-12 px-4">
        <h1 class="text-2xl md:text-4xl font-semibold">Faculty of Computer Science</h1>
        <p class="text-sm md:text-lg mt-2 opacity-80">
            Discover the latest research and contributions from our faculty members.
        </p>
    </div>

    <!-- About the Faculty Section -->
    <div class="container mx-auto px-4 sm:px-6 md:px-12 py-12">
        <div class="flex flex-col md:flex-row items-center gap-6 md:gap-12">
            <!-- Text Content -->
            <div class="w-full md:w-1/2">
                <h2 class="text-lg md:text-2xl font-semibold text-black mb-3">About the Faculty</h2>
                <p class="text-sm md:text-base text-gray-700 leading-relaxed">
                    The Faculty of Computer Science is committed to advancing knowledge in
                    artificial intelligence, cybersecurity, and software engineering. Our faculty
                    members are engaged in groundbreaking research and industry collaborations.
                </p>
            </div>

            <!-- Image -->
            <div class="w-full md:w-1/2">
                <img src="{{ asset('images/f1.png') }}" alt="Faculty Research"
                    class="w-full sm:w-3/4 h-auto object-cover mx-auto">
            </div>
        </div>
    </div>

    <!-- Recent Faculty Contributions Section -->
    <div class="py-12">
        <div class="container mx-auto px-4 sm:px-6 md:px-12 text-center">
            <h2 class="text-xl md:text-3xl font-semibold mb-2">Recent Faculty Contributions</h2>

            <!-- Additional Text -->
            <p class="text-sm md:text-base text-gray-600 mb-6">
                Explore research, publications, and projects from our faculty members shaping innovation and knowledge.
            </p>

            <!-- Search Bar -->
            <div class="max-w-lg mx-auto mb-10 relative">
                <input type="text" placeholder="Search Contributions..."
                    class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-gray-300 text-sm md:text-base pl-10 transition duration-300 ease-in-out">
                <img src="{{ asset('images/group.png') }}" alt="Search Icon"
                    class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 transition-all duration-300 ease-in-out">
            </div>

            <!-- First Contribution on Top (Image Left and Text Right) -->
            <div class="flex flex-col md:flex-row items-center gap-6 mb-12">
                <!-- Adjusted Image Width and margin-left to move the image 50px to the right -->
                <div class="w-full md:w-3/4 md:ml-[82px] mx-auto md:mx-0">
                    <img src="{{ asset('images/cy1.png') }}" alt="Safe Trip" class="w-full h-auto object-cover">
                </div>
                <div class="text-left w-full md:w-1/2 mt-4">
                    <a href="#" class="text-lg md:text-xl font-semibold text-black hover:underline">Safe Trip</a>
                    <p class="text-base md:text-lg text-gray-700">Do your exercise properly</p>
                    <p class="text-sm text-gray-500 mt-1">by <strong>Jonathan Shaw</strong></p>
                </div>
            </div>

            <!-- Separate Section for the Next Four Contributions -->
            <div class="py-12">
                <h2 class="text-xl md:text-2xl font-semibold mb-4">Other Contributions</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="flex flex-col items-center gap-6">
                        <div class="w-full md:w-3/4">
                            <img src="{{ asset('images/cy2.png') }}" alt="Ivy Athletes"
                                class="w-full h-auto object-cover">
                        </div>
                        <div class="text-center w-full md:w-1/2 mt-4">
                            <a href="#" class="text-md md:text-lg font-semibold text-black hover:underline">Why
                                Ivy Athletes Score in Careers →</a>
                            <p class="text-sm text-gray-700">How does undergraduate participation in varsity sports
                                enhance career success?</p>
                            <p class="text-xs text-gray-500 mt-1">by <strong>Jonathan Shaw</strong></p>
                        </div>
                    </div>

                    <div class="flex flex-col items-center gap-6">
                        <div class="w-full md:w-3/4">
                            <img src="{{ asset('images/news.png') }}" alt="Medical Research"
                                class="w-full h-auto object-cover">
                        </div>
                        <div class="text-center w-full md:w-1/2 mt-4">
                            <a href="#"
                                class="text-md md:text-lg font-semibold text-black hover:underline">Enhancing Critical
                                Care Through Medical Research →</a>
                            <p class="text-sm text-gray-700">How does undergraduate participation in varsity sports
                                enhance career success?</p>
                            <p class="text-xs text-gray-500 mt-1">by <strong>Jonathan Shaw</strong></p>
                        </div>
                    </div>

                    <div class="flex flex-col items-center gap-6">
                        <div class="w-full md:w-3/4">
                            <img src="{{ asset('images/com.png') }}" alt="Tech Innovations"
                                class="w-full h-auto object-cover">
                        </div>
                        <div class="text-center w-full md:w-1/2 mt-4">
                            <a href="#" class="text-md md:text-lg font-semibold text-black hover:underline">Tech
                                Innovations in AI →</a>
                            <p class="text-sm text-gray-700">Exploring the latest advancements in artificial
                                intelligence research.</p>
                            <p class="text-xs text-gray-500 mt-1">by <strong>Jonathan Shaw</strong></p>
                        </div>
                    </div>

                    <div class="flex flex-col items-center gap-6">
                        <div class="w-full md:w-3/4">
                            <img src="{{ asset('images/cs.png') }}" alt="Cybersecurity"
                                class="w-full h-auto object-cover">
                        </div>
                        <div class="text-center w-full md:w-1/2 mt-4">
                            <a href="#"
                                class="text-md md:text-lg font-semibold text-black hover:underline">Cybersecurity Trends
                                →</a>
                            <p class="text-sm text-gray-700">How modern cybersecurity techniques are shaping the digital
                                world.</p>
                            <p class="text-xs text-gray-500 mt-1">by <strong>Jonathan Shaw</strong></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More Button (Aligned to the left) -->
            <div class="text-left mt-8">
                <button
                    class="bg-[#5A7BAF] text-white py-2 px-4 rounded-md shadow-md hover:bg-blue-600 transition duration-300 ease-in-out">
                    Load more Contributions
                </button>
            </div>
        </div>
    </div>

</x-app-layout>
