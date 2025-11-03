<!-- Sticky Header Component -->
<header class="sticky top-0 z-50 bg-white shadow-md border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">

            <!-- 1. Left: Logo Image -->
            <div class="flex-shrink-0">
                <a href="index.html" class="text-2xl font-bold text-gray-800 flex items-center">
                    <svg class="h-8 w-8 text-brand-blue mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                    ServicePro
                </a>
            </div>

            <!-- 2. Middle: Navigation Links (Hidden on mobile) -->
            <nav id="desktop-nav" class="hidden lg:flex space-x-6 xl:space-x-10">
                <a href="#home"
                    class="text-gray-800 hover:text-brand-blue transition duration-150 font-medium py-2">Home</a>
                <a href="#services"
                    class="text-gray-800 hover:text-brand-blue transition duration-150 font-medium py-2">Services</a>
                <a href="about-us.html" target="_blank"
                    class="text-gray-800 hover:text-brand-blue transition duration-150 font-medium py-2">About
                    Us</a>
                <a href="pricing.html" target="_blank"
                    class="text-gray-800 hover:text-brand-blue transition duration-150 font-medium py-2">Pricing</a>
                <a href="contact-us.html" target="_blank"
                    class="text-gray-800 hover:text-brand-blue transition duration-150 font-medium py-2">Contact</a>
            </nav>

            <!-- 3. Right: Log In Link & Buttons -->
            <div class="flex items-center space-x-3 sm:space-x-4">

                <!-- Log In Link (Visible on all screens) -->
                <a href="about-us.html" target="_self"
                    class="text-gray-800 hover:text-brand-blue font-medium py-2 hidden sm:block">Log
                    In</a>

                <!-- Book Appointment Button (Yellow) -->
                <button
                    class="bg-brand-yellow text-gray-900 font-semibold py-2 px-4 rounded-md hover:bg-yellow-500 transition duration-300 transform hover:scale-105 hidden sm:inline-flex text-sm md:text-base">
                    Book Appointment
                </button>

                <!-- Join Now Button (Blue) -->
                <button
                    class="bg-brand-space text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-600 transition duration-300 transform hover:scale-105 hidden sm:inline-flex text-sm md:text-base">
                    Join Now
                </button>

                <!-- Mobile Menu Button (Hamburger Icon) -->
                <button id="mobile-menu-button"
                    class="lg:hidden p-2 text-gray-700 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-brand-blue rounded-lg">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu (Drops down below the header when active) -->
    <div id="mobile-menu" class="hidden lg:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 border-t border-gray-100">
            <a href="#"
                class="block px-3 py-2 rounded-lg text-base font-medium text-gray-700 hover:bg-gray-50">Home</a>
            <a href="#"
                class="block px-3 py-2 rounded-lg text-base font-medium text-gray-700 hover:bg-gray-50">Services</a>
            <a href="#"
                class="block px-3 py-2 rounded-lg text-base font-medium text-gray-700 hover:bg-gray-50">About
                Us</a>
            <a href="#"
                class="block px-3 py-2 rounded-lg text-base font-medium text-gray-700 hover:bg-gray-50">Pricing</a>
            <a href="#"
                class="block px-3 py-2 rounded-lg text-base font-medium text-gray-700 hover:bg-gray-50">Contact</a>
            <a href="#"
                class="block px-3 py-2 rounded-lg text-base font-medium text-gray-700 hover:bg-gray-50 sm:hidden">Log
                In</a>

            <div class="flex justify-center flex-wrap items-center gap-4">
                <!-- Book Appointment Button (Yellow) -->
                <button
                    class="bg-brand-yellow text-gray-900 font-semibold py-2 px-4 rounded-md hover:bg-yellow-500 transition duration-300 transform hover:scale-105 text-sm md:text-base">
                    Book Appointment
                </button>

                <!-- Join Now Button (Blue) -->
                <button
                    class="bg-brand-space text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-600 transition duration-300 transform hover:scale-105 text-sm md:text-base">
                    Join Now
                </button>
            </div>
        </div>
    </div>
</header>
