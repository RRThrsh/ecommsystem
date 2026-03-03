<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')

    @section('title', 'Welcome Page')

    @section('content')

    <!-- Input main content here -->
    <h1 class="text-3xl font-bold text-center">Welcome to my Laravel site!</h1>


    @endsection
</body>
</html>