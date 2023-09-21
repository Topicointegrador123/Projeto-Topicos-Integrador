@extends('layouts.app')
@section('title', 'Listagem dos usuários')
@section('content')
    <h1>
        Publicações (<a href=" {{ route('publicacoes.create') }}"> + </a>)
    </h1>
    <form action="{{ route('usuarios.index') }}" method="get">
        <input type="text" name="search" placeholder="Pesquisar">
        <button>Pesquisar</button>
    </form>

    <ul>
        {{--    variável $usuarios recebida do controller via compact--}}
        @foreach($publicacoes as $publicacao)
            <li>
                {{$publicacao->titulo}} -
                {{$publicacao->data}} -
                | <a href="{{ route('publicacoes.show', $publicacao->id)  }}"> Visualizar </a>
            </li>
        @endforeach
    </ul>

@endsection
