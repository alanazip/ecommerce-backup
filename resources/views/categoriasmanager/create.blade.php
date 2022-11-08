@extends('site.layout')

@section('content')
<div class="jumbotron">
    <h1 class="display-4 font-weight-bold">Adicionar Nova Categoria</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-warning" href="{{ route('categoriasmanager.index') }}">Voltar</a>
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

    <form action="{{ route('categoriasmanager.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <label for="categoria">Tipo de categoria:</label>
            <select class="form-control" name="categoria">
                <option value="Aventura">Aventura</option>
                <option value="Ação">Ação</option>
                <option value="Casual">Casual</option>
                <option value="Indie">Indie</option>
            </select>
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>

    </form>
</div>
@endsection