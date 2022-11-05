@extends('site.layout')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Cadastro de Veículos</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-success font-weight-bold" href="{{ route('comprasmanager.create') }}">Adicionar Novo Veículo</a>
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
        @foreach ($compras as $compra)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $compra->marca }}</td>
            <td>{{ $compra->modelo }}</td>
            <td>{{ $compra->cor }}</td>
            <td>{{ $compra->anoFabricacao }}</td>
            <td>{{ $compra->modeloAno }}</td>
            <td>{{ $compra->combustivel }}</td>
            <td>{{ $compra->preco }}</td>
            <td>
                <form action="{{ route('comprasmanager.destroy', $compra->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('comprasmanager.show', $compra->id) }}">Exibir Detalhes</a>

                    <a class="btn btn-primary" href="{{ route('comprasmanager.edit', $compra->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $compras->links() !!}
</div>

@endsection