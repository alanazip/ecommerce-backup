@extends('site.layout')

@section('content')

<div class="jumbotron">
  <h1 class="display-4">Categorias</h1>
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
      <label for="nomeCategoria">Nome:</label>
      <input type="text" class="form-control" id="nomeCategoria" name="nomeCategoria">
    </div>
    <div class="form-group">
      <label for="emailCategoria">Email:</label>
      <input type="email" class="form-control" id="emailCategoria" name="emailCategoria" placeholder="email@example.com">
    </div>
    <div class="form-group">
      <label for="telCategoria">Telefone:</label>
      <input type="text" class="form-control" id="telCategoria" name="telCategoria" placeholder="(18) 9 9999-9999">
    </div>
    <button type="submit" class="btn btn-primary mb-2" value="Enviar">Enviar</button>
  </form>
  <a class="btn btn-warning" href="{{ route('categoriasmanager.index') }}">Visualizar Categoria</a>

</div>
<hr>

@endsection