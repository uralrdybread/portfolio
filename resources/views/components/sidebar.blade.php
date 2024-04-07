<div x-data="{ isSideNavbarOpen: false }">
    <button @click="isSideNavbarOpen = !isSideNavbarOpen" class="md:hidden z-50 relative">
        <div class="flex flex-col justify-center transition-transform duration-300 ease-in-out"
            x-bind:class="{ 'rotate-90': isSideNavbarOpen }">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-14 h-14">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </div>
    </button>
    <!-- Side Navbar -->
    <div x-show="isSideNavbarOpen" @click.away="isSideNavbarOpen = false"
        class="md:hidden h-full fixed top-0 right-0 bg-customBlue z-40"
        x-transition:enter="transition-transform ease-out duration-300"
        x-transition:enter-start="opacity-0 transform scale-0" x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition-transform ease-in duration-300"
        x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-0"
        x-cloak>

        <!-- Navbar Content -->
        <nav class="flex flex-col items-center justify-center h-full space-y-4">
            <a href="#work" class="hover:text-white px-5">Work</a>
            <a href="#contact" class="hover:text-white px-5">Contact</a>
            <a href="#insta" class="hover:text-white">
                <div class="text-3xl text-black"><i class="bi bi-instagram"></i></div>
            </a>
            <a href="#pin" class="hover:text-white">
                <div class="text-3xl text-black"><i class="bi bi-pinterest"></i></div>
            </a>
            <a href="#x" class="hover:text-white">
                <div class="text-3xl text-black"><i class="bi bi-twitter-x"></i></div>
            </a>
        </nav>
    </div>
</div>
