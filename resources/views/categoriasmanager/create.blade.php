@extends('site.layout')

@section('content')
<div class="jumbotron">
    <h1 class="display-4 font-weight-bold">Adicionar Novo Veículo</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-warning" href="{{ route('estoquesmanager.index') }}">Voltar</a>
    <p></p>

    @if ($errors->any())
    <p></p>
    <div class="alert alert-danger">
        <strong>Ops!</strong>Houve algum problema com a entrada de dados.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('estoquesmanager.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Marca:</strong>
                    <input type="input" name="marca" class="form-control" placeholder="Marca">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Modelo:</strong>
                    <input type="input" name="modelo" class="form-control" placeholder="Modelo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cor:</strong>
                    <input type="input" name="cor" class="form-control" placeholder="Cor">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Ano de Fabricação:</strong>
                    <input type="input" name="anoFabricacao" class="form-control" placeholder="Ano de Fabricação">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Ano do Modelo:</strong>
                    <input type="input" name="modeloAno" class="form-control" placeholder="Ano de Modelo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <label for="combustivel">Tipo de contato:</label>
            <select class="form-control" name="combustivel">
                <option value="Gasolina">Gasolina</option>
                <option value="Alcool">Alcool</option>
                <option value="Etanol">Etanol</option>
                <option value="Diesel">Diesel</option>
            </select>
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Preço:</strong>
                    <input type="input" name="preco" class="form-control" placeholder="Preço">
                </div>
                <div class="form-group">
                    <strong>Detalhes:</strong>
                    <textarea class="form-control" style="height:150px" name="detalhes" placeholder="Detalhes"></textarea>
                </div>
                <div class="form-group">
                    <strong>Imagem:</strong>
                    <input type="file" name="imagem" class="form-control-file" placeholder="Imagem">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>

    </form>
</div>
@endsection