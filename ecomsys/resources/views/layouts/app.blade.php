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
        <!-- TODO:: Design the navigation bar -->
        <nav class="flex justify-between items-center p-4 text-xl font-semibold">
            <ul>
                <li>
                    <h2>logo</h2>
                </li>
            </ul>
            <ul class="flex justify-between items-center gap-4">
                <li><a href="{{ url('welcome') }}">Home</a></li>
                <li><a href="{{ url('/pages/about') }}">About</a></li>
                <li><a href="{{ url('/pages/contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- TODO:: Add a footer content here -->
    </footer>
</body>
</html>