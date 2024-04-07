<x-layout>


    <header class="py-10 z-50 px-3 md:px-10 fixed top-0 left-0 bg-customBlue w-full">
        <div class="max-w-6xl mx-auto">
            <div class="flex justify-between">
                <div class="left text-3xl font-bold flex items-center">
                    Marsellus Wallace
                    <!-- Hidden badge on small screens -->
                    <span
                        class="mx-3 hidden md:inline-flex items-center rounded-md bg-gradient-to-br from-gray-100 to-gray-300 px-3 py-1 text-xs font-medium text-gray-600 shadow-md border border-gray-200">AI
                        Artist</span>
                </div>
                <!-- Hamburger Menu Icon -->
                <nav class="right space-x-5 items-center flex z-50">
                    <a href="#work" class="hover:underline hidden md:flex">Work</a>
                    <a href="#contact" class="hover:underline hidden md:flex">Contact</a>
                    <a href="#insta">
                        <div class="text-3xl"><i class="bi bi-instagram hidden md:flex"></i></div>
                    </a>
                    <a href="#pin">
                        <div class="text-3xl"><i class="bi bi-pinterest hidden md:flex"></i></div>
                    </a>
                    <a href="#x">
                        <div class="text-3xl"><i class="bi bi-twitter-x hidden md:flex"></i></div>
                    </a>
                    <div x-data="{ isSideNavbarOpen: false }">
                        <button @click="isSideNavbarOpen = !isSideNavbarOpen" class="md:hidden z-50 relative">
                            <div class="flex flex-col justify-center transition-transform duration-300 ease-in-out"
                                x-bind:class="{ 'rotate-90': isSideNavbarOpen }">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-14 h-14">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                            </div>
                        </button>
                        <!-- Side Navbar -->
                        <div x-show="isSideNavbarOpen" @click.away="isSideNavbarOpen = false"
                            class="md:hidden h-full fixed top-0 right-0 bg-customBlue z-40"
                            x-transition:enter="transition-transform ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform scale-0"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition-transform ease-in duration-300"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-0" x-cloak>

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
                </nav>
            </div>
        </div>
    </header>





    {{-- Begin grid --}}
    <div class=" bg-customBlue pt-24">
        <div class="max-w-6xl mx-auto p-3 md:p-10 pt-24">
            <ul class="grid grid-cols-2 gap-4 sm:grid-cols-2 md:grid-cols-3 md:grid-rows-7">
                <li
                    class="bg-white rounded-lg shadow-xl col-span-2 md:col-span-2 md:row-span-2 relative overflow-hidden">
                    <img class="object-cover w-full h-full" src="images/nucleardeckchairs54.png"
                        alt="nuclear explosion being watched by 1950s">
                    <p
                        class="absolute inset-0 flex justify-center items-center text-4xl font-bold tracking-wide bg-white bg-opacity-10 opacity-0 hover:opacity-100 cursor-default hover:cursor-pointer transition-all duration-200 ease-in-out">
                        View Project</p>
                </li>

                <li
                    class="bg-white rounded-lg shadow-xl col-span-2 md:col-span-1 md:row-span-1 relative overflow-hidden">
                    <img class="object-cover w-full h-full" src="images/sstandsfor54.png"
                        alt="Superman looking at pieces of krypton">
                    <p
                        class="absolute inset-0 flex justify-center items-center text-4xl font-bold tracking-wide bg-white bg-opacity-10 opacity-0 hover:opacity-100 cursor-default hover:cursor-pointer transition-all duration-200 ease-in-out">
                        View Project</p>
                </li>

                <li
                    class="bg-white rounded-lg shadow-xl col-span-2 md:col-span-1 md:row-span-2 relative overflow-hidden">
                    <img class="object-cover w-full h-full" src="images/snowysteps23.png"
                        alt="man dying on snowy steps">
                    <p
                        class="absolute inset-0 flex justify-center items-center text-4xl font-bold text-white tracking-wide bg-white bg-opacity-10 opacity-0 hover:opacity-100 cursor-default hover:cursor-pointer transition-all duration-200 ease-in-out">
                        View Project</p>
                </li>

                <li class="bg-white rounded-lg shadow-xl relative overflow-hidden">
                    <img class="object-cover w-full h-full" src="images/greenlantern47.png"
                        alt="mideval green lantern ring">
                    <p
                        class="absolute inset-0 flex justify-center items-center text-4xl font-bold text-white tracking-wide bg-white bg-opacity-10 opacity-0 hover:opacity-100 cursor-default hover:cursor-pointer transition-all duration-200 ease-in-out">
                        View Project</p>
                </li>

                <li class="bg-white rounded-lg shadow-xl relative overflow-hidden">
                    <img class="object-cover w-full h-full" src="images/toshiro11.webp" alt="art inspired by toshiro">
                    <p
                        class="absolute inset-0 flex justify-center items-center text-4xl font-bold text-white tracking-wide bg-white bg-opacity-10 opacity-0 hover:opacity-100 cursor-default hover:cursor-pointer transition-all duration-200 ease-in-out">
                        View Project</p>
                </li>

                <li
                    class="bg-white rounded-lg shadow-xl col-span-2 md:col-span-1 md:row-span-2 relative overflow-hidden">
                    <img class="object-cover w-full h-full" src="images/espresso45.png"
                        alt="espresso with coffee splashing and coffee beans">
                    <p
                        class="absolute inset-0 flex justify-center items-center text-4xl font-bold tracking-wide bg-white bg-opacity-10 opacity-0 hover:opacity-100 cursor-default hover:cursor-pointer transition-all duration-200 ease-in-out">
                        View Project</p>
                </li>

                <li
                    class="bg-white rounded-lg shadow-xl col-span-2 md:col-span-2 md:row-span-2 relative overflow-hidden">
                    <img class="object-cover w-full h-full" src="images/bomber80s11.webp"
                        alt="1980s asian girl with bomber jacket">
                    <p
                        class="absolute inset-0 flex justify-center items-center text-4xl font-bold text-white tracking-wide bg-white bg-opacity-10 opacity-0 hover:opacity-100 cursor-default hover:cursor-pointer transition-all duration-200 ease-in-out">
                        View Project</p>
                </li>

                <li
                    class="bg-white rounded-lg shadow-xl col-span-2 md:col-span-2 md:row-span-2 relative overflow-hidden">
                    <img class="object-cover w-full h-full" src="images/echosofkrypton74.png"
                        alt="superman observing the remenants of krypton">
                    <p
                        class="absolute inset-0 flex justify-center items-center text-4xl font-bold tracking-wide bg-white bg-opacity-10 opacity-0 hover:opacity-100 cursor-default hover:cursor-pointer transition-all duration-200 ease-in-out">
                        View Project</p>
                </li>

                <li
                    class="bg-white rounded-lg shadow-xl col-span-2 md:col-span-1 md:row-span-2 relative overflow-hidden">
                    <img class="object-cover w-full h-full" src="images/adamnjensen45.png"
                        alt="adam jensen concept art">
                    <p
                        class="absolute inset-0 flex justify-center items-center text-4xl font-bold text-white tracking-wide bg-white bg-opacity-10 opacity-0 hover:opacity-100 cursor-default hover:cursor-pointer transition-all duration-200 ease-in-out">
                        View Project</p>
                </li>

            </ul>

            <div class="text-center my-20">
                <footer>
                    Designed and built by Douglas for the purpose of practicing Tailwind CSS
                </footer>
            </div>
        </div>
    </div>


</x-layout>
