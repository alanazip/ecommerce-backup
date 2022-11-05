@extends('site.layout')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Cadastro de Veículos</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-success font-weight-bold" href="{{ route('produtosmanager.create') }}">Adicionar Novo Veículo</a>
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
        @foreach ($produtos as $produto)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $produto->marca }}</td>
            <td>{{ $produto->modelo }}</td>
            <td>{{ $produto->cor }}</td>
            <td>{{ $produto->anoFabricacao }}</td>
            <td>{{ $produto->modeloAno }}</td>
            <td>{{ $produto->combustivel }}</td>
            <td>{{ $produto->preco }}</td>
            <td>
                <form action="{{ route('produtosmanager.destroy', $produto->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('produtosmanager.show', $produto->id) }}">Exibir Detalhes</a>

                    <a class="btn btn-primary" href="{{ route('produtosmanager.edit', $produto->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $produtos->links() !!}
</div>

@endsection