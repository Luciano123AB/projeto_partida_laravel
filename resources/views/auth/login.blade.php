@extends("layouts.main_layout")

@section("content")
    <div class="container">
        <form action="{{ route("login") }}" class="card" method="POST">
            @csrf
    
            <div class="card-header text-center">
                <h3 class="card-title">LOGIN</h3>
            </div>            
            <div class="card-body d-grid gap-3">
                <div class="form-group">
                    <label class="d-flex">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="endereco@gmail.com" value="{{ old("email") }}" autofocus>
                    @error("email")
                        <span class="d-flex text-danger">{{ $message }}</span>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label class="d-flex">Senha:</label>
                    <div class="input-group">
                        <input type="password" class="form-control" name="password" placeholder="***">
                    </div>
                    @error("password")
                        <span class="d-flex text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
    
            <div class="card-footer d-flex flex-row-reverse">
                <div class="d-flex align-items-center gap-2">
                    <button type="submit" class="btn btn-success">Entrar</button>
                </div>
            </div>
        </form>
    </div>
@endsection