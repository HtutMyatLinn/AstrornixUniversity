<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="bg-white p-4 rounded-sm w-full h-screen sm:h-full flex flex-col md:flex-row justify-center items-center">
        {{-- Left Section - Form --}}
        <div class="w-full md:w-1/2 pl-0 sm:pl-4 pr-0 sm:pr-8">
            {{-- Logo --}}
            <x-logo />

            <h1 class="text-2xl font-bold text-gray-900 mt-10 mb-2">Login to your account</h1>
            <p class="text-gray-600 text-sm mb-6">Access exclusive content, stay informed, and connect with the
                university
                community.</p>

            <form action="{{ route('login') }}" method="POST" class="space-y-3">
                @csrf

                {{-- Email --}}
                <div class="relative">
                    <label for="email" class="block text-gray-700 font-semibold">University Email</label>
                    <input type="email" name="email" id="email"
                        class="mt-1 w-full px-4 py-2 border border-slate-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none"
                        placeholder="example@university.edu" value="{{ old('email') }}">
                    <div class="absolute left-2 -bottom-2 bg-white">
                        @error('email')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- Password --}}
                <div class="relative">
                    <label for="password" class="block text-gray-700 font-semibold">Password</label>
                    <input type="password" name="password" id="password"
                        class="mt-1 w-full px-4 py-2 border border-slate-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none"
                        placeholder="Enter a secure password">
                    <div class="absolute left-2 -bottom-2 bg-white">
                        @error('password')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                {{-- Forgot Password --}}
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                {{-- Submit --}}
                <x-primary-button>
                    {{ __('Log in') }}
                </x-primary-button>
            </form>

            <div class="mt-6 text-center">
                <p class="text-gray-700 text-sm">Don't have an account? <a href="{{ route('register') }}"
                        class="text-blue-500 hover:underline">Register</a></p>
            </div>
        </div>

        {{-- Right Section - Image --}}
        <div class="w-1/2 h-full relative hidden md:block">
            <!-- Background Image -->
            <img src="{{ asset('images/people-2562380_1280.jpg') }}" alt="University Magazine"
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
