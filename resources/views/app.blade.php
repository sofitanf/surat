<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    </head>
    <body>
        <div id="app"></div>
        <script>
            window.Urls = @json([
                'api' => url('/api')
            ]);
        </script>
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>