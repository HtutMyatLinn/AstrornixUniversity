<aside id="sidebar" class="bg-[#1C2434] text-[#D4D4D4] w-64 min-h-screen flex flex-col
    fixed lg:static inset-y-0 left-0 z-40
    transform lg:transform-none transition-transform duration-300 ease-in-out
    -translate-x-full lg:translate-x-0">

    <!-- Logo Section -->
    <div class="p-4 pt-8 pb-8">
        <div class="flex items-center space-x-2 pl-2">
            <span class="text-base font-bold text-white">ASTRORNIX</span>
            <span class="text-sm text-gray-300">University</span>
        </div>
    </div>

    <!-- User Profile Section -->
    <div class="p-4 pl-6 text-white bg-[#1C2434]" x-data="{ open: false }">
        <button @click="open = !open" class="flex items-center justify-between w-full space-x-3">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
                    <svg class="w-5 h-5 text-black" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                    </svg>
                </div>
                <div class="text-left">
                    <h3 class="text-sm font-semibold">Aung Aung</h3>
                    <p class="text-xs text-gray-400">Admin</p>
                </div>
            </div>
        </button>
    </div>

    <!-- Navigation Menu -->
    <nav class="flex-1 overflow-y-auto py-4">
        <div class="px-5 mb-4">
            <h2 class="text-sm font-bold text-gray-400 uppercase tracking-wider mb-2">
                Pages
            </h2>
            <div class="space-y-1 text-[#D4D4D4]">
                <a href="{{ route('admin') }}"
                    class="flex items-center px-4 py-4 text-sm rounded-lg
                          {{ request()->routeIs('admin') ? 'bg-gray-700 text-white' : 'bg-[#1C2434] text-[#D4D4D4]' }}
                          hover:bg-gray-700 transition-colors duration-200">
                    <img class="w-4 h-4 mr-3" src="{{ asset('images/dashboard.png') }}" alt="">
                    Dashboard
                </a>

                <a href="{{ route('admin.user-management') }}"
                    class="flex items-center px-4 py-4 text-sm rounded-lg
                          {{ request()->routeIs('admin.user-management') ? 'bg-gray-700 text-white' : 'bg-[#1C2434] text-[#D4D4D4]' }}
                          hover:bg-gray-700 transition-colors duration-200">
                    <img class="w-4 h-4 mr-3" src="{{ asset('images/Usermanagement.png') }}" alt="">
                    User Management
                </a>

                <a href="{{ route('admin.notifications') }}"
                    class="flex items-center px-4 py-4 text-sm rounded-lg
                          {{ request()->routeIs('admin.notifications') ? 'bg-gray-700 text-white' : 'bg-[#1C2434] text-[#D4D4D4]' }}
                          hover:bg-gray-700 transition-colors duration-200">
                    <img class="w-4 h-4 mr-3" src="{{ asset('images/notifications.png') }}" alt="">
                    Notifications
                </a>

                <a href="{{ route('admin.report') }}"
                    class="flex items-center px-4 py-4 text-sm rounded-lg
                          {{ request()->routeIs('admin.report') ? 'bg-gray-700 text-white' : 'bg-[#1C2434] text-[#D4D4D4]' }}
                          hover:bg-gray-700 transition-colors duration-200">
                    <img class="w-4 h-4 mr-3" src="{{ asset('images/report&analysis.png') }}" alt="">
                    Report & Analytics
                </a>
            </div>
        </div>

        <!-- Settings Section -->
        <div class="px-5">
            <h2 class="text-sm font-bold text-gray-400 uppercase tracking-wider mb-2">
                Settings
            </h2>
            <div class="space-y-1">
                <a href="{{ route('admin.submission') }}"
                    class="flex items-center px-4 py-4 text-sm rounded-lg
                          {{ request()->routeIs('admin.submission') ? 'bg-gray-700 text-white' : 'bg-[#1C2434] text-[#D4D4D4]' }}
                          hover:bg-gray-700 transition-colors duration-200">
                    <img class="w-4 h-4 mr-3" src="{{ asset('images/submissionmanagement.png') }}" alt="">
                    Submission
                </a>

                <a href="{{ route('admin.closure') }}"
                    class="flex items-center px-4 py-4 text-sm rounded-lg
                          {{ request()->routeIs('admin.closure') ? 'bg-gray-700 text-white' : 'bg-[#1C2434] text-[#D4D4D4]' }}
                          hover:bg-gray-700 transition-colors duration-200">
                    <img class="w-4 h-4 mr-3" src="{{ asset('images/closuredate.png') }}" alt="">
                    Closure Dates
                </a>

                <a href="{{ route('admin.logs') }}"
                    class="flex items-center px-4 py-4 text-sm rounded-lg
                          {{ request()->routeIs('admin.logs') ? 'bg-gray-700 text-white' : 'bg-[#1C2434] text-[#D4D4D4]' }}
                          hover:bg-gray-700 transition-colors duration-200">
                    <img class="w-4 h-4 mr-3" src="{{ asset('images/logs.png') }}" alt="">
                    Logs & Security
                </a>

                <a href="{{ route('admin.inquiry') }}"
                    class="flex items-center px-4 py-4 text-sm rounded-lg
                          {{ request()->routeIs('admin.inquiry') ? 'bg-gray-700 text-white' : 'bg-[#1C2434] text-[#D4D4D4]' }}
                          hover:bg-gray-700 transition-colors duration-200">
                    <img class="w-4 h-4 mr-3" src="{{ asset('images/inquiry.png') }}" alt="">
                    Inquiry Management
                </a>
            </div>
        </div>
    </nav>
</aside>