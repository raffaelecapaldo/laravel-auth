<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>


    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <main>
        @include('admin.partials.sidebar')
        <div class="main-content">
            @yield('content')
        </div>
    </main>
</body>

</html>
