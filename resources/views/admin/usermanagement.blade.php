<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Load Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.3/dist/cdn.min.js" defer></script>

    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-50">
    <!-- Main Container -->
    <div class="flex min-h-screen relative">
        <!-- Sidebar Toggle Button (Mobile) -->
        <button id="sidebarToggle" class="lg:hidden fixed bottom-4 right-4 z-50 bg-blue-600 text-white p-3 rounded-full shadow-lg">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Sidebar -->
        @include('admin.sidebar')

        <!-- Main Content -->
        <div class="flex-1 flex flex-col min-w-0 overflow-hidden">
            @include('admin.header')

            <!-- Main Content Container -->
            <div class="p-6 space-y-6">
                <!-- Header and Tabs section remains the same -->

                <!-- Search and Filters Bar -->
                <div class="flex flex-col lg:flex-row w-1/2 gap-4">
                    <!-- Search Box -->
                    <div class="flex-1 relative">
                        <input type="text"
                            placeholder="Search..."
                            class="w-full pl-10 pr-4 py-2.5 bg-gray-50 border-0 rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <svg class="absolute left-3 top-3 h-5 w-5 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>


                    <!-- Filter and Sort Section -->
                    <div class="flex gap-4">
                        <!-- Filter Dropdown -->
                        <div class="relative group">
                            <button class="px-4 py-2.5 bg-gray-50 rounded-2xl flex items-center gap-2 min-w-[120px] hover:bg-gray-100">
                                <span class="text-gray-700">Filter By</span>
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <!-- Primary Filter Menu -->
                            <div class="absolute right-0 mt-2 w-48 bg-white rounded-2xl shadow-lg border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                                <div class="p-2 space-y-1">
                                    <!-- Faculty Option with Submenu -->
                                    <div class="relative group/faculty">
                                        <button class="w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-lg text-left flex items-center justify-between">
                                            <span>Faculty</span>
                                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                            </svg>
                                        </button>
                                        <!-- Faculty Submenu -->
                                        <div class="absolute left-full top-0 ml-2 w-72 bg-white rounded-2xl shadow-lg border border-gray-100 opacity-0 invisible group-hover/faculty:opacity-100 group-hover/faculty:visible transition-all duration-200">
                                            <div class="p-2 space-y-1">
                                                <button class="w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-lg text-left">English Literature</button>
                                                <button class="w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-lg text-left">History</button>
                                                <button class="w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-lg text-left">Philosophy</button>
                                                <button class="w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-lg text-left">Social Sciences</button>
                                                <button class="w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-lg text-left">Psychology</button>
                                                <button class="w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-lg text-left">International Relations</button>
                                                <button class="w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-lg text-left">Business and Management</button>
                                                <button class="w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-lg text-left">Science and Technology</button>
                                                <button class="w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-lg text-left">Computer Science</button>
                                                <button class="w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-lg text-left">Mathematics</button>
                                                <button class="w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-lg text-left">Physics</button>
                                                <button class="w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-lg text-left">Chemistry</button>
                                                <button class="w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-lg text-left">Engineering</button>
                                                <button class="w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-lg text-left">Medicine and Health Sciences</button>
                                                <button class="w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-lg text-left">International Law</button>
                                                <button class="w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-lg text-left">Agriculture</button>
                                                <button class="w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-lg text-left">Food Science Technology</button>
                                                <button class="w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-lg text-left">Architecture and Design</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- All Users Option -->
                                    <button class="w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-lg text-left">
                                        All Users
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Sort Dropdown -->
                        <div class="relative group">
                            <button class="px-4 py-2.5 bg-gray-50 rounded-2xl flex items-center gap-2 min-w-[120px] hover:bg-gray-100">
                                <span class="text-gray-700">Sort By</span>
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <!-- Sort Menu -->
                            <div class="absolute right-0 mt-2 w-48 bg-white rounded-2xl shadow-lg border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                                <div class="p-2 space-y-1">
                                    <button class="w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-lg text-left">Ascending</button>
                                    <button class="w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-lg text-left">Descending</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Rest of the content (table, pagination, modal) remains the same -->
                <!-- Table Section -->
                <div class="overflow-x-auto rounded-lg border border-gray-200">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gray-50">
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Name</th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Email</th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Role</th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Status</th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <!-- Table Rows -->
                            <tr class="bg-gray-100">
                                <td class="px-6 py-4 text-sm">Aung Aung</td>
                                <td class="px-6 py-4 text-sm">Aung1@gmail.com</td>
                                <td class="px-6 py-4 text-sm">Admin</td>
                                <td class="px-6 py-4 text-sm">Active</td>
                                <td class="px-6 py-4 text-sm">
                                    <div class="flex items-center gap-2">
                                        <button class="text-green-600 hover:text-green-700 font-medium">Edit</button>
                                        <span class="text-gray-300">|</span>
                                        <button class="text-red-600 hover:text-red-700 font-medium">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-sm">Aung Aung</td>
                                <td class="px-6 py-4 text-sm">Aung1@gmail.com</td>
                                <td class="px-6 py-4 text-sm">Admin</td>
                                <td class="px-6 py-4 text-sm">Active</td>
                                <td class="px-6 py-4 text-sm">
                                    <div class="flex items-center gap-2">
                                        <button class="text-green-600 hover:text-green-700 font-medium">Edit</button>
                                        <span class="text-gray-300">|</span>
                                        <button class="text-red-600 hover:text-red-700 font-medium">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Repeat for more rows -->
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="flex justify-end items-center gap-2">
                    <button class="px-3 py-1.5 bg-gray-50 text-gray-600 rounded-lg hover:bg-gray-100">1</button>
                    <button class="px-3 py-1.5 bg-gray-50 text-gray-600 rounded-lg hover:bg-gray-100">2</button>
                    <span class="text-gray-600">...</span>
                    <button class="px-4 py-1.5 bg-gray-50 text-gray-600 rounded-lg hover:bg-gray-100 flex items-center gap-1">
                        Next
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>
    </div>

    <!-- JavaScript for Sidebar Toggle -->
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('-translate-x-full');
        });
    </script>
</body>

</html>
