@extends('site.layout')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Cadastro de Veículos</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-success font-weight-bold" href="{{ route('estoquesmanager.create') }}">Adicionar Novo Veículo</a>
    <p></p>
    @if ($message = Session::get('success'))
    <p></p>
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Cor</th>
            <th>Ano de Fabricação</th>
            <th>Ano do Modelo</th>
            <th>Combustivel</th>
            <th>Preço</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($estoques as $estoque)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $estoque->marca }}</td>
            <td>{{ $estoque->modelo }}</td>
            <td>{{ $estoque->cor }}</td>
            <td>{{ $estoque->anoFabricacao }}</td>
            <td>{{ $estoque->modeloAno }}</td>
            <td>{{ $estoque->combustivel }}</td>
            <td>{{ $estoque->preco }}</td>
            <td>
                <form action="{{ route('estoquesmanager.destroy', $estoque->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('estoquesmanager.show', $estoque->id) }}">Exibir Detalhes</a>

                    <a class="btn btn-primary" href="{{ route('estoquesmanager.edit', $estoque->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $estoques->links() !!}
</div>

@endsection