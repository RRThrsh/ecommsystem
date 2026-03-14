<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    @extends('layouts.app')

    @section('title', 'Welcome Page')

    @section('content')

    <!-- About Us Section -->
    <section class="py-16">
        <div class="container mx-auto px-6 md:px-40">
            <h1 class="text-3xl md:text-4xl font-serif font-bold text-center mb-12">
                About Us
            </h1>

            <!-- Introduction -->
            <div class="mb-10">
                <h2 class="text-2xl font-semibold mb-3">Who We Are</h2>
                <p class="text-lg text-gray-700 leading-relaxed">
                    This website provides information, reviews, and comparisons of ThinkPad laptops 
                    to help users choose the best device for work, study, and development.
                </p>
            </div>

            <!-- Mission -->
            <div class="mb-10">
                <h2 class="text-2xl font-semibold mb-3">Our Mission</h2>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Our mission is to provide clear and reliable information about ThinkPad laptops 
                    for developers, professionals, and students who want durable and productive machines.
                </p>
            </div>

            <!-- Project Purpose -->
            <div class="mb-10">
                <h2 class="text-2xl font-semibold mb-3">About This Project</h2>
                <p class="text-lg text-gray-700 leading-relaxed">
                    This website was created as part of a Laravel learning project to explore 
                    web development while showcasing the features, advantages, and comparisons 
                    of ThinkPad laptops.
                </p>
            </div>

            <!-- Developer -->
            <div class="mb-10">
                <h2 class="text-2xl font-semibold mb-3">Developer</h2>
                <p class="text-lg text-gray-700 leading-relaxed">
                    The website was developed by a student learning Laravel and modern web development.
                </p>
            </div>

            <!-- Contact -->
            <div>
                <h2 class="text-2xl font-semibold mb-3">Contact</h2>
                <p class="text-lg text-gray-700 leading-relaxed">
                    If you have questions or suggestions, feel free to contact us through the contact page.
                </p>
            </div>
        </div>
    </section>


    @endsection
</body>
</html>