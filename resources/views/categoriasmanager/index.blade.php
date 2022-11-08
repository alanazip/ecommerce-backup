@extends('site.layout')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Cadastro de Categorias</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-success font-weight-bold" href="{{ route('site.categorias') }}">Adicionar Nova Categoria</a>
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
            <th>Categoria:</th>
        </tr>
        @foreach ($categorias as $categoria)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $categoria->nome }}</td>
            <td>
                <form action="{{ route('categoriasmanager.destroy', $categoria->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('categoriasmanager.show', $categoria->id) }}">Exibir Detalhes</a>

                    <a class="btn btn-primary" href="{{ route('categoriasmanager.edit', $categoria->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $categorias->links() !!}
</div>

@endsection