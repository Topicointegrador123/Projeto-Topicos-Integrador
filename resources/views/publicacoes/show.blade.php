@extends('layouts.app')
@section('title', "Listagem do usuário $publicacao->titulo" )
@section('content')
        <v-container>
            <v-card>
                <v-card-title>
                    {{ $publicacao->titulo }}
                </v-card-title>
                <v-card-text>
                    {{ $publicacao->postagem }}
                    {{ $publicacao->data }}
                    @if ($publicacao->image)
                        <img src="{{ asset("storage/{$publicacao->image}") }}" alt="{{ $publicacao->titulo }}" class="v-responsive ma-4">
                    @else
                        <img src="{{ url("favicon.ico") }}" alt="{{ $publicacao->titulo }}">
                    @endif
                    <p>Comentários {{ $publicacao->titulo }}</p>
                    @if (count($comentarios['comentarios']) > 0)
                        <v-list>
                            @foreach ($comentarios['comentarios'] as $comentario)
                                <v-list-item>
                                    <v-list-item-title>
                                        {{ $comentario->descricao }}
                                    </v-list-item-title>
                                    <v-list-item-subtitle>
                                        {{ $comentario->data_comentario }}
                                    </v-list-item-subtitle>
                                </v-list-item>
                                @endforeach
                            </v-list>
                            <br>
                    @else
                        <p>Nenhum comentário.</p>
                    @endif
                    <a class="v-btn" href="{{ route('comentarios.create', $publicacao->id) }}">Comentar publicação</a>
                    <br>
                    <a class="v-btn" href="{{ route('publicacoes.index') }}">Voltar</a>
                </v-card-text>
            </v-card>
        </v-container>
    
@endsection
