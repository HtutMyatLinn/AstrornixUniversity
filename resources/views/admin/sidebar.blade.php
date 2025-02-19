<!-- Sidebar -->
<aside id="sidebar" class="bg-[#1C2434] text-[#D4D4D4] w-64 min-h-screen flex flex-col
    fixed lg:static inset-y-0 left-0 z-40
    transform lg:transform-none transition-transform duration-300 ease-in-out
    -translate-x-full lg:translate-x-0">

    <!-- Logo Section -->
    <div class="p-4 pt-8 pb-8">
        <div class="flex items-center space-x-2 pl-2">
            <span class=" text-base font-bold text-white">ASTRORNIX</span>
            <span class="text-sm text-gray-300">University</span>
        </div>
    </div>

    <!-- User Profile Section -->
    <div class="p-4 pl-6 text-white bg-[#1C2434]" x-data="{ open: false }">
        <!-- Profile Button -->
        <button @click="open = !open" class="flex items-center justify-between w-full space-x-3">
            <div class="flex items-center space-x-3">
                <!-- Profile Image -->
                <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
                    <svg class="w-5 h-5 text-black" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                    </svg>
                </div>
                <div class=" text-left">
                    <h3 class="text-sm font-semibold">Aung Aung</h3>
                    <p class="text-xs text-gray-400">Admin</p>
                </div>
            </div>
            <!-- Dropdown Arrow -->
            <svg :class="{'rotate-180': open}" class="w-4 h-4 transition-transform text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
            </svg>
        </button>

        <!-- Dropdown Menu -->
        <div x-show="open" x-transition class="mt-3 bg-[#1C2434] p-3 rounded-lg">
            <a href="#" class="flex items-center space-x-3 text-white hover:bg-gray-700 p-2 rounded">
                <svg class="w-5 h-5 text-gray-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c3.314 0 6-2.686 6-6S15.314 0 12 0 6 2.686 6 6s2.686 6 6 6zM2 22a10 10 0 0120 0H2z"></path>
                </svg>
                <span class=" text-sm font-medium">Edit Profile</span>
            </a>
            <a href="#" class="flex items-center space-x-3 text-white hover:bg-gray-700 p-2 rounded">
                <svg class="w-5 h-5 text-gray-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 11-6 0v-1"></path>
                </svg>
                <span class=" text-sm font-medium">Logout</span>
            </a>
        </div>
    </div>

    <!-- Navigation Menu -->
    <nav class="flex-1 overflow-y-auto py-4">
        <!-- Pages Section -->
        <div class="px-5 mb-4">
            <h2 class="text-sm font-bold text-gray-400 uppercase tracking-wider mb-2">
                Pages
            </h2>
            <div class="space-y-1 text-[#D4D4D4]">
                <a href="#" class="flex items-center px-4 py-2 text-sm rounded-lg
                    hover:bg-gray-700 transition-colors duration-200
                    bg-[#1C2434] text-[#D4D4D4]">
                    <!-- <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg> -->
                    <img class=" w-4 h-4 mr-3" src="{{ asset('images/dashboard.png') }}" alt="">
                    Dashboard
                </a>

                <a href="#" class="flex items-center px-4 py-2 text-sm rounded-lg bg-[#1C2434]
                    hover:bg-gray-700 transition-colors duration-200
                     text-[#D4D4D4]">
                    <img class=" w-4 h-4 mr-3" src="{{ asset('images/dashboard.png') }}" alt="">
                    User Management
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-sm rounded-lg bg-[#1C2434]
                    hover:bg-gray-700 transition-colors duration-200
                     text-[#D4D4D4]">
                    <img class=" w-4 h-4 mr-3" src="{{ asset('images/dashboard.png') }}" alt="">
                    Notifications
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-sm rounded-lg bg-[#1C2434]
                    hover:bg-gray-700 transition-colors duration-200
                     text-[#D4D4D4]">
                    <img class=" w-4 h-4 mr-3" src="{{ asset('images/dashboard.png') }}" alt="">
                    Report & Analytics
                </a>
                <!-- Add more menu items similarly -->
            </div>
        </div>

        <!-- Settings Section -->
        <div class="px-5">
            <h2 class=" text-sm font-bold text-gray-400 uppercase tracking-wider mb-2">
                Settings
            </h2>
            <div class="space-y-1">
                <!-- Settings Menu Items -->
                <a href="#" class="flex items-center px-4 py-2 text-sm rounded-lg bg-[#1C2434]
                    hover:bg-gray-700 transition-colors duration-200
                     text-[#D4D4D4]">
                    <img class=" w-4 h-4 mr-3" src="{{ asset('images/dashboard.png') }}" alt="">
                    Submission Management
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-sm rounded-lg bg-[#1C2434]
                    hover:bg-gray-700 transition-colors duration-200
                     text-[#D4D4D4]">
                    <img class=" w-4 h-4 mr-3" src="{{ asset('images/dashboard.png') }}" alt="">
                    Closure Dates
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-sm rounded-lg bg-[#1C2434]
                    hover:bg-gray-700 transition-colors duration-200
                     text-[#D4D4D4]">
                    <img class=" w-4 h-4 mr-3" src="{{ asset('images/dashboard.png') }}" alt="">
                    Logs & Security
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-sm rounded-lg bg-[#1C2434]
                    hover:bg-gray-700 transition-colors duration-200
                     text-[#D4D4D4]">
                    <img class=" w-4 h-4 mr-3" src="{{ asset('images/dashboard.png') }}" alt="">
                    Inquiry Management
                </a>
            </div>
        </div>
    </nav>
</aside>