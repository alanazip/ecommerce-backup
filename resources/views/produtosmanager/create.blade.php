@extends('site.layout')

@section('content')
<div class="jumbotron">
    <h1 class="display-4 font-weight-bold">Adicionar Novo Jogo</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-warning" href="{{ route('produtosmanager.index') }}">Voltar</a>
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

    <form action="{{ route('produtosmanager.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="input" name="nome" class="form-control" placeholder="Nome">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descrição:</strong>
                    <input type="input" name="descricao" class="form-control" placeholder="Descrição">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Preço:</strong>
                    <input type="input" name="preco" class="form-control" placeholder="Preço">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Quantidade:</strong>
                    <input type="input" name="quantidade" class="form-control" placeholder="Quantidade">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Categoria:</strong>
                    <input type="input" name="categoria_id" class="form-control" placeholder="Categoria">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fornecedor:</strong>
                    <input type="input" name="fornecedor_id" class="form-control" placeholder="Fornecedor">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>

    </form>
</div>
@endsection