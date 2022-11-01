@extends('site.layout')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Exibir Veículos</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-primary" href="{{ route('estoquesmanager.index') }}">Voltar</a>
    <p></p>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Marca:</strong>
                {{ $estoque->marca }}
            </div>
            <div class="form-group">
                <strong>Modelo:</strong>
                {{ $estoque->modelo }}
            </div>
            <div class="form-group">
                <strong>Cor:</strong>
                {{ $estoque->cor }}
            </div>
            <div class="form-group">
                <strong>Ano de Fabricação:</strong>
                {{ $estoque->anoFabricacao }}
            </div>
            <div class="form-group">
                <strong>Ano do Modelo:</strong>
                {{ $estoque->modeloAno }}
            </div>
            <div class="form-group">
                <strong>Combustível:</strong>
                {{ $estoque->combustivel }}
            </div>
            <div class="form-group">
                <strong>Preço:</strong>
                {{ $estoque->preco }}
            </div>
            <div class="form-group">
                <strong>Detalhes:</strong>
                {{ $estoque->detalhes }}
            </div>
            <div class="form-group">
                <strong>Imagem:</strong>
                {{ $estoque->imagem }}
            </div>
        </div>
    </div>
</div>
@endsection