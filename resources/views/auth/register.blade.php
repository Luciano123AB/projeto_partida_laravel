@extends("layouts.main_layout")

@section("content")
    <div class="container">
        <form action="{{ route("register") }}" class="card" method="POST">
            @csrf
    
            <div class="card-header text-center">
                <h3 class="card-title">CADASTRO</h3>
            </div>            
            <div class="card-body d-grid gap-3">
                <div class="form-group">
                    <label class="d-flex">Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="..." value="{{ old("name") }}" autofocus>
                    @error("name")
                        <span class="d-flex text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="d-flex">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="endereco@gmail.com" value="{{ old("email") }}">
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

                <div class="form-group">
                    <label class="d-flex">Confirmar Senha:</label>
                    <div class="input-group">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="***">
                    </div>
                    @error("password_confirmation")
                        <span class="d-flex text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
    
            <div class="card-footer d-flex flex-row-reverse gap-3">
                <div class="d-flex align-items-center gap-2">
                    <button type="submit" class="btn btn-success">Registrar</button>
                </div>
            </div>
        </form>
    </div>
@endsection