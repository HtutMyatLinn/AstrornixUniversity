<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="bg-white p-4 rounded-sm w-full flex flex-col md:flex-row justify-center items-center">

        {{-- Left Section - Form --}}
        <div class="w-full md:w-1/2 pl-0 sm:pl-4 pr-0 sm:pr-8">
            {{-- Logo --}}
            <x-logo />

            <h1 class="text-2xl font-bold text-gray-900 mt-10 mb-2">Join the University Magazine</h1>
            <p class="text-gray-600 text-sm mb-6">Stay updated with the latest news, articles, and studen stories.</p>

            <form action="{{ route('register') }}" method="POST" class="space-y-3">
                @csrf

                {{-- Username --}}
                <div class="relative">
                    <label for="username" class="block text-gray-700 font-semibold">Username</label>
                    <input id="username" type="text"
                        class="mt-1 w-full px-4 py-2 border border-slate-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none"
                        name="username" placeholder="Enter your username" value="{{ old('username') }}">
                    <div class="absolute left-2 -bottom-2 bg-white">
                        @error('username')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row items-center gap-2 w-full">
                    {{-- Firstname --}}
                    <div class="w-full relative">
                        <label for="first_name" class="block text-gray-700 font-semibold">First Name</label>
                        <input id="first_name" type="text"
                            class="mt-1 w-full px-4 py-2 border border-slate-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none"
                            name="first_name" placeholder="Enter your first name" value="{{ old('first_name') }}">
                        <div class="absolute left-2 -bottom-2 bg-white">
                            @error('first_name')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    {{-- Lastname --}}
                    <div class="w-full relative">
                        <label for="last_name" class="block text-gray-700 font-semibold">Last Name</label>
                        <input id="last_name" type="text"
                            class="mt-1 w-full px-4 py-2 border border-slate-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none"
                            name="last_name" placeholder="Enter your last name" value="{{ old('last_name') }}">
                        <div class="absolute left-2 -bottom-2 bg-white">
                            @error('last_name')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- Email --}}
                <div class="w-full relative">
                    <label for="email" class="block text-gray-700 font-semibold">University Email</label>
                    <input id="email" type="email"
                        class="mt-1 w-full px-4 py-2 border border-slate-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none"
                        name="email" placeholder="example@university.edu" value="{{ old('email') }}">
                    <div class="absolute left-2 -bottom-2 bg-white">
                        @error('email')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row items-center gap-2 w-full">
                    {{-- Password --}}
                    <div class="w-full relative">
                        <label for="password" class="block text-gray-700 font-semibold">Password</label>
                        <input id="password" type="password"
                            class="mt-1 w-full px-4 py-2 border border-slate-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none"
                            name="password" placeholder="Enter a secure password">
                        <div class="absolute left-2 -bottom-2 bg-white">
                            @error('password')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    {{-- Confirm Password --}}
                    <div class="w-full">
                        <label for="password_confirmation" class="block text-gray-700 font-semibold">Confirm
                            Password</label>
                        <input id="password_confirmation" type="password"
                            class="mt-1 w-full px-4 py-2 border border-slate-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none"
                            name="password_confirmation" placeholder="Confirm a password">
                    </div>
                </div>

                {{-- Terms and Conditions --}}
                <div class="block mt-4">
                    <label for="terms" class="inline-flex items-center">
                        <input id="terms" type="checkbox"
                            class="rounded border-gray-300 text-blue-800 shadow-sm focus:ring-blue-800" name="terms">
                        <span class="ms-2 text-sm text-gray-600">I agree to the <a href="#"
                                class="text-blue-500 hover:underline">Terms and Conditions</a></span>
                    </label>
                    @error('terms')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Submit --}}
                <x-primary-button>
                    {{ __('Register') }}
                </x-primary-button>
            </form>

            <div class="mt-6 text-center">
                <p class="text-gray-700 text-sm">Already have an account? <a href="{{ route('login') }}"
                        class="text-blue-500 hover:underline">Login</a></p>
            </div>
        </div>

        {{-- Right Section - Image --}}
        <div class="w-1/2 h-full relative hidden md:block">
            <!-- Background Image -->
            <img src="{{ asset('images/rut-miit-oTglG1D4hRA-unsplash.jpg') }}" alt="University Magazine"
                class="w-full h-full object-cover rounded-sm select-none">

            <!-- Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/50 to-transparent rounded-md"></div>

            <!-- Text Overlay -->
            <div class="absolute bottom-6 left-6 text-white text-lg max-w-[90%]">
                <p class="text-xl font-semibold">University Annual Magazine</p>
                <p class="mt-2 text-sm text-gray-200">
                    Join the legacy! Be part of a vibrant community of writers, photographers, and creative minds.
                    Share your experiences, achievements, and perspectives with the university.
                    Register today and make your voice heard!
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>
