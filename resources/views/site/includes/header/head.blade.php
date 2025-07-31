<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>João Henrique - Desenvolvedor Front end</title>



    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/assets/scss/app.scss', 'resources/assets/js/app.js'])
    @else
        <style>
        </style>
    @endif
</head>
