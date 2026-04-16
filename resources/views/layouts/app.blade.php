<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fa-Me Café Pacita — Coffee, Food & Good Vibes</title>
    <meta name="description" content="Your neighborhood tambayan in Pacita, San Pedro, Laguna. Rich coffee, authentic Indonesian cuisine, and a cozy atmosphere open until 2 AM." />
    <meta property="og:title" content="Fa-Me Café Pacita" />
    <meta property="og:description" content="Coffee, Authentic Indonesian Food & Good Vibes in Pacita, San Pedro, Laguna." />
    <meta name="theme-color" content="#1a0f00" />
    <meta property="og:image" content="https://images.pexels.com/photos/1695052/pexels-photo-1695052.jpeg?auto=compress&cs=tinysrgb&w=1200" />
    <link rel="canonical" href="{{ url()->current() }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/fame-cafe.css') }}" />
</head>
<body class="bg-cafe-bg bg-[url('https://images.pexels.com/photos/1695052/pexels-photo-1695052.jpeg?auto=compress&cs=tinysrgb&w=1920')] bg-fixed bg-cover bg-center bg-no-repeat">

    <div class="fixed inset-0 bg-black/60 -z-10"></div>

    @include('partials.navbar')

    @yield('content')

    <script src="{{ asset('js/fame-cafe.js') }}"></script>
</body>
</html>
