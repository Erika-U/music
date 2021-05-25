<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Vue Laravel SPA') }}</title>

        <!-- Styles -->
        <link href="{{ mix('/css/edit.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="edit">
bbb
        </div>
        <!-- Scripts -->
        <script src="{{ mix('/js/edit.js') }}" defer></script>
    </body>
</html>
