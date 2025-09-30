@php
    $settings = app(\App\Settings\GeneralSettings::class);
    $theme = $settings->theme;
@endphp
<!DOCTYPE html>
<html lang="en" data-theme="{{ $theme }}" class="scroll-smooth">

@php
    $restaurantData = [
        '@context' => 'https://schema.org',
        '@type' => 'Restaurant',
        'name' => 'Forno Flat Bread',
        'url' => url('/'),
        'image' => asset('images/cropped_circle_image.png'),
        'logo' => asset('favicon.png'),
        'description' => 'Explore Forno Flat Bread in Aley, Lebanon – authentic Mediterranean & Italian flatbreads, manakish, pizzas, wraps, pasta, salads, desserts, and refreshing beverages.',
        'address' => [
            '@type' => 'PostalAddress',
            'addressLocality' => 'Aley',
            'addressCountry' => 'Lebanon',
        ],
        'telephone' => $settings->phone_number ?? null,
        'sameAs' => array_filter([$settings->facebook_url, $settings->instagram_url]),
        'servesCuisine' => ['Mediterranean', 'Italian', 'Lebanese'],
        'priceRange' => '$$',
    ];
@endphp

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Forno Flat Bread – Menu | Mediterranean & Italian Restaurant, Aley Lebanon' }}</title>
    <meta name="description" content="Explore Forno Flat Bread in Aley, Lebanon – authentic Mediterranean & Italian flatbreads, manakish, pizzas, wraps, pasta, salads, desserts, and refreshing beverages.">
    <meta name="keywords" content="Forno Flat Bread, pizza Aley, Mediterranean restaurant Aley, Italian restaurant Aley, Flatbread Aley, Manakish Lebanon, Pizza Aley, Best pizza Lebanon, Lebanese flatbread, Wraps, pasta, salads">
    <meta name="robots" content="index, follow">
    <meta http-equiv="refresh" content="86400"> <!-- daily refresh hint -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Twitter -->
    <meta property="og:title" content="Forno Flat Bread – Mediterranean & Italian Restaurant Menu | Aley, Lebanon">
    <meta property="og:description" content="Explore authentic Mediterranean & Italian flatbreads, manakish, pizzas, wraps, pasta, salads, desserts, and beverages at Forno Flat Bread in Aley.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Forno Flat Bread – Menu | Aley, Lebanon">
    <meta name="twitter:description" content="Authentic Mediterranean & Italian flatbreads, manakish, pizzas, wraps, pasta, salads, desserts, and beverages in Aley.">
    <meta name="twitter:image" content="{{ asset('images/og-image.jpg') }}">
    <meta name="author" content="Forno Flat Bread">

    <!-- Fonts & CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Structured Data -->
    <script type="application/ld+json">
{!! json_encode($restaurantData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
</head>


<body class='w-full overflow-x-hidden raleway raleway-500'>

    <div
        class="absolute top-0 z-[-2] h-100 w-screen
         bg-[radial-gradient(ellipse_80%_80%_at_50%_-20%,rgba(45,212,191,0.25),rgba(255,255,255,0))]
         dark:bg-[radial-gradient(ellipse_80%_80%_at_50%_-20%,rgba(45,212,191,0.15),rgba(0,0,0,0))]">
    </div>
    <x-nav.main1 :$settings />
    {{ $slot }}

    <x-socials-bottom.main1 :$settings />
    <x-footer.main />
    <x-footer.footeryear />
    <x-fab.main :$settings />

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

</body>


</html>
