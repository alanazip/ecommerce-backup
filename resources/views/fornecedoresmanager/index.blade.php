@extends('site.layout')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Vendedores</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-warning" href="{{ route('site.vendedores') }}">Criar novo vendedor</a>
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
            <th>Nome</th>
            <th>Mensagem</th>
            <th>Data</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($vendedores as $vendedor)
        <tr class="col-6">
            <td>{{ ++$i }}</td>
            <td>{{ $vendedor->nome}}</td>
            <td>{{ $vendedor->telefone}}</td>
            <td>{{ $vendedor->email}}</td>
            <td>{{ $vendedor->created_at}}</td>
            <td>
                <form action="{{ route('vendedoresmanager.destroy', $vendedor->id) }}" method="POST">
                    
                    <a class="btn btn-info" href="{{ route('vendedoresmanager.show', $vendedor->id) }}" value="Exibir">Exibir</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Excluir</button>

                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $vendedores->links() !!}
</div>

@endsection