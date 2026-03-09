<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header>
        <!-- Navbar -->
        <nav class="flex justify-between items-center px-6 md:px-40 pt-6 pb-4">

            <!-- Logo -->
            <h1 class="text-3xl md:text-4xl font-serif font-bold">ThinkPad</h1>

            <!-- Desktop Menu -->
            <ul class="hidden md:flex gap-8 text-gray-500 text-xl font-medium font-serif">
                <li class="hover:text-gray-900 hover:underline-offset-8 hover:underline"><a href="{{ url('welcome') }}">Home</a></li>
                <li class="hover:text-gray-900 hover:underline-offset-8 hover:underline"><a href="{{ url('/pages/about') }}">About</a></li>
                <li class="hover:text-gray-900 hover:underline-offset-8 hover:underline"><a href="{{ url('/pages/contact') }}">Contact</a></li>
            </ul>

            <!-- Hamburger Button -->
            <button id="menu-btn" class="md:hidden text-3xl">
                ☰
            </button>

        </nav>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden flex flex-col items-start text-gray-700 text-xl font-serif bg-gray-100">
            <a class="hover:text-black h-full w-full hover:bg-gray-300 py-4 px-10" href="{{ url('welcome') }}" class="py-2">Home</a>
            <a class="hover:text-black h-full w-full hover:bg-gray-300 py-4 px-10" href="{{ url('/pages/about') }}" class="py-2">About</a>
            <a class="hover:text-black h-full w-full hover:bg-gray-300 py-4 px-10" href="{{ url('/pages/contact') }}" class="py-2">Contact</a>
        </div>

        <!-- Horizontal Line -->
        <hr class="border-gray-300">

        <!-- Humburger Button Script -->
        <script>
            const menuBtn = document.getElementById("menu-btn");
            const mobileMenu = document.getElementById("mobile-menu");
        
            menuBtn.addEventListener("click", () => {
                mobileMenu.classList.toggle("hidden");
            });
        </script>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="h-96 bg-gray-800 mt-10 justify-center">
        <!-- Footer Content -->
        <div class="text-white">
            
            <div class="container mx-auto text-center pt-4 text-lg font-serif">
                <p>&copy; {{ date('Y') }} ThinkPad. All rights reserved.</p>
            </div>

            <div class="container mx-auto text-center pb-4 flex justify-between mt-8 items-center text-xl font-serif">
                <!-- left -->
                <div class="flex flex-col justify-center w-full gap-2">
                    <a href="#" class="text-gray-500 hover:text-white mx-2">About Us</a>
                    <a href="#" class="text-gray-500 hover:text-white mx-2">Careers</a>
                    <a href="#" class="text-gray-500 hover:text-white mx-2">Press</a>
                    <a href="#" class="text-gray-500 hover:text-white mx-2">Blog</a>
                </div>

                <!-- right -->
                <div class="flex flex-col justify-center w-full gap-2">
                    <a href="#" class="text-gray-500 hover:text-white mx-2">Privacy Policy</a>
                    <a href="#" class="text-gray-500 hover:text-white mx-2">Terms of Service</a>
                    <a href="#" class="text-gray-500 hover:text-white mx-2">Contact Us</a>
                    <a href="#" class="text-gray-500 hover:text-white mx-2">FAQ</a>
                    <a href="#" class="text-gray-500 hover:text-white mx-2">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>