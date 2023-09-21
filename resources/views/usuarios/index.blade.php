@extends('layouts.app')
@section('title', 'Listagem dos usuários')
@section('content')
    <h1>
        Listagem de usuários
        (<a href=" {{ route('usuarios.create') }}"> + </a>)
    </h1>
<form action="{{ route('usuarios.index') }}" method="get">
    <input type="text" name="search" placeholder="Pesquisar">
    <button>Pesquisar</button>
</form>

    <ul>
        {{--    variável $usuarios recebida do controller via compact--}}
        @foreach($usuarios as $usuario)
            <li>
                {{$usuario->nome}} -
                {{$usuario->email}}
                | <a href="{{ route('usuarios.show', $usuario->id)  }}"> Detalhes</a>
                | <a href="{{ route('usuarios.edit', $usuario->id)  }}"> Editar</a>
            </li>
        @endforeach
    </ul>

@endsection
