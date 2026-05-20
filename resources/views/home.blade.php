@extends("layouts.main_layout")

@section("content")
    @can("create", App\Models\Note::class)
    @endcan

    <x-componente :user="Auth::user()" />

    @can("user_is_admin")
    @endcan
@endsection
