@extends('site.layout')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Exibir Produtos</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-primary" href="{{ route('produtosmanager.index') }}">Voltar</a>
    <p></p>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Marca:</strong>
                {{ $produto->marca }}
            </div>
            <div class="form-group">
                <strong>Modelo:</strong>
                {{ $produto->modelo }}
            </div>
            <div class="form-group">
                <strong>Cor:</strong>
                {{ $produto->cor }}
            </div>
            <div class="form-group">
                <strong>Ano de Fabricação:</strong>
                {{ $produto->anoFabricacao }}
            </div>
            <div class="form-group">
                <strong>Ano do Modelo:</strong>
                {{ $produto->modeloAno }}
            </div>
            <div class="form-group">
                <strong>Combustível:</strong>
                {{ $produto->combustivel }}
            </div>
            <div class="form-group">
                <strong>Preço:</strong>
                {{ $produto->preco }}
            </div>
            <div class="form-group">
                <strong>Detalhes:</strong>
                {{ $produto->detalhes }}
            </div>
            <div class="form-group">
                <strong>Imagem:</strong>
                {{ $produto->imagem }}
            </div>
        </div>
    </div>
</div>
@endsection