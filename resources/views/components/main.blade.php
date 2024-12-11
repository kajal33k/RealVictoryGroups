<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Walkover</title>

    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS via CDN (can be replaced with Vite if you're using a build process) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Vite directive to include compiled CSS, replace if necessary with your build system -->
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen bg-[#F3F6E8] text-gray-900">

    <!-- Include the header component -->
    @include('components.header')

    <!-- Main content section -->
    <main class="flex-grow lg:mx-24">
        @yield('content')
    </main>

    <!-- Include the footer component -->
    @include('components.footer')

</body>
</html>
