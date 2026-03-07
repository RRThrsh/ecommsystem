<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans">
    <header>
        <!-- TODO:: Add Humburger for mobile -->
        <nav class="flex justify-between items-center px-40 py-6">
            <ul>
                <li>
                    <h1 class="text-4xl font-serif font-bold">ThinkPad</h1>
                </li>
            </ul>
            <ul class="flex justify-between items-center gap-8 text-gray-500 text-xl font-medium font-serif">
                <li class="hover:text-gray-900 hover:underline-offset-8 hover:underline"><a href="{{ url('welcome') }}">Home</a></li>
                <li class="hover:text-gray-900 hover:underline-offset-8 hover:underline"><a href="{{ url('/pages/about') }}">About</a></li>
                <li class="hover:text-gray-900 hover:underline-offset-8 hover:underline"><a href="{{ url('/pages/contact') }}">Contact</a></li>
            </ul>
        </nav>
        <hr class="my-2 border-gray-300">
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- TODO:: Add a footer content here -->
    </footer>
</body>
</html>