@extends('layouts.main')

@section('title', 'Produto')

@section('content')
    <h1>Esta é a pagina de Produtos!</h1>
    <a href="/">Voltar para Home</a>

    @if($busca != '')
        <p>O Usuário está buscando por: {{ $busca }}</p>
    @endif
@endsection