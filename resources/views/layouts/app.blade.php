<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $seo_title ?? config('app.name') }}</title>
    <meta name="description" content="{{ $seo_description ?? '' }}">

    <!-- Critical CSS inline (above-the-fold only) -->
    <style>
        body { margin: 0; font-family: 'Poppins', sans-serif; background: #fff; }
        /* Apni hero section ki critical CSS yahan daal do */
    </style>

    <!-- Preload local assets -->
    <link rel="preload" href="{{ asset('css/bootstrap.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('css/bootstrap-icons.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('css/style.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">

    <noscript>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </noscript>

    <!-- Elfsight async -->
    <script src="https://elfsightcdn.com/platform.js" async defer></script>
</head>
<body>
    @yield('content')
</body>
</html>