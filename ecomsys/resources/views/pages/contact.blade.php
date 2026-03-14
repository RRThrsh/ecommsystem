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

    <!-- Contact Section -->
    <section class="py-16">
        <div class="container mx-auto px-6 md:px-40 font-serif">
            <h1 class="text-3xl md:text-4xl font-bold text-center mb-12">
                Contact Us
            </h1>

            <div class="max-w-lg mx-auto shadow-lg border border-gray-200 rounded-lg p-6 bg-white">
                <form action="#" method="POST" class="space-y-6">
                    @csrf

                    <div>
                        <label for="name" class="block text-lg font-medium text-gray-700">Name</label>
                        <input type="text" id="name" name="name" required
                            class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-md focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="email" class="block text-lg font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" required
                            class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-md focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="message" class="block text-lg font-medium text-gray-700">Message</label>
                        <textarea id="message" name="message" rows="5" required
                            class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-md focus:ring-blue-500 focus:border-blue-500"></textarea>
                    </div>

                    <div>
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    @endsection
</body>
</html>