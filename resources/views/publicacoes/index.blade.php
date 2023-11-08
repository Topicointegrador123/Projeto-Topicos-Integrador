@extends('layouts.app')
@section('title', 'Listagem dos usuários')
@section('content')
    <v-container>
        <h1>
            Publicações
            <v-btn href="{{ route('publicacoes.create') }}" color="deep-purple">+</v-btn>
        </h1>
        <v-form action="{{ route('usuarios.index') }}" method="get">
            <v-text-field name="search" label="Pesquisar"></v-text-field>
            <v-btn type="submit" color="deep-purple">Pesquisar</v-btn>
        </v-form>

        <v-list>

            @foreach($publicacoes as $publicacao)
                <v-list-item>
                    <v-list-item-content>
                        <v-list-item-title>
                            <a href="{{ route('publicacoes.show', $publicacao->id) }}">{{ $publicacao->titulo }}</a>
                        </v-list-item-title>
                        <v-list-item-subtitle>{{ $publicacao->data }}</v-list-item-subtitle>
                    </v-list-item-content>
                    <v-list-item-action>
                        <v-btn href="{{ route('publicacoes.show', $publicacao->id) }}" color="deep-purple">Visualizar</v-btn>
                    </v-list-item-action>
                </v-list-item>
            @endforeach
        </v-list>
    </v-container>
 
@endsection