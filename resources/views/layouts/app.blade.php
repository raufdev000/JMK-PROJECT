<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $seo_title ?? config('app.name') }}</title>
    <meta name="description" content="{{ $seo_description ?? '' }}">
</head>
<body>
    @yield('content')
</body>
</html>