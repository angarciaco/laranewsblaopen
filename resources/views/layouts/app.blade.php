<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#020617">

    <title>@yield('title', config('site.name').' — Muy pronto')</title>
    <meta name="description" content="@yield('description', 'Un nuevo sitio de noticias está en camino. Información rigurosa, análisis con contexto y una lectura sin ruido.')">
    <meta name="robots" content="index, follow">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ config('site.name') }}">
    <meta property="og:title" content="@yield('title', config('site.name').' — Muy pronto')">
    <meta property="og:description" content="@yield('description', 'Un nuevo sitio de noticias está en camino. Información rigurosa, análisis con contexto y una lectura sin ruido.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary">

    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-950 font-sans text-slate-100 antialiased selection:bg-amber-300 selection:text-slate-950">
    <a href="#contenido" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-50 focus:rounded-lg focus:bg-amber-300 focus:px-4 focus:py-2 focus:text-sm focus:font-semibold focus:text-slate-950">
        Saltar al contenido
    </a>

    @include('partials.header')

    <main id="contenido">
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>
