<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Autotechno Panel</title>
    <!-- Styles -->
    @vite('resources/css/app.css')
    @vite('resources/js/header.js')
    @vite('resources/js/carousel.js')

    <!-- Fonts -->
    @if(app()->getLocale() === 'ka')
        <link rel="stylesheet" href="/node_modules/dejavu-sans/css/dejavu-sans.min.css">
    @else
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    @endif
</head>

<body class="
{{ app()->getLocale() === 'ka' ? 'georgian' : 'non-georgian' }}
h-[100px] scrollbar scrollbar-thumb-red-800 scrollbar-track-gray-300">
{{$slot}}
</body>


</html>
