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
    <nav class="navbar bg-dark">
        <div class="container-fluid">
            <a href="{{ route("index") }}" class="navbar-brand text-decoration-none text-light fs-2"><i class="bi bi-card-image fs-1"></i> {{ env("APP_NAME") }}</a>
    
            <div>
                <a href="{{ route("login") }}" class="btn btn-secondary">Login</a>
                <a href="{{ route("register") }}" class="btn btn-secondary">Cadastro</a>
            </div>
        </div>
    </nav>

    @yield("content")

    <footer class="position-absolute bottom-0 start-50 translate-middle-x mb-2">
        <img style="width: 35px; height: 35px;" class="border border-black" src="{{ asset("assets/images/perfil.png") }}">
        Todos os Direitos Reservados: Luciano Eduardo Stefanello da Silva
        <br>
        © 2026 - {{ date("Y") }} {{ env("APP_NAME") }}
    </footer>

    @include("layouts.partials.scripts")
</body>
</html>
