<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.scss', 'resources/js/app.js'])

    </head>
    <body>
        <div class="container">
            <header class="header">
                <h1>Startup Name</h1>
            </header>
            <section class="hero">
                <h2>Welcome to Our Startup</h2>
                <p>Discover amazing products and services that will change your life.</p>
            </section>
            <section class="feature">
                <div class="icon"></div>
                <h3>Feature 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </section>
            <section class="feature">
                <div class="icon"></div>
                <h3>Feature 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </section>
            <section class="feature">
                <div class="icon"></div>
                <h3>Feature 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </section>
            <section class="cta">
                <h2>Sign Up Today</h2>
                <p>Join our amazing community and experience the future.</p>
            </section>
        </div>
    </body>
</html>
