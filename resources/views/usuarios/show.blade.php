@extends('layouts.app')
@section('title', "Listagem do usuário $usuario->nome" )
@section('content')
<h1>Usuário {{ $usuario->nome }} </h1>
<ul>
    <li>{{ $usuario->nome }}</li>
    <li>{{ $usuario->email }}</li>
    <li>{{ $usuario->created_at }}</li>
</ul>
<a href="{{ route('usuarios.index') }}">voltar</a>
@endsection
