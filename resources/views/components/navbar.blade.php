<nav class="bg-[#0B1A34] text-white py-4 px-6 flex justify-between items-center relative">
    <!-- Left Side: Logo -->
    <div class="flex items-center">
        <a href="{{ route('home') }}">
            <img src="{{ asset('img/logo.jpeg') }}" alt="Logo" class="h-10">
        </a>
    </div>

    <!-- Hamburger Menu Button (Mobile Only) -->
    <button id="mobile-menu-button" class="md:hidden focus:outline-none relative z-50">
        <svg id="hamburger-icon" class="w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
        <svg id="close-icon" class="w-6 h-6 hidden transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>

    <!-- Center: Navigation Links (Hidden on Mobile) -->
    <div class="hidden md:flex space-x-6 text-sm">
        <a href="#" class="hover:text-gray-300">About us</a>
        <a href="#" class="hover:text-gray-300">Donor Basics</a>
        <a href="#" class="hover:text-gray-300">FAQ</a>
        <a href="/volunteer-form" class="hover:text-gray-300">Volunteers</a>
        <a href="#" class="hover:text-gray-300">Support</a>
        <a href="/contact-us" class="hover:text-gray-300">Contact us</a>
    </div>

    <!-- Right Side: Buttons (Hidden on Mobile) -->
    <div class="hidden md:flex items-center space-x-4">
        <!-- <a href="#" class="text-sm hover:text-gray-300">Sign in/Create an account</a> -->
        <!-- <a href="#" class="text-sm hover:text-gray-300">Nonprofit Resources</a> -->
        <a href="#" class="bg-[#E63946] text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-[#C82C3C]">
            Apply for a Grant
        </a>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="absolute top-16 left-0 w-full bg-[#0B1A34] z-40 py-4 px-6 shadow-lg transform scale-y-0 origin-top transition-transform duration-300 hidden">
        <div class="flex flex-col space-y-4">
            <a href="#" class="hover:text-gray-300">About us</a>
            <a href="#" class="hover:text-gray-300">Donor Basics</a>
            <a href="#" class="hover:text-gray-300">FAQ</a>
            <a href="#" class="hover:text-gray-300">Volunteers</a>
            <a href="#" class="hover:text-gray-300">Support</a>
            <a href="#" class="hover:text-gray-300">Contact us</a>
            <div class="border-t border-gray-700 pt-4 mt-2">
                <!-- <a href="#" class="block py-2 hover:text-gray-300">Sign in/Create an account</a> -->
                <!-- <a href="#" class="block py-2 hover:text-gray-300">Nonprofit Resources</a> -->
                <a href="#" class="block bg-[#E63946] text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-[#C82C3C] mt-2 text-center">
                    Apply for a Grant
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const menuButton = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');
        const hamburgerIcon = document.getElementById('hamburger-icon');
        const closeIcon = document.getElementById('close-icon');

        menuButton.addEventListener('click', function (event) {
            event.stopPropagation();
            menu.classList.toggle('hidden');
            menu.classList.toggle('scale-y-0');

            // Toggle icons
            hamburgerIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });

        document.addEventListener('click', function (event) {
            if (!menu.contains(event.target) && event.target !== menuButton) {
                menu.classList.add('hidden');
                menu.classList.add('scale-y-0');

                // Reset to hamburger icon
                hamburgerIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            }
        });
    });
</script>
