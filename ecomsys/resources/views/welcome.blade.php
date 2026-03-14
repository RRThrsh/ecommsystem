<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    @extends('layouts.app')

    @section('title', 'Welcome Page')

    @section('content')

    <!-- Hero page -->
    <section class="h-screen flex items-center justify-center" style="background-image: url('{{ asset('img/thinkpadlaptop.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="container mx-auto px-6 md:px-40 py-10">
            <div class="text-right">
                <h1 class="text-4xl md:text-6xl font-serif font-bold text-white mb-6">Welcome to ThinkPad</h1>
                <p class="text-xl md:text-2xl text-gray-50 mb-8">Your go-to platform for insightful articles and resources.</p>
                <a href="{{ url('/pages/about') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded">Learn More</a>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="bg-gray-100 py-10">
        <div class="container mx-auto px-6 md:px-40 py-10">
            <h2 class="text-3xl md:text-4xl font-serif font-bold text-center mb-10">Key Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold mb-4">Comprehensive Reviews</h3>
                    <p class="text-gray-700">In-depth reviews of the latest ThinkPad models, covering performance, design, and usability.</p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold mb-4">Expert Analysis</h3>
                    <p class="text-gray-700">Expert insights and analysis on the latest trends in the laptop industry.</p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold mb-4">User Guides</h3>
                    <p class="text-gray-700">Comprehensive user guides to help you get the most out of your ThinkPad.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- pros and cons section -->
    <section class="bg-gray-100 py-10">
        <div class="container mx-auto px-6 md:px-40 py-10">
            <h2 class="text-3xl md:text-4xl font-serif font-bold text-center mb-10">Pros and Cons</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Pros -->
                <div class="bg-green-200 rounded-lg shadow-md p-6 font-serif">
                    <h3 class="text-xl font-semibold mb-4">Pros</h3>
                    <ul class="list-disc list-inside text-gray-800">
                        <div class="bg-green-400 rounded-lg shadow-md p-2 m-3">
                            <li class="text-lg font-semibold">Excellent build quality</li>
                            <p>– Many models use magnesium or carbon fiber and pass military-grade durability tests.</p>
                        </div>

                        <div class="bg-green-400 rounded-lg shadow-md p-2 m-3">
                            <li class="text-lg font-semibold">Legendary keyboard</li>
                            <p>– One of the best laptop keyboards for developers, writers, and heavy typers.</p>
                        </div>

                        <div class="bg-green-400 rounded-lg shadow-md p-2 m-3">
                            <li class="text-lg font-semibold">Great reliability</li>
                            <p>– ThinkPads are known for long lifespan and stable performance.</p>
                        </div>

                        <div class="bg-green-400 rounded-lg shadow-md p-2 m-3">
                            <li class="text-lg font-semibold">Business-class security features</li>
                            <p>– Options like fingerprint reader, TPM, and privacy shutter.</p>
                        </div>

                        <div class="bg-green-400 rounded-lg shadow-md p-2 m-3">
                            <li class="text-lg font-semibold">Linux-friendly</li>
                            <p>– Many developers prefer ThinkPads because Linux runs very well on them.</p>
                        </div>

                        <div class="bg-green-400 rounded-lg shadow-md p-2 m-3">
                            <li class="text-lg font-semibold">Upgradeable components (on some models)</li>
                            <p>– RAM and SSD upgrades are possible in certain series.</p>
                        </div>

                        <div class="bg-green-400 rounded-lg shadow-md p-2 m-3">
                            <li class="text-lg font-semibold">TrackPoint navigation</li>    
                            <p>– The red TrackPoint in the keyboard allows precise cursor control without using the touchpad.</p>
                        </div>
                    </ul>
                </div>
                <!-- Cons -->
                <div class="bg-red-200 rounded-lg shadow-md p-6 font-serif">
                    <h3 class="text-xl font-semibold mb-4">Cons</h3>
                    <ul class="list-disc list-inside text-gray-800">
                        <div class="bg-red-400 rounded-lg shadow-md p-2 m-3">
                            <li class="text-lg font-semibold">Higher price compared to similar laptops</li>
                            <p>– Business-class hardware often costs more.</p>
                        </div>

                        <div class="bg-red-400 rounded-lg shadow-md p-2 m-3">
                            <li class="text-lg font-semibold">Design can look plain or outdated.</li>
                            <p>– The classic black design is not as flashy as other brands</p>
                        </div>

                        <div class="bg-red-400 rounded-lg shadow-md p-2 m-3">
                            <li class="text-lg font-semibold">Limited gaming capability</li>
                            <p>– Most models focus on productivity rather than gaming GPUs.</p>
                        </div>

                        <div class="bg-red-400 rounded-lg shadow-md p-2 m-3">
                            <li class="text-lg font-semibold">Some models are bulky</li>
                            <p>– Especially older or workstation models like the P-series.</p>
                        </div>

                        <div class="bg-red-400 rounded-lg shadow-md p-2 m-3">
                            <li class="text-lg font-semibold">Speakers and display may be average on certain models compared to premium ultrabooks.</li>
                        </div>

                        <div class="bg-red-400 rounded-lg shadow-md p-2 m-3">
                            <li class="text-lg font-semibold">Battery life varies by model</li>
                            <p>– High-performance versions may drain faster.</p>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    

    @endsection
</body>
</html>