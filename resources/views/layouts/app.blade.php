<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    </head>
    <body>
        <nav class="navbar navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="/">{{ config('app.name', 'Laravel') }}</a>
                <a class="fas fa-shopping-cart" href="{{ route('cart.index') }}"></a>
            </div>
        </nav>
        @yield('content')
    </body>
</html>