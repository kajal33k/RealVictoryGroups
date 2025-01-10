@extends('components.main')
@section('content')
    <!-- First Section -->
    <section class="grid grid-cols-1 lg:grid-cols-2 gap-8 py-16 px-6 lg:px-16 lg:mt-44 mt-24">
        <div class="space-y-6" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="text-xl sm:text-2xl font-semibold text-gray-800 poppins-medium">
                We are a team of Developers, Designers, Innovators...
            </h2>
            <h1 class="text-4xl sm:text-5xl poppins-serif text-gray-900">We are Walkover.</h1>
            <h2 class="text-xl sm:text-2xl poppins-extralight text-gray-700">A journey to innovation!</h2>
            <div class="mt-2">
                <a href="{{ route('frontend.join') }}">
                    <button
                        class="bg-red-600 text-white px-6 py-3 rounded-lg text-lg hover:bg-black transition-colors duration-300 poppins-thin">Join
                        us now</button>
                </a>
            </div>
        </div>
        <div class="flex justify-center items-center" data-aos="fade-left" data-aos-duration="1000">
            <img src="{{ asset('assets/img/innovation.gif') }}" alt="Innovation" class="w-full h-auto max-w-md">
        </div>
    </section>

    <!-- Mission -->
    <section class="grid grid-cols-1 lg:grid-cols-2 gap-8 py-16 px-6 lg:px-16 mt-4">
        <div class="flex justify-center items-center" data-aos="fade-right" data-aos-duration="1000">
            <img src="{{ asset('assets/img/growth1.gif') }}" alt="Innovation" class="w-full h-auto max-w-md">
        </div>
        <div class="space-y-6" data-aos="fade-left" data-aos-duration="1000">
            <h2 class="text-4xl sm:text-5xl poppins-serif text-gray-900">Building a better Business!</h2>
            <p class="text-xl sm:text-2xl poppins-light text-gray-900">
                On a mission to help start-ups in their vision of making the world a better place.
            </p>
            <button
                class="bg-red-600 text-white px-6 py-3 rounded-lg text-lg hover:bg-black transition-colors duration-300 poppins-thin">Join
                us now</button>
        </div>
    </section>
<!-- Experiments Section -->
<section class="py-16 px-6 lg:px-16 mt-4">
    <div class="text-center mb-12" data-aos="zoom-in" data-aos-duration="1000">
        <h1 class="text-3xl font-bold text-gray-900">Our Experiments!</h1>
        <p class="text-xl text-gray-700 mt-4 max-w-3xl mx-auto font-light">
            We believe in simplicity; so we design and build impactful, user-friendly IT products. We majorly stand on the three pillars—DESIGN, CULTURE & TECHNOLOGY.
        </p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Experiment 1 -->
        <div class="bg-white p-4 rounded-lg shadow-lg flex flex-col items-center text-center" data-aos="flip-left" data-aos-duration="1000">
            <img src="assets/img/msg91_logo.svg" alt="MSG91" class="w-24 h-24 object-contain">
            <p class="text-gray-700 text-sm mt-4 font-medium">Cloud communication platform delivering 1 SMS every month.</p>
            <p class="text-gray-600 text-sm mt-2 font-mono">PHP, MySQL, MongoDB, AWS and Python.</p>
            <button class="mt-4 border border-red-500 text-red-800 px-4 py-2 rounded-lg text-sm hover:bg-red-500 hover:text-white transition duration-300 font-thin">
                Know more
            </button>
        </div>
        <!-- Experiment 2 -->
        <div class="bg-white p-4 rounded-lg shadow-lg flex flex-col items-center text-center" data-aos="flip-up" data-aos-duration="1000">
            <img src="assets/img/socket_logo.svg" alt="Socket" class="w-24 h-24 object-contain">
            <p class="text-gray-700 text-sm mt-4 font-medium">Third-party integrations made super easy.</p>
            <p class="text-gray-600 text-sm mt-2 font-mono">ROR, Angular, ES6, pgSQL, and Node. 5000 API hits free/month.</p>
            <button class="mt-4 border border-red-500 text-red-800 px-4 py-2 rounded-lg text-sm hover:bg-red-500 hover:text-white transition duration-300 font-thin">
                Know more
            </button>
        </div>
        <!-- Experiment 3 -->
        <div class="bg-white p-4 rounded-lg shadow-lg flex flex-col items-center text-center" data-aos="flip-right" data-aos-duration="1000">
            <img src="assets/img/space_logo.svg" alt="Space" class="w-24 h-24 object-contain">
            <p class="text-gray-700 text-sm mt-4 font-medium">Team collaboration app with best facilities.</p>
            <p class="text-gray-600 text-sm mt-2 font-mono">PHP, MySQL, MongoDB, AWS, NGINX, MERN, Angular and Python.</p>
            <button class="mt-4 border border-red-500 text-red-800 px-4 py-2 rounded-lg text-sm hover:bg-red-500 hover:text-white transition duration-300 font-thin">
                Know more
            </button>
        </div>
    </div>
</section>

    <!-- SUCESS AND LEARNING -->
    <section class="grid grid-cols-1 lg:grid-cols-2 gap-8 py-16 px-6 lg:px-16 mt-4">
        <div class="flex justify-center items-center" data-aos="fade-right" data-aos-duration="1000">
            <img src="{{ asset('assets/img/simple_culture_image.svg') }}" alt="Innovation" class="w-full h-auto max-w-md">
        </div>
        <div class="space-y-6" data-aos="fade-left" data-aos-duration="1000">
            <h2 class="text-4xl sm:text-5xl poppins-regular text-gray-900">Be it a Success or a Learning, we simply Walkover
                :)</h2>
            <p class="text-xl sm:text-2xl poppins-medium text-gray-900">
                A team of 150+ Spartans working remotely, we put people first, pursue passions, embrace failures, conduct
                responsibly & strive to be a force of change. And, yes, we choose to be HAPPY, HEARTY & HEALTHY!
            </p>
            <button
                class="bg-red-600 text-white px-6 py-3 rounded-lg text-lg poppins-thin hover:bg-black transition-colors duration-300">Join
                us now</button>
        </div>
    </section>

    <!-- RIGHT PATH -->
    <section class="py-16 px-6 lg:px-16">
        <div class="max-w-screen-xl mx-auto">

            <!-- First Section -->
            <article class="mb-12" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="text-3xl poppins-serif text-gray-900 mb-4">You are at the right place</h1>
                <p class="text-lg text-gray-700 leading-relaxed poppins-light">
                    We believe in hiring passionate humans who can help in making other people’s lives better—we are
                    currently hiring for remote working designing and software jobs. If that sounds potential to you, then
                    get ready to innovate with one of the best IT startups.
                </p>
            </article>

            <!-- Second Section -->
            <article class="mb-12" data-aos="fade-right" data-aos-duration="1000">
                <h3 class="text-2xl poppins-serif text-gray-900 mb-4 ">Sane hours to balance work and passion</h3>
                <p class="text-lg text-gray-700 leading-relaxed poppins-thin">
                    Flexibility while we work comes ahead of everything. We work immensely hard, but we also understand that
                    to come out with their best version, our team needs their space.
                </p>
            </article>

            <!-- Third Section -->
            <article class="mb-12" data-aos="fade-left" data-aos-duration="1000">
                <h2 class="text-2xl poppins-serif text-gray-900 mb-4">The way you do anything is the way you do everything.
                </h2>
                <p class="text-lg text-gray-700 leading-relaxed mb-4 poppins-thin">
                    How you work on any experience in your life or even your daily tasks, is how you probably handle all of
                    it. We try and do it all with a smile :)
                </p>
                <p class="text-lg text-gray-700 leading-relaxed mb-6 poppins-light">
                    What’s most rewarding for us is to collaborate with smart, intelligent, witty people across any part of
                    the world.
                </p>
                <button
                    class="bg-red-600 poppins-thin hover:bg-black text-white px-6 py-3 rounded-lg text-lg transition-colors duration-300">
                    Apply Now
                </button>
            </article>

            
            <!-- Fourth Section: Video -->
            <article class="mt-16" data-aos="zoom-in" data-aos-duration="1000">
                <p class="text-xl poppins-semibold text-gray-900 mb-4">Freedom + Responsibility at Walkover</p>
                <div class="aspect-w-16 ">
                    <iframe width="560" height="515"
                        src="https://www.youtube.com/embed/iAJn9pIyJws?si=fgqoebydeKmyejz4" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="w-full h-full"></iframe>
                </div>
            </article>
        </div>
    </section>
@endsection
