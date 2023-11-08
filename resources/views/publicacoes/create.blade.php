@extends('layouts.app')
@section('title', 'Nova publicação')
@section('content')
    <h1>Nova Publicação</h1>

    @include('includes.validations-form')
    <form action="{{ route('publicacoes.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        {{-- adicionei o "?? old()" serve para não dar bug na tela de create, tendo em vista que ao iniciar a tela ainda não existe um usuario --}}

        <input type="text" name="titulo" placeholder="Titulo da postagem:" value="{{ $publicacao->titulo ?? old('titulo')}}">
        <br>
        <textarea name="postagem" placeholder="Postagem:" value="{{ $publicacao->postagem ?? old('postagem')}}"></textarea>
        <br>
        <input type="file" name="image" >
{{--    <input type="text" name="postagem" placeholder="Postagem:" value="{{ $publicacao->postagem ?? old('postagem')}}">--}}

        <button type="submit">
            enviar
        </button>
    </form>
    <br>
    <a href="{{ route('publicacoes.index') }}">voltar</a>
@endsection
