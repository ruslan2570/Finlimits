<!DOCTYPE html>
<html lang="ru" data-theme="autumn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />

    <script src="{{ asset('js/tailwind.config.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <link rel="apple-touch-icon" sizes="180x180" href="{{  asset('/img/fav/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{  asset('/img/fav/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{  asset('/img/fav/favicon-16x16.png') }}">
    <link rel="manifest" href="{{  asset('/img/fav/site.webmanifest') }}">
    <title>FinLimit</title>
</head>
<body>
        @yield('content')
</body>
</html>