@extends('site.layout')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Exibir Jogos</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-primary" href="{{ route('produtosmanager.index') }}">Voltar</a>
    <p></p>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                {{ $produto->nome }}
            </div>
            <div class="form-group">
                <strong>Descrição:</strong>
                {{ $produto->descricao }}
            </div>
            <div class="form-group">
                <strong>Preço:</strong>
                {{ $produto->preco }}
            </div>
            <div class="form-group">
                <strong>Quantidade:</strong>
                {{ $produto->quantidade }}
            </div>
            <div class="form-group">
                <strong>Categoria:</strong>
                {{ $produto->categoria_id }}
            </div>
            <div class="form-group">
                <strong>Fornecedor:</strong>
                {{ $produto->fornecedor_id }}
            </div>
        </div>
    </div>
</div>
@endsection