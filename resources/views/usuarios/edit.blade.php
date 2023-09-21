@extends('layouts.app')
@section('title', "Editar Usuário $usuario->nome")
@section('content')
    <h1>Editar Usuário {{ $usuario->nome }}</h1>

    @include('includes.validations-form')
    <form action="{{ route('usuarios.update', $usuario->id) }}" method="post">
        @method('PUT')
        @include('usuarios._partials.form')
    </form>
    <br>
    <form action="{{route('usuarios.delete', $usuario->id)}}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit"> deletar </button>
    </form>
    <br>
    <a href="{{ route('usuarios.index') }}">voltar</a>

@endsection
