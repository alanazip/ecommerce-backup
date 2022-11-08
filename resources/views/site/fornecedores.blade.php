@extends('site.layout')

@section('content')

<div class="jumbotron">
  <h1 class="display-4">Fornecedores</h1>
  <hr class="my-4">
</div>

<div class="container">
  @if(session('msg'))
  <p class="msg">{{ session('msg') }}</p>
  <p></p>
  @endif
  <form method="post">
    @csrf
    <div class="form-group">
      <label for="nomeFornecedor">Nome:</label>
      <input type="text" class="form-control" id="nomeFornecedor" name="nomeFornecedor">
    </div>
    <div class="form-group">
      <label for="telFornecedor">Telefone:</label>
      <input type="text" class="form-control" id="telFornecedor" name="telFornecedor" placeholder="(18) 9 9999-9999">
    </div>
    <div class="form-group">
      <label for="cepFornecedor">CEP:</label>
      <input type="text" class="form-control" id="cepFornecedor" name="cepFornecedor">
    </div>
    <div class="form-group">
      <label for="lograFornecedor">Logradouro:</label>
      <input type="logradouro" class="form-control" id="lograFornecedor" name="lograFornecedor" placeholder="">
    </div>
    <div class="form-group">
      <label for="ciFornecedor">Cidade:</label>
      <input type="text" class="form-control" id="ciFornecedor" name="ciFornecedor" placeholder="">
    </div>
    <div class="form-group">
      <label for="estFornecedor">Estado:</label>
      <input type="text" class="form-control" id="estFornecedor" name="estFornecedor">
    </div>
    <div class="form-group">
      <label for="razaoFornecedor">Razão social:</label>
      <input type="razao_social" class="form-control" id="razaoFornecedor" name="razaoFornecedor" placeholder="">
    </div>
    <button type="submit" class="btn btn-primary mb-2" value="Enviar">Enviar</button>
  </form>
  <a class="btn btn-warning" href="{{ route('fornecedoresmanager.index') }}">Visualizar Fornecedor</a>

</div>
<hr>

@endsection