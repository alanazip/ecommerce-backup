@extends('site.layout')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Cadastro de Jogos</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-success font-weight-bold" href="{{ route('produtosmanager.create') }}">Adicionar Novo Jogo</a>
    <p></p>
    @if ($message = Session::get('success'))
    <p></p>
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered text-white">
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Descricao</th>
            <th>Preco</th>
            <th>Quantidade</th>
            <th>Categoria</th>
            <th>Fornecedor</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($produtos as $produto)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $produto->nome }}</td>
            <td>{{ $produto->descricao }}</td>
            <td>{{ $produto->preco }}</td>
            <td>{{ $produto->quantidade }}</td>
            <td>{{ $produto->categoria_id }}</td>
            <td>{{ $produto->fornecedor_id }}</td>
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