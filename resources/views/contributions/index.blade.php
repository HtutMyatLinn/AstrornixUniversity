<x-app-layout>
    <div class="min-h-screen bg-[#5A7BAF]">
        <!-- Hero Section -->
        <div class="flex flex-col items-center justify-center px-4 py-20 text-center text-white">
            <h1 class="mb-4 text-5xl font-bold">All Contributions</h1>
            <p class="mb-8 max-w-2xl text-xl text-gray-200">
                Explore the latest contributions from researchers, students and industry experts
            </p>
            <div class="relative w-full max-w-2xl">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="absolute left-4 top-1/2 h-5 w-5 -translate-y-1/2 text-gray-500" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <input type="text" placeholder="Search contributions......"
                    class="w-full rounded-lg bg-white py-3 pl-12 pr-4 text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
        </div>

        <!-- Content Section -->
        <div class="bg-gray-50 px-4 py-12 md:px-6 lg:px-8">
            <div class="mx-auto max-w-7xl">
                <div class="grid gap-8 md:grid-cols-[250px,1fr]">
                    <!-- Filters Sidebar -->
                    <div class="rounded-lg bg-white p-6 shadow-sm">
                        <h2 class="mb-6 text-lg font-semibold">Filters</h2>
                        <div class="space-y-6">
                            <div>
                                <h3 class="mb-3 text-sm font-medium">Categories</h3>
                                <div class="space-y-2">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="h-4 w-4 rounded border-gray-300">
                                        <span class="ml-2 text-sm">Science</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="h-4 w-4 rounded border-gray-300">
                                        <span class="ml-2 text-sm">Math</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="h-4 w-4 rounded border-gray-300">
                                        <span class="ml-2 text-sm">Business</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="h-4 w-4 rounded border-gray-300">
                                        <span class="ml-2 text-sm">Medical</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="h-4 w-4 rounded border-gray-300">
                                        <span class="ml-2 text-sm">Physics</span>
                                    </label>
                                </div>
                            </div>

                            <div>
                                <h3 class="mb-3 text-sm font-medium">Tags</h3>
                                <div class="space-y-2">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="h-4 w-4 rounded border-gray-300">
                                        <span class="ml-2 text-sm">Research</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="h-4 w-4 rounded border-gray-300">
                                        <span class="ml-2 text-sm">Reviews</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="h-4 w-4 rounded border-gray-300">
                                        <span class="ml-2 text-sm">Case Studies</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="h-4 w-4 rounded border-gray-300">
                                        <span class="ml-2 text-sm">Innovations</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="h-4 w-4 rounded border-gray-300">
                                        <span class="ml-2 text-sm">Events</span>
                                    </label>
                                </div>
                            </div>

                            <button
                                class="w-full rounded-lg bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700">
                                Apply Filters
                            </button>
                        </div>
                    </div>

                    <!-- Grid of Cards -->
                    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                        <!-- Card 1 -->
                        <div class="overflow-hidden rounded-lg bg-white shadow-sm transition-shadow hover:shadow-md">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-yhVsdKoVCnpTdmCf2qVzciDnTwXU5m.png"
                                alt="Mathematics textbook cover" class="h-48 w-full object-cover">
                            <div class="p-4">
                                <h3 class="mb-2 text-lg font-semibold">Mathematics</h3>
                                <p class="mb-4 text-sm text-gray-600">
                                    Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.
                                </p>
                                <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-700">
                                    Read more
                                </a>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="overflow-hidden rounded-lg bg-white shadow-sm transition-shadow hover:shadow-md">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-yhVsdKoVCnpTdmCf2qVzciDnTwXU5m.png"
                                alt="Mathematics textbook cover" class="h-48 w-full object-cover">
                            <div class="p-4">
                                <h3 class="mb-2 text-lg font-semibold">Mathematics</h3>
                                <p class="mb-4 text-sm text-gray-600">
                                    Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.
                                </p>
                                <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-700">
                                    Read more
                                </a>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="overflow-hidden rounded-lg bg-white shadow-sm transition-shadow hover:shadow-md">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-yhVsdKoVCnpTdmCf2qVzciDnTwXU5m.png"
                                alt="Mathematics textbook cover" class="h-48 w-full object-cover">
                            <div class="p-4">
                                <h3 class="mb-2 text-lg font-semibold">Mathematics</h3>
                                <p class="mb-4 text-sm text-gray-600">
                                    Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.
                                </p>
                                <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-700">
                                    Read more
                                </a>
                            </div>
                        </div>

                        <!-- Add more cards as needed to fill the grid -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contributions | University of Astrornix</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

</body>

</html> --}}
