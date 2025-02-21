<x-app-layout>
    <div class="overflow-x-hidden w-full max-w-full">

        <!-- About Us Section -->
        <div class="container mx-auto px-3 sm:px-4 py-4 md:py-12 flex flex-col md:flex-row items-center gap-3 md:gap-12">
            <!-- Image Section -->
            <div class="w-full md:w-1/2 flex justify-center">
                <img src="{{ asset('images/img1.png') }}" alt="Graduation Celebration"
                    class="w-auto max-w-[85%] sm:max-w-[90%] md:max-w-md rounded-lg object-cover">
            </div>

            <!-- Text Section -->
            <div class="w-full md:w-1/2 font-poppins text-center md:text-left mx-auto">
                <!-- About Us Section -->
                <h3
                    class="text-sm md:text-2xl font-semibold text-black mb-3 md:mb-6 flex items-center justify-center md:justify-start">
                    <span class="mr-1 md:mr-2">ABOUT US</span>
                    <span class="border-t border-black w-8 md:w-16"></span>
                </h3>
                <p class="text-xs md:text-lg text-black mb-3 md:mb-4 leading-tight md:leading-normal">
                    University Magazine is a premier platform dedicated to showcasing academic excellence, research, and
                    the creative endeavors of students and faculty members. Our mission is to inform, inspire, and
                    connect the university community by publishing high-quality contributions in various fields of
                    study.
                </p>

                <!-- Mission Section -->
                <h3 class="text-lg md:text-2xl font-semibold text-black mt-6 md:mt-8">Our Mission</h3>
                <p class="text-xs md:text-lg text-black mb-3 md:mb-4 leading-tight md:leading-normal">
                    Our goal is to empower students, educators, and researchers by providing a space where innovative
                    ideas, groundbreaking research, and intellectual discussions thrive. We believe in fostering a
                    culture of learning and knowledge-sharing to make a lasting impact.
                </p>

                <!-- Vision Section -->
                <h3 class="text-lg md:text-2xl font-semibold text-black mt-6 md:mt-8">Our Vision</h3>
                <p class="text-xs md:text-lg text-black leading-tight md:leading-normal">
                    To be the leading university publication that highlights academic achievements, promotes
                    interdisciplinary collaboration, and encourages critical thinking among students and scholars
                    worldwide.
                </p>
            </div>

        </div>

        <hr class="border-t border-black my-3 md:my-8 w-[85%] mx-auto border-opacity-20">

        <!-- Features Section -->
        <div
            class="grid grid-cols-1 md:grid-cols-3 gap-3 md:gap-6 text-center mb-6 md:mb-12 font-poppins w-full max-w-screen-lg mx-auto px-3">
            <div class="px-2">
                <img src="{{ asset('images/fluent.png') }}" alt="Academic Excellence"
                    class="mx-auto mb-2 md:mb-4 w-7 md:w-12">
                <h3 class="text-sm md:text-xl font-semibold text-black">Academic Excellence</h3>
                <p class="text-gray-600 text-xs md:text-base">Showcasing top research and academic works</p>
            </div>
            <div class="px-2">
                <img src="{{ asset('images/newspaper.png') }}" alt="Latest News"
                    class="mx-auto mb-2 md:mb-4 w-7 md:w-12">
                <h3 class="text-sm md:text-xl font-semibold text-black">Latest News</h3>
                <p class="text-gray-600 text-xs md:text-base">Bringing you the latest updates from the university</p>
            </div>
            <div class="px-2">
                <img src="{{ asset('images/graduation.png') }}" alt="Student Engagement"
                    class="mx-auto mb-2 md:mb-4 w-7 md:w-12">
                <h3 class="text-sm md:text-xl font-semibold text-black">Student Engagement</h3>
                <p class="text-gray-600 text-xs md:text-base">Empowering student voices and contributions</p>
            </div>
        </div>

        <!-- Our Staff Section -->
        <div class="text-center font-poppins py-4 md:py-12 w-full max-w-screen-lg mx-auto">
            <h2 class="text-sm md:text-2xl font-semibold text-black mb-3 md:mb-8">Our Staff</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3 md:gap-8 px-3">
                <div class="text-center">
                    <img src="{{ asset('images/i1.png') }}" alt="Jason Wan"
                        class="mx-auto rounded-full w-16 h-16 md:w-32 md:h-32">
                    <h3 class="text-sm md:text-xl font-semibold text-black mt-2 md:mt-4">Jason Wan</h3>
                    <p class="text-gray-600 text-xs md:text-base">Empowering student voices and contributions</p>
                </div>
                <div class="text-center">
                    <img src="{{ asset('images/i2.png') }}" alt="Jason Wan"
                        class="mx-auto rounded-full w-16 h-16 md:w-32 md:h-32">
                    <h3 class="text-sm md:text-xl font-semibold text-black mt-2 md:mt-4">Jason Wan</h3>
                    <p class="text-gray-600 text-xs md:text-base">Empowering student voices and contributions</p>
                </div>
                <div class="text-center">
                    <img src="{{ asset('images/i3.png') }}" alt="Jason Wan"
                        class="mx-auto rounded-full w-16 h-16 md:w-32 md:h-32">
                    <h3 class="text-sm md:text-xl font-semibold text-black mt-2 md:mt-4">Jason Wan</h3>
                    <p class="text-gray-600 text-xs md:text-base">Empowering student voices and contributions</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
