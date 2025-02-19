<footer class="relative text-white bg-cover bg-center bg-no-repeat py-6"
    style="background-image: url('{{ asset('images/Group 56.png') }}');">
    <div class="flex flex-col md:flex-row px-8 pb-5">
        <!-- Left Side (Logo and Socials) -->
        <div class="w-full md:w-1/2 text-black flex flex-col justify-between gap-24">
            <div class="w-40 select-none">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-full h-full object-cover">
            </div>
            <div class="text-black">
                <p class="font-medium">Follow us</p>
                <div class="flex items-center gap-4 mt-2">
                    <i class="ri-instagram-line text-2xl"></i>
                    <i class="ri-facebook-circle-line text-2xl"></i>
                    <i class="ri-twitter-line text-2xl"></i>
                </div>
            </div>
        </div>

        <!-- Right Side (Departments and Contact) -->
        <div class="w-full md:w-1/2">
            <h3 class="text-2xl text-black font-semibold text-center">UNIVERSITY OF ASTRORNIX</h3>

            <!-- Department Lists -->
            <div class="flex justify-center gap-5 my-10">
                <ul class="space-y-2 border-l px-7">
                    <li>Home</li>
                    <li>Contact Us</li>
                    <li>About</li>
                    <li>Departments</li>
                    <li>Contributions</li>
                </ul>
                <ul class="space-y-2 border-l px-7">
                    <li>Terms and Conditions</li>
                    <li>Youtube</li>
                    <li>Twitter</li>
                    <li>Facebook</li>
                    <li>Skype</li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="flex justify-center items-center gap-36 mt-6 text-sm text-black">
                <div class="flex items-center gap-3">
                    <i class="ri-map-pin-line text-xl"></i> <span class="font-semibold">xxxxxxx</span>
                </div>
                <div class="flex items-center gap-3">
                    <i class="ri-phone-line text-xl"></i> <span class="font-semibold">+95963554322</span>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-between items-center mx-8 border-t border-t-black">
        <!-- Social Media -->
        <div class="text-black">
            <p class="text-sm">@2025 University Magazine</p>
        </div>
        <!-- Country/Region -->
        <div class="text-center mt-4 text-sm font-medium">
            <p>Country/Region</p>
            <p>Myanmar/Yangon</p>
        </div>
    </div>
</footer>
