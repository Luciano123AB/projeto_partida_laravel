<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env("APP_NAME") }}</title>
    
    @include("layouts.partials.links")

    @include("layouts.partials.styles")
</head>
<body class="bg-light text-center fst-italic">
    @include("layouts.navegacao")

    <div class="d-flex justify-content-center align-items-center vh-100">
        @yield("content")
    </div>

    @include("layouts.rodape")

    @include("layouts.partials.scripts")
</body>
</html>