@extends('site.layout')

@section('content')

<div class="jumbotron">
  <h1 class="display-4">Contatos</h1>
  <hr class="my-4">
  <p class="lead">Nossa equipe está sempre a disposição para ouvir as suas críticas e sugestões. Entre em contato que iremos responder o mais breve possível.</p>
</div>

<div class="container">
  @if(session('msg'))
  <p class="msg">{{ session('msg') }}</p>
  <p></p>
  @endif
  <form method="post">
    @csrf
    <div class="form-group">
      <label for="nomeContato">Nome:</label>
      <input type="text" class="form-control" id="nomeContato" name="nomeContato">
    </div>
    <div class="form-group">
      <label for="emailContato">Email:</label>
      <input type="email" class="form-control" id="emailContato" name="emailContato" placeholder="email@example.com">
    </div>
    <div class="form-group">
      <label for="telContato">Telefone:</label>
      <input type="text" class="form-control" id="telContato" name="telContato" placeholder="(18) 9 9999-9999">
    </div>
    <div class="form-group">
      <label for="tipoContato">Tipo de contato:</label>
      <select class="form-control" id="tipoContato" name="tipoContato">
        <option value="Sugestão">Sugestão</option>
        <option value="Crítica">Crítica</option>
        <option value="Elogio">Elogio</option>
        <option value="Dúvida">Dúvida</option>
      </select>
    </div>
    <div class="form-group">
      <label for="mensagemContato">Mensagem:</label>
      <textarea class="form-control" id="mensagemContato" name="mensagemContato" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary mb-2" value="Enviar">Enviar</button>
  </form>
  <a class="btn btn-success" href="{{ route('contatosmanager.index') }}">Visualizar Mensagens</a>

</div>
<hr>

@endsection