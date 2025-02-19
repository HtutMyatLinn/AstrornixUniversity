<header class="bg-white border-b border-gray-200 sticky top-0 z-30">
    <div class="px-4 sm:px-6 lg:px-8 py-4">
        <div class="flex items-center justify-between">
            <!-- Left side -->
            <div class="flex items-center space-x-4">
                <img src="{{asset('images/logo.png')}}" class=" h-16 w-16" />
            </div>

            <!-- Right side -->
            <div class="flex items-center space-x-4">
                <!-- Theme Toggle -->
                <button class="flex justify-center items-center w-10 h-10 rounded-full bg-gray-100 text-gray-400 hover:text-gray-500">
                    <svg class="w-5 h-5" fill="#A2A2A2" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </button>

                <!-- Notifications -->
                <button class="flex justify-center items-center w-10 h-10 rounded-full bg-gray-100 text-gray-400 hover:text-gray-500 relative">
                    <svg class="w-5 h-5" fill="#A2A2A2" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </button>

                <!-- Profile Dropdown -->
                <div class="flex items-center space-x-4">
                    <!-- Text Section -->
                    <div class="text-right">
                        <h4 class="text-sm font-medium text-black">Aung Aung</h4>
                        <span class="text-sm text-gray-500">Admin</span>
                    </div>

                    <!-- Profile Image Placeholder -->
                    <div class="w-12 h-12 bg-gray-300 rounded-full"></div>
                </div>
            </div>
        </div>
    </div>
</header>