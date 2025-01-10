@extends('components.main')

@section('content')
    <!-- Container -->
    <div class="container mx-auto p-4 mt-44">
        <!-- Search Bar -->
        <div class="flex items-center mb-8" data-aos="fade-up" data-aos-duration="1000">
            <input type="text" placeholder="Search for software products..."
                class="w-full border border-gray-300 rounded-l-md p-3 focus:outline-none focus:ring-2 focus:ring-red-400 transition-all">
            <button class="bg-red-500 text-white p-3 px-6 rounded-r-md hover:bg-red-600 transition-all">Search</button>
        </div>

        <!-- Main Content -->
        <div class="flex flex-col lg:flex-row" data-aos="fade-up" data-aos-duration="1000">
            <!-- Sidebar -->
            <aside class="w-full lg:w-1/4 pr-6 mb-8 lg:mb-0" data-aos="fade-left" data-aos-duration="1200">
                <!-- Category Filter -->
                <div class="mb-8">
                    <h2 class="font-semibold mb-4 text-xl">Category</h2>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-600 hover:text-red-500 transition-colors">All Categories
                                (7,379)</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-red-500 transition-colors">eCommerce</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-red-500 transition-colors">WordPress</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-red-500 transition-colors">UI Templates</a>
                        </li>
                    </ul>
                </div>

                <!-- Price Filter -->
                <div class="mb-8">
                    <h2 class="font-semibold mb-4 text-xl">Price</h2>
                    <input type="range" min="3" max="10000" class="w-full mb-4">
                    <div class="flex justify-between text-gray-600">
                        <span>$3</span>
                        <span>$10,000</span>
                    </div>
                </div>
            </aside>

            <!-- Product Grid -->
            <section class="w-full lg:w-3/4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" data-aos="fade-up"
                data-aos-duration="1000">
                <!-- Product Card 1 -->
                <div class="bg-white shadow-md rounded-md overflow-hidden transform hover:scale-105 transition-transform duration-300 ease-in-out"
                    data-aos="fade-up" data-aos-duration="1000">
                    <img src="{{ asset('assets/img/attendence.jpg') }}" alt="Surge Template"
                        class="w-full h-40 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Attenence - App / SaaS/ Software</h3>
                        <p class="text-sm text-gray-600 mb-3">Multiple demos & gradient options</p>
                        <div class="flex justify-between items-center">
                            <span class="text-red-500 font-semibold">$15</span>
                            <button class="text-blue-500 hover:underline transition-all">Live Preview</button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="bg-white shadow-md rounded-md overflow-hidden transform hover:scale-105 transition-transform duration-300 ease-in-out"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <img src="{{ asset('assets/img/calling.jpg') }}" alt="AppSure" class="w-full h-40 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">AppSure - Calling Management Page</h3>
                        <p class="text-sm text-gray-600 mb-3">Perfect for product marketing</p>
                        <div class="flex justify-between items-center">
                            <span class="text-red-500 font-semibold">$4</span>
                            <button class="text-blue-500 hover:underline transition-all">Live Preview</button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="bg-white shadow-md rounded-md overflow-hidden transform hover:scale-105 transition-transform duration-300 ease-in-out"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <img src="{{ asset('assets/img/imager.jpg') }}" alt="SoftEase" class="w-full h-40 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">SoftEase - Multipurpose Theme</h3>
                        <p class="text-sm text-gray-600 mb-3">For SaaS & apps</p>
                        <div class="flex justify-between items-center">
                            <span class="text-red-500 font-semibold">$57</span>
                            <button class="text-blue-500 hover:underline transition-all">Live Preview</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
