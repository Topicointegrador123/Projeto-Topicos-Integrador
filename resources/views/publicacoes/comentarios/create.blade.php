@extends('layouts.app')
@section('title', "Nova Comentário para a Publicação {$publicacao->titulo}")
@section('content')
    <h1> Novo Comentário para a Publicação {{$publicacao->titulo}} </h1>

    @include('includes.validations-form')
    <form action="{{ route('comentarios.store' , $publicacao->id) }}" method="post">
        @csrf
        {{-- adicionei o "?? old()" serve para não dar bug na tela de create, tendo em vista que ao iniciar a tela ainda não existe um usuario --}}

        <textarea name="descricao" placeholder="Comentário:" value="{{ $publicacao->postagem ?? old('postagem')}}"></textarea>
{{--    <input type="text" name="postagem" placeholder="Postagem:" value="{{ $publicacao->postagem ?? old('postagem')}}">--}}

        <button type="submit">
            enviar
        </button>
    </form>
    <br>
    <a href="{{ route('publicacoes.index') }}">voltar</a>
@endsection
