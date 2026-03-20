<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $seo_title ?? config('app.name') }}</title>
    <meta name="description" content="{{ $seo_description ?? '' }}">

    <!-- Bootstrap LOCAL (download karke /public/css/ mein rakho) -->
    <link rel="preload" href="{{ asset('css/bootstrap.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"></noscript>

    <!-- Bootstrap Icons LOCAL (download karke /public/css/ mein rakho + /public/fonts/) -->
    <link rel="preload" href="{{ asset('css/bootstrap-icons.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}"></noscript>

    <!-- Style CSS defer -->
    <link rel="preload" href="{{ asset('css/style.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('css/style.css') }}"></noscript>

    <!-- Elfsight lazy (scroll pe load hoga) -->
    <script>
        window.addEventListener('scroll', function() {
            var s = document.createElement('script');
            s.src = 'https://elfsightcdn.com/platform.js';
            document.body.appendChild(s);
        }, {once: true});
    </script>

</head>
<body>
    @yield('content')
</body>
</html>