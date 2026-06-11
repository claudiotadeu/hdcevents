@extends('layouts.main')

@section('title', 'Produto')

@section('content')
    <h1>Esta é a pagina de Produto!</h1>
    <a href="/">Voltar para Home</a>
    @if($id != null)
        <p>Exibindo produto id: {{ $id }}</p>
    @endif
@endsection