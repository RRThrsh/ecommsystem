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

    <!-- Card Section -->
    <section class="bg-gray-100 py-10">
        <div class="container mx-auto px-6 md:px-40">
            <h2 class="text-3xl md:text-4xl font-serif font-bold text-center mb-10">Explore Our Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold mb-4">Feature One</h3>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <!-- Card 2 -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold mb-4">Feature Two</h3>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <!-- Card 3 -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold mb-4">Feature Three</h3>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
                <div class="bg-green-100 rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold mb-4">Pros</h3>
                    <ul class="list-disc list-inside text-gray-700">
                        <li>High performance and reliability.</li>
                        <li>Wide range of models to choose from.</li>
                        <li>Excellent build quality.</li>
                    </ul>
                </div>
                <!-- Cons -->
                <div class="bg-red-100 rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold mb-4">Cons</h3>
                    <ul class="list-disc list-inside text-gray-700">
                        <li>Higher price point compared to competitors.</li>
                        <li>Limited gaming capabilities.</li>
                        <li>Some models can be bulky.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    

    @endsection
</body>
</html>