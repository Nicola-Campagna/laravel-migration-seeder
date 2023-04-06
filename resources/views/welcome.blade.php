<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    {{-- Includiamo gli assets con la direttiva @vite --}}
    @vite('resources/js/app.js')
</head>

<body>
    {{-- @php
        var_dump($trains);
    @endphp --}}
    @foreach ($trains as $train)
        <h1>{{ $train->azienda }}</h1>
        <h1>{{ $train->id }}</h1>
    @endforeach
</body>

</html>
