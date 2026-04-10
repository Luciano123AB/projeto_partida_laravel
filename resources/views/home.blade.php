@extends("layouts.main_layout")

@section("content")
    <x-componente :user="Auth::user()" />
@endsection
