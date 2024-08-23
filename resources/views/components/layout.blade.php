<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Autotechno Panel</title>
    <!-- Styles -->
    @vite('resources/css/app.css')
    @vite('resources/js/header.js')
</head>

<body class="h-[100px] scrollbar scrollbar-thumb-red-800 scrollbar-track-gray-300">
{{$slot}}
</body>


</html>
