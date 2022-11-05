@extends('site.layout')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Exibir Veículos</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-primary" href="{{ route('comprasmanager.index') }}">Voltar</a>
    <p></p>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Marca:</strong>
                {{ $compra->marca }}
            </div>
            <div class="form-group">
                <strong>Modelo:</strong>
                {{ $compra->modelo }}
            </div>
            <div class="form-group">
                <strong>Cor:</strong>
                {{ $compra->cor }}
            </div>
            <div class="form-group">
                <strong>Ano de Fabricação:</strong>
                {{ $compra->anoFabricacao }}
            </div>
            <div class="form-group">
                <strong>Ano do Modelo:</strong>
                {{ $compra->modeloAno }}
            </div>
            <div class="form-group">
                <strong>Combustível:</strong>
                {{ $compra->combustivel }}
            </div>
            <div class="form-group">
                <strong>Preço:</strong>
                {{ $compra->preco }}
            </div>
            <div class="form-group">
                <strong>Detalhes:</strong>
                {{ $compra->detalhes }}
            </div>
            <div class="form-group">
                <strong>Imagem:</strong>
                {{ $compra->imagem }}
            </div>
        </div>
    </div>
</div>
@endsection