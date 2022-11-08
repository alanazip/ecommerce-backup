@extends('site.layout')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">fornecedores</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-warning" href="{{ route('site.fornecedores') }}">Criar novo fornecedor</a>
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
            <th>Telefone</th>
            <th>CEP</th>
            <th>Logradouro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Razão Social</th>
            <th width="280px">Data/Hora de Cadastro</th>
        </tr>
        @foreach ($fornecedores as $fornecedor)
        <tr class="col-6">
            <td>{{ ++$i }}</td>
            <td>{{ $fornecedor->nome}}</td>
            <td>{{ $fornecedor->telefone}}</td>
            <td>{{ $fornecedor->cep}}</td>
            <td>{{ $fornecedor->logradouro}}</td>
            <td>{{ $fornecedor->cidade}}</td>
            <td>{{ $fornecedor->estado}}</td>
            <td>{{ $fornecedor->razao_social}}</td>
            <td>{{ $fornecedor->created_at}}</td>
            <td>
                <form action="{{ route('fornecedoresmanager.destroy', $fornecedor->id) }}" method="POST">
                    
                    <a class="btn btn-info" href="{{ route('fornecedoresmanager.show', $fornecedor->id) }}" value="Exibir">Exibir</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Excluir</button>

                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $fornecedores->links() !!}
</div>

@endsection