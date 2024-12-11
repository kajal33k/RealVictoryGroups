<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Walkover Careers</title>

    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">
</head>

<body class="bg-white text-gray-800">
    <!-- Navigation Bar -->
    <nav class="bg-transparent absolute w-full top-0 z-10">
        <div class="max-w-7xl mx-auto flex items-center justify-between px-4 py-4">
            <!-- Logo -->
            <a href="#" class="text-2xl font-bold">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Walkover Logo" class="w-44 h-auto">
            </a>

            <!-- Navigation Links -->
            <ul class="flex space-x-6">
                <li><a href="#" class="text-white hover:text-gray-300">HOME</a></li>
                <li><a href="#" class="text-white hover:text-gray-300">JOBS</a></li>
            </ul>
        </div>
    </nav>

    <!-- Banner Section -->
    <section class="relative">
        <img src="{{ asset('assets/img/banner.jpeg') }}" alt="Career opportunities at Walkover" class="w-full h-[600px] object-cover">

        <!-- Text Overlay -->
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center bg-black bg-opacity-60 text-white p-8 rounded-md w-full h-full flex flex-col items-center justify-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Find the Career of Your Dreams</h1>
                <h2 class="text-xl font-semibold mb-4">We are Walkover. A Journey to Innovation!</h2>
                <p class="text-lg mb-6 leading-relaxed">
                    We know that finding a meaningful and rewarding job can be a long journey. Our goal is to make that process as easy as possible for you and to create a work environment that's satisfying—one where you'll look forward to coming every day. Start your journey with us by exploring available opportunities.
                </p>
                <a href="#jobs" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-3 px-6 transition duration-200 rounded-md">
                    View Openings
                </a>
            </div>
        </div>
    </section>

    <!-- Filters and Job Listings -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 max-w-5xl mx-auto p-6">
        <!-- Filters Section -->
        <section class="bg-white p-4 shadow-md rounded-lg">
            <h2 class="text-2xl font-semibold mb-4">Filters</h2>

            <div class="space-y-4">
                <!-- Job Type Filter -->
                <div>
                    <h3 class="text-lg font-semibold mb-2">Job Type</h3>
                    <ul class="space-y-2">
                        <li>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-red-500">
                                <span class="ml-2 text-gray-700">Full time (5)</span>
                            </label>
                        </li>
                    </ul>
                </div>

                <!-- Industry Filter -->
                <div>
                    <h3 class="text-lg font-semibold mb-2">Industry</h3>
                    <ul class="space-y-2">
                        <li>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-red-500">
                                <span class="ml-2 text-gray-700">IT Services (4)</span>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-red-500">
                                <span class="ml-2 text-gray-700">Technology (1)</span>
                            </label>
                        </li>
                    </ul>
                </div>

                <!-- City Filter -->
                <div>
                    <h3 class="text-lg font-semibold mb-2">City</h3>
                    <ul class="space-y-2">
                        <li>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-red-500">
                                <span class="ml-2 text-gray-700">Indore (5)</span>
                            </label>
                        </li>
                    </ul>
                </div>

                <!-- Country Filter -->
                <div>
                    <h3 class="text-lg font-semibold mb-2">Country</h3>
                    <ul class="space-y-2">
                        <li>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-red-500">
                                <span class="ml-2 text-gray-700">India (5)</span>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Job Search and Listings Section -->
        <section class="space-y-6">
            <!-- Job Search Form -->
            <div class="bg-white p-6 shadow-md rounded-lg">
                <h1 class="text-xl font-bold mb-2">Join Us</h1>
                <p class="text-gray-600 mb-4">Current Openings</p>
                <form action="/search-jobs" method="GET" class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- Job Title Input -->
                    <div>
                        <label for="job-title" class="block text-sm font-medium text-gray-700 mb-1">What</label>
                        <input type="text" id="job-title" name="job_title" placeholder="Job title or skill"
                            class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-red-500">
                    </div>

                    <!-- Location Input -->
                    <div>
                        <label for="location" class="block text-sm font-medium text-gray-700 mb-1">Where</label>
                        <input type="text" id="location" name="location" placeholder="City, state/province, or country"
                            class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-red-500">
                    </div>

                    <!-- Search Button -->
                    <div class="flex items-end">
                        <button type="submit" class="w-full bg-red-500 hover:bg-red-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200">
                            Search
                        </button>
                    </div>
                </form>
            </div>

            <!-- Job Listings -->
            <div class="space-y-0 overflow-y-scroll max-h-[400px]">
                <!-- Job Posting Card -->
                <div class="bg-white shadow-md rounded-lg p-6 border border-gray-200">
                    <div class="flex flex-col md:flex-row md:items-center justify-between">
                        <div>
                            <h2 class="text-2xl font-semibold text-gray-800">Sales Executive</h2>
                            <p class="text-gray-600 mt-1">Indore, Madhya Pradesh, India</p>
                            <p class="text-gray-500 text-sm mt-1">Experience: 0-1 year</p>
                            <p class="text-gray-700 mt-4">
                                We are looking for a competitive and trustworthy Sales Development Executive to help us build up our business activities for our in-house product.
                            </p>
                        </div>

                        <div class="mt-6 md:mt-0 flex flex-col items-start md:items-end">
                            <span class="inline-block bg-red-500 text-white text-sm font-semibold py-1 px-3 rounded-lg">Full time</span>
                            <p class="text-gray-400 text-sm mt-2">Posted on: 05/28/2024</p>
                        </div>
                    </div>
                </div>

                  <!-- Job Posting Card -->
                  <div class="bg-white shadow-md rounded-lg p-6 border border-gray-200">
                    <div class="flex flex-col md:flex-row md:items-center justify-between">
                        <div>
                            <h2 class="text-2xl font-semibold text-gray-800">Sales Executive</h2>
                            <p class="text-gray-600 mt-1">Indore, Madhya Pradesh, India</p>
                            <p class="text-gray-500 text-sm mt-1">Experience: 0-1 year</p>
                            <p class="text-gray-700 mt-4">
                                We are looking for a competitive and trustworthy Sales Development Executive to help us build up our business activities for our in-house product.
                            </p>
                        </div>

                        <div class="mt-6 md:mt-0 flex flex-col items-start md:items-end">
                            <span class="inline-block bg-red-500 text-white text-sm font-semibold py-1 px-3 rounded-lg">Full time</span>
                            <p class="text-gray-400 text-sm mt-2">Posted on: 05/28/2024</p>
                        </div>
                    </div>
                </div>

                  <!-- Job Posting Card -->
                  <div class="bg-white shadow-md rounded-lg p-6 border border-gray-200">
                    <div class="flex flex-col md:flex-row md:items-center justify-between">
                        <div>
                            <h2 class="text-2xl font-semibold text-gray-800">Sales Executive</h2>
                            <p class="text-gray-600 mt-1">Indore, Madhya Pradesh, India</p>
                            <p class="text-gray-500 text-sm mt-1">Experience: 0-1 year</p>
                            <p class="text-gray-700 mt-4">
                                We are looking for a competitive and trustworthy Sales Development Executive to help us build up our business activities for our in-house product.
                            </p>
                        </div>

                        <div class="mt-6 md:mt-0 flex flex-col items-start md:items-end">
                            <span class="inline-block bg-red-500 text-white text-sm font-semibold py-1 px-3 rounded-lg">Full time</span>
                            <p class="text-gray-400 text-sm mt-2">Posted on: 05/28/2024</p>
                        </div>
                    </div>
                </div>

                  <!-- Job Posting Card -->
                  <div class="bg-white shadow-md rounded-lg p-6 border border-gray-200">
                    <div class="flex flex-col md:flex-row md:items-center justify-between">
                        <div>
                            <h2 class="text-2xl font-semibold text-gray-800">Sales Executive</h2>
                            <p class="text-gray-600 mt-1">Indore, Madhya Pradesh, India</p>
                            <p class="text-gray-500 text-sm mt-1">Experience: 0-1 year</p>
                            <p class="text-gray-700 mt-4">
                                We are looking for a competitive and trustworthy Sales Development Executive to help us build up our business activities for our in-house product.
                            </p>
                        </div>

                        <div class="mt-6 md:mt-0 flex flex-col items-start md:items-end">
                            <span class="inline-block bg-red-500 text-white text-sm font-semibold py-1 px-3 rounded-lg">Full time</span>
                            <p class="text-gray-400 text-sm mt-2">Posted on: 05/28/2024</p>
                        </div>
                    </div>
                </div>

                  <!-- Job Posting Card -->
                  <div class="bg-white shadow-md rounded-lg p-6 border border-gray-200">
                    <div class="flex flex-col md:flex-row md:items-center justify-between">
                        <div>
                            <h2 class="text-2xl font-semibold text-gray-800">Sales Executive</h2>
                            <p class="text-gray-600 mt-1">Indore, Madhya Pradesh, India</p>
                            <p class="text-gray-500 text-sm mt-1">Experience: 0-1 year</p>
                            <p class="text-gray-700 mt-4">
                                We are looking for a competitive and trustworthy Sales Development Executive to help us build up our business activities for our in-house product.
                            </p>
                        </div>

                        <div class="mt-6 md:mt-0 flex flex-col items-start md:items-end">
                            <span class="inline-block bg-red-500 text-white text-sm font-semibold py-1 px-3 rounded-lg">Full time</span>
                            <p class="text-gray-400 text-sm mt-2">Posted on: 05/28/2024</p>
                        </div>
                    </div>
                </div>

                  <!-- Job Posting Card -->
                  <div class="bg-white shadow-md rounded-lg p-6 border border-gray-200">
                    <div class="flex flex-col md:flex-row md:items-center justify-between">
                        <div>
                            <h2 class="text-2xl font-semibold text-gray-800">Sales Executive</h2>
                            <p class="text-gray-600 mt-1">Indore, Madhya Pradesh, India</p>
                            <p class="text-gray-500 text-sm mt-1">Experience: 0-1 year</p>
                            <p class="text-gray-700 mt-4">
                                We are looking for a competitive and trustworthy Sales Development Executive to help us build up our business activities for our in-house product.
                            </p>
                        </div>

                        <div class="mt-6 md:mt-0 flex flex-col items-start md:items-end">
                            <span class="inline-block bg-red-500 text-white text-sm font-semibold py-1 px-3 rounded-lg">Full time</span>
                            <p class="text-gray-400 text-sm mt-2">Posted on: 05/28/2024</p>
                        </div>
                    </div>
                </div>

                  <!-- Job Posting Card -->
                  <div class="bg-white shadow-md rounded-lg p-6 border border-gray-200">
                    <div class="flex flex-col md:flex-row md:items-center justify-between">
                        <div>
                            <h2 class="text-2xl font-semibold text-gray-800">Sales Executive</h2>
                            <p class="text-gray-600 mt-1">Indore, Madhya Pradesh, India</p>
                            <p class="text-gray-500 text-sm mt-1">Experience: 0-1 year</p>
                            <p class="text-gray-700 mt-4">
                                We are looking for a competitive and trustworthy Sales Development Executive to help us build up our business activities for our in-house product.
                            </p>
                        </div>

                        <div class="mt-6 md:mt-0 flex flex-col items-start md:items-end">
                            <span class="inline-block bg-red-500 text-white text-sm font-semibold py-1 px-3 rounded-lg">Full time</span>
                            <p class="text-gray-400 text-sm mt-2">Posted on: 05/28/2024</p>
                        </div>
                    </div>
                </div>

                <!-- Duplicate job cards for multiple listings -->
            </div>
        </section>
    </div>
</body>

</html>
