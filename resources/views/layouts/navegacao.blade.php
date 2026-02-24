<nav class="navbar bg-dark">
    <div class="container-fluid">
        <a href="{{ route("index") }}" class="navbar-brand text-decoration-none text-light fs-2"><i class="bi bi-card-image fs-1"></i> {{ env("APP_NAME") }}</a>

        <div>
            <a href="{{ route("login") }}" class="btn btn-secondary">Login</a>
            <a href="{{ route("register") }}" class="btn btn-secondary">Cadastro</a>
        </div>
    </div>
</nav>