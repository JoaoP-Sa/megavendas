<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        {{-- bootstrap css --}}
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <title>Laravel</title>
    </head>
    <body>
        @auth
            <header>
                <strong>Header</strong>
            </header>
        @endauth
        {{ $slot }}

        {{-- bootstrap js --}}
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>