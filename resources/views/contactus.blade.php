<x-app-layout>
    <!-- Hero Section (Top Cover Page) -->
    <div class="relative w-full h-[300px] md:h-[500px]">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
            style="background-image: url('{{ asset('images/cov3.jpeg') }}');">
            <div class="absolute inset-0 bg-black bg-opacity-20"></div> <!-- Overlay -->
        </div>

        <div class="relative z-10 flex flex-col justify-center h-full px-4 md:px-16 text-white text-center md:text-left">
            <h2 class="text-2xl md:text-4xl font-semibold mb-2 md:mb-4">Contact Us</h2>
            <p class="text-sm md:text-xl max-w-xs md:max-w-lg mx-auto md:mx-0">
                We'd love to hear from you. Reach out with any questions, feedback, or inquiries.
            </p>
        </div>

        <!-- Bottom Right Circular Image -->
        <div class="absolute bottom-[-30px] right-1/2 md:right-6 transform md:translate-x-0 translate-x-1/2">
            <img src="{{ asset('images/Ellipse2.png') }}" alt="Profile"
                class="w-16 h-16 md:w-32 md:h-32 lg:w-40 lg:h-40 rounded-full border-4 border-white shadow-lg object-cover">
        </div>
    </div>

    <!-- Contact Section (Responsive Layout) -->
    <div class="w-full px-4 md:px-12 py-8 md:py-12">
        <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">

            <!-- Left Column: Contact Form -->
            <div class="bg-white p-4 md:p-8 rounded-lg shadow-md w-full">
                <h3 class="text-xl md:text-2xl font-semibold mb-3 md:mb-4">Submit an Inquiry</h3>

                <!-- Info Message Inside the Box -->
                <p class="text-gray-700 text-xs md:text-sm mb-3 md:mb-4">
                    Have a question or need assistance? Fill out the form below, and our support team will get back to
                    you within 24-48 hours.
                </p>

                <form action="#" method="POST" class="space-y-3 md:space-y-4">
                    @csrf

                    <!-- Subject -->
                    <div>
                        <label class="block text-sm font-semibold">Subject</label>
                        <input type="text" name="subject" placeholder="Enter the subject of your inquiry"
                            class="w-full px-3 py-2 mt-1 border rounded-md focus:ring focus:ring-gray-300 text-sm md:text-base">
                    </div>

                    <!-- Priority Level -->
                    <div>
                        <label class="block text-sm font-semibold">Priority Level</label>
                        <select name="priority"
                            class="w-full px-3 py-2 mt-1 border rounded-md focus:ring focus:ring-gray-300 text-sm md:text-base">
                            <option>Low</option>
                            <option selected>Medium</option>
                            <option>High</option>
                        </select>
                    </div>

                    <!-- Message -->
                    <div>
                        <label class="block text-sm font-semibold">Your Message</label>
                        <textarea name="message" placeholder="Write your message here..."
                            class="w-full px-3 py-2 mt-1 border rounded-md focus:ring focus:ring-gray-300 h-24 md:h-32 text-sm md:text-base"></textarea>
                    </div>

                    <!-- Help Tip Inside Contact Form -->
                    <p class="text-gray-600 text-xs md:text-sm">
                        📌 **Tip:** Please provide as much detail as possible to help us resolve your inquiry
                        efficiently.
                    </p>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full bg-[#5A7BAF] text-white py-2 md:py-2.5 rounded-md hover:bg-[#4a6a9a] transition text-sm md:text-base">
                        Submit your inquiry
                    </button>
                </form>
            </div>

            <!-- Right Column: Contact Info & Map -->
            <div class="flex flex-col space-y-4 md:space-y-6 w-full">

                <!-- Contact Information Card -->
                <div class="bg-white p-4 md:p-8 rounded-lg shadow-md w-full">
                    <h3 class="text-xl md:text-2xl font-semibold mb-3 md:mb-4">Contact Information</h3>

                    <div class="space-y-3 md:space-y-4">
                        <p class="flex items-center text-sm md:text-base">
                            <img src="{{ asset('images/location.png') }}" class="w-5 h-5 md:w-6 md:h-6" alt="Location">
                            <span class="ml-2">123 University Street, City, Country</span>
                        </p>
                        <p class="flex items-center text-sm md:text-base">
                            <img src="{{ asset('images/phone.png') }}" class="w-5 h-5 md:w-6 md:h-6" alt="Phone">
                            <span class="ml-2">+123 46 78905</span>
                        </p>
                        <p class="flex items-center text-sm md:text-base">
                            <img src="{{ asset('images/Message.png') }}" class="w-5 h-5 md:w-6 md:h-6" alt="Email">
                            <span class="ml-2">contact@universitymagazine.com</span>
                        </p>
                        <p class="flex items-start text-sm md:text-base">
                            <img src="{{ asset('images/clock.png') }}" class="w-5 h-5 md:w-6 md:h-6" alt="Clock">
                            <span class="ml-2">
                                <strong>Office Hours:</strong><br>
                                Monday - Friday: 9:00 AM - 5:00 PM<br>
                                Saturday - Sunday: Closed
                            </span>
                        </p>
                    </div>
                </div>

                <!-- Google Map -->
                <div class="bg-white p-4 md:p-8 rounded-lg shadow-md w-full">
                    <h3 class="text-xl md:text-2xl font-semibold mb-3 md:mb-4">Our Location</h3>
                    <iframe class="w-full h-48 md:h-72 rounded-md"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345086165!2d144.95373631590485!3d-37.81720974202178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d5df6f6d85f%3A0x4e84c5ef31b4d0f1!2sMarvel%20Stadium!5e0!3m2!1sen!2us!4v1617654460081!5m2!1sen!2us"
                        allowfullscreen="" loading="lazy"></iframe>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>
