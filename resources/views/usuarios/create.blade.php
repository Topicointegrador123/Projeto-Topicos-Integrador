@extends('layouts.app')
@section('title', 'Novo usuário')
@section('content')
<h1>Novo Usuário</h1>

    @include('includes.validations-form')
    <form action="{{ route('usuarios.store') }}" method="post">
        @csrf
        @include('usuarios._partials.form')
    </form>
<br>
<a href="{{ route('usuarios.index') }}">voltar</a>
@endsection
