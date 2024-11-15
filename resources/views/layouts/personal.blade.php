<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="There is the description" />
    <meta name="keywords" content="CRUD, Laravel, Modularization">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200" >
    <img id="background" class="absolute -left-100 top-900 max-w-[00px]" src="https://wallpapers.com/images/hd/disco-background-pc5wq00rl0eq7o1r.jpg" alt="Laravel background" />

    <!-- Navbar -->
    <nav class="bg-white dark:bg-gray-800 shadow-lg">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold text-gray-800 dark:text-white hover:text-blue-600 dark:hover:text-blue-400">
                Clinication
            </a>
            <div class="hidden md:flex items-center space-x-4">
                {{-- <a href="{{ route('roles.index') }}" class="px-4 py-2 rounded-lg text-gray-800 dark:text-gray-200 hover:bg-blue-600 hover:text-white dark:hover:bg-blue-500 transition duration-300">
                    Medics
                </a>
                <a href="{{ route('roles.index') }}" class="px-4 py-2 rounded-lg text-gray-800 dark:text-gray-200 hover:bg-blue-600 hover:text-white dark:hover:bg-blue-500 transition duration-300">
                    Patients
                </a> --}}
            </div>
            <div class="md:hidden flex items-center">
                <button id="menu-toggle" class="text-gray-800 dark:text-gray-200 focus:outline-none">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="hidden md:hidden px-6 py-4 bg-gray-50 dark:bg-gray-800">
            <ul class="space-y-2">
                {{-- <li>
                    <a href="{{ route('roles.index') }}" class="block px-4 py-2 rounded-lg text-gray-800 dark:text-gray-200 hover:bg-blue-600 hover:text-white dark:hover:bg-blue-500 transition duration-300">
                        Roles
                    </a>
                </li>
                <li>
                    <a href="{{ route('roles.index') }}" class="block px-4 py-2 rounded-lg text-gray-800 dark:text-gray-200 hover:bg-blue-600 hover:text-white dark:hover:bg-blue-500 transition duration-300">
                        Another Link
                    </a> --}}
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main content -->
    <main class="flex-grow mt-10">
        <div class="container mx-auto px-4 sm:px-6">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-400 py-8">
        <div class="container mx-auto text-center space-y-4">
            <p class="text-sm">© {{ date('Y') }} G4L4K4S. All rights reserved.</p>
            <div class="flex justify-center space-x-6">
                <a href="#" class="hover:text-blue-400 transition duration-300">
                    <!-- Twitter Icon -->
                    <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M22.54 5.46a5.44 5.44 0 01-1.57.43 2.75 2.75 0 001.21-1.5 5.41 5.41 0 01-1.73.66 2.72 2.72 0 00-4.63 2.48 7.73 7.73 0 01-5.62-2.85A2.72 2.72 0 007 8.45c0 .21 0 .42.03.63a7.72 7.72 0 01-5.6-2.84 2.72 2.72 0 00-.37 1.37 2.72 2.72 0 001.21 2.27 2.72 2.72 0 01-1.23-.34v.03c0 1.29.91 2.36 2.11 2.6a2.72 2.72 0 01-1.23.05 2.72 2.72 0 002.55 1.9A5.47 5.47 0 012 18.54a7.7 7.7 0 004.18 1.22A7.72 7.72 0 0015.7 8.77c0-.12-.01-.25-.02-.37a5.56 5.56 0 001.37-1.42z"/>
                    </svg>
                </a>
                <a href="#" class="hover:text-blue-400 transition duration-300">
                    <!-- Facebook Icon -->
                    <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M9.004 3c-3.867 0-7 3.133-7 7 0 3.526 2.61 6.436 6 6.93v3.57h-2.5v1.5h2.5v4.5h2v-4.5h2.5v-1.5h-2.5v-3.57c3.39-.494 6-3.404 6-6.93 0-3.867-3.133-7-7-7zm0 2c2.762 0 5 2.238 5 5s-2.238 5-5 5-5-2.238-5-5 2.238-5 5-5zm7 7c-.552 0-1 .448-1 1s.448 1 1 1h1v1h-1c-1.104 0-2 .896-2 2v1h-1v-4h1c.552 0 1-.448 1-1s-.448-1-1-1h-1v-1h1c1.104 0 2-.896 2-2v-1h1v4h-1zm2 7h2v2h-2z"/>
                    </svg>
                </a>
                <a href="#" class="hover:text-blue-400 transition duration-300">
                    <!-- LinkedIn Icon -->
                    <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M12.04 3c-.02 0-.04 0-.06 0-5.42 0-9.98 4.56-9.98 9.98s4.56 9.98 9.98 9.98 9.98-4.56 9.98-9.98c0-5.43-4.55-9.98-9.98-9.98zm3.9 15.98h-1.32v-5.5c0-.83-.18-1.68-1.09-1.68-1.09 0-1.3.94-1.3 1.65v5.53h-1.32v-8.82h1.29v1.21h.02c.22-.4.77-1.1 1.58-1.1 1.7 0 2.02 1.12 2.02 2.58v6.13zm-6.36 0h-1.32v-8.82h1.32v8.82zm-.67-10.17c-.42 0-.76-.34-.76-.76s.34-.76.76-.76.76.34.76.76-.34.76-.76.76z"/>
                    </svg>
                </a>
            </div>
        </div>
    </footer>

    <!-- Script to toggle the mobile menu -->
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function () {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
