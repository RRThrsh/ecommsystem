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
        <!-- TODO:: Add a navigation bar or header content here -->
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- TODO:: Add a footer content here -->
    </footer>
</body>
</html>