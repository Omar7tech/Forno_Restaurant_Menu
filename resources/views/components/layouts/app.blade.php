<!DOCTYPE html>
<html lang="en" data-theme="light" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title ?? 'Forno Flat Bread – Menu | Mediterranean & Italian Restaurant, Aley Lebanon' }}</title>
    <meta name="description"
        content="Explore Forno Flat Bread in Aley, Lebanon – authentic Mediterranean & Italian flatbreads, manakish, pizzas, wraps, pasta, salads, desserts, and refreshing beverages.">
    <meta name="keywords"
        content="Forno Flat Bread, Aley restaurants, Mediterranean restaurant Aley, Italian restaurant Aley, Flatbread Aley, Manakish Lebanon, Pizza Aley, Best pizza Lebanon, Lebanese flatbread, Best Mediterranean food in Aley, Authentic Italian pizza in Lebanon, Manakish and flatbread near me, Pizza delivery in Aley, Lebanese flatbread and manakish menu, Wraps, pasta, and salads in Aley, Where to eat pizza in Mount Lebanon, Top flatbread restaurant in Lebanon">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Forno Flat Bread – Mediterranean & Italian Restaurant Menu | Aley, Lebanon">
    <meta property="og:description"
        content="Explore authentic Mediterranean & Italian flatbreads, manakish, pizzas, wraps, pasta, salads, desserts, and beverages at Forno Flat Bread in Aley.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('favicon.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Forno Flat Bread – Menu | Aley, Lebanon">
    <meta name="twitter:description"
        content="Authentic Mediterranean & Italian flatbreads, manakish, pizzas, wraps, pasta, salads, desserts, and beverages in Aley.">
    <meta name="twitter:image" content="{{ asset('favicon.png') }}">
    <meta name="author" content="Forno Flat Bread">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">


</head>

<body class='w-full overflow-x-hidden raleway raleway-500'>

    <div id="progress-bar" class="fixed top-0 left-0 h-1 bg-teal-700 z-200 w-0"></div>
    <div
        class="absolute top-0 z-[-2] h-100 w-screen
         bg-[radial-gradient(ellipse_80%_80%_at_50%_-20%,rgba(45,212,191,0.25),rgba(255,255,255,0))]
         dark:bg-[radial-gradient(ellipse_80%_80%_at_50%_-20%,rgba(45,212,191,0.15),rgba(0,0,0,0))]">
    </div>
    <x-nav.main1 />
    {{ $slot }}

    <x-socials-bottom.main1 />
    <x-footer.main />
    <x-footer.footeryear />
    <x-fab.main />

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

</body>


</html>
