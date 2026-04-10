<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env("APP_NAME") }}</title>
    
    @include("layouts.partials.links")

    @include("layouts.partials.styles.estilos")
    @vite([
        "resources/css/app.css",
        "resources/js/app.js"
    ])
</head>
<body class="bg-light text-center fst-italic d-flex flex-column min-vh-100">
    @include("layouts.navbar")

    <div class="my-auto">
        @yield("content")
    </div>

    @include("layouts.footer")

    @include("layouts.partials.javascripts.scripts")
</body>
</html>
