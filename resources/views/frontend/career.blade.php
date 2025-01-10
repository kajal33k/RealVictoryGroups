@extends('components.main')
@section('content')
     <!-- Header -->
     <header class="bg-red-600 text-white py-6 mt-44">
        <div class="container mx-auto px-6 md:px-12">
            <h1 class="text-3xl font-bold">Join Our Team</h1>
            <p class="mt-2 text-lg">Be part of a company that values innovation, collaboration, and growth.</p>
        </div>
    </header>
<!-- Introduction Section -->
<section class="py-12">
    <div class="container mx-auto px-6 md:px-12">
        <h2 class="text-2xl font-bold mb-4">Why Work With Us?</h2>
        <p class="text-gray-700 mb-6">At [Software Company], we are passionate about building world-class solutions that make a difference. Join us to work on challenging projects, learn from talented peers, and make an impact in the tech world.</p>
        <ul class="space-y-4">
            <li class="flex items-start">
                <div class="flex-shrink-0 w-8 h-8 text-red-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-full h-full">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <p class="ml-4">Competitive salaries and comprehensive benefits.</p>
            </li>
            <li class="flex items-start">
                <div class="flex-shrink-0 w-8 h-8 text-red-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-full h-full">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <p class="ml-4">Flexible work schedules and remote options.</p>
            </li>
            <li class="flex items-start">
                <div class="flex-shrink-0 w-8 h-8 text-red-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-full h-full">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <p class="ml-4">Opportunities for professional growth and development.</p>
            </li>
        </ul>
    </div>
</section>

    <!-- Open Positions Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-6 md:px-12">
            <h2 class="text-2xl font-bold mb-4">Current Openings</h2>
            <p class="text-gray-700 mb-6">Explore the roles we are currently hiring for. We’re excited to have you on board!</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Position Card -->
                <div class="p-6 border rounded-lg shadow-sm hover:shadow-lg">
                    <h3 class="text-xl font-semibold mb-2">Frontend Developer</h3>
                    <p class="text-gray-600 mb-4">Build intuitive user interfaces using modern frameworks and tools.</p>
                    <a href="#" class="text-red-600 hover:underline">View Details</a>
                </div>
                <!-- Position Card -->
                <div class="p-6 border rounded-lg shadow-sm hover:shadow-lg">
                    <h3 class="text-xl font-semibold mb-2">Backend Engineer</h3>
                    <p class="text-gray-600 mb-4">Design scalable backend systems to support our applications.</p>
                    <a href="#" class="text-red-600 hover:underline">View Details</a>
                </div>
                <!-- Position Card -->
                <div class="p-6 border rounded-lg shadow-sm hover:shadow-lg">
                    <h3 class="text-xl font-semibold mb-2">Product Manager</h3>
                    <p class="text-gray-600 mb-4">Lead product development and ensure customer satisfaction.</p>
                    <a href="#" class="text-red-600 hover:underline">View Details</a>
                </div>
            </div>
        </div>
    </section>

        <!-- Call to Action Section -->
        <section class="bg-red-600 text-white py-12">
            <div class="container mx-auto px-6 md:px-12 text-center">
                <h2 class="text-2xl font-bold mb-4">Ready to Make a Difference?</h2>
                <p class="text-lg mb-6">Join us and let’s build something amazing together. We can’t wait to see what you bring to the table.</p>
                <a href="#" class="bg-white text-red-600 px-6 py-3 font-semibold rounded-lg shadow-md hover:bg-gray-100">Apply Now</a>
            </div>
        </section>
@endsection