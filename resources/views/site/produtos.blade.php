@extends('site.layout')

@section('content')

<div class="jumbotron">
  <h1 class="display-3 font-weight-bold">Games</h1>
  <hr class="my-3">
  <p class="lead font-weight-bold">Conheça os jogos disponíveis em nossa plataforma.</p>
</div>

<div class="container">
  <!-- START THE FEATURETTES -->
  @foreach($produtos as $produto)
  <div class="row featurette-divider">
    <div class="col-md-3">
      <h2 class="lead">{{ $produto->nome }}</h2>
      <p class="lead">{{ $produto->descricao }}</p>
      <p class="lead">{{ $produto->preco }}</p>
      <p class="lead">{{ $produto->quantidade }}</p>
      <p class="lead">{{ $produto->categoria_id }}</p>
      <p class="lead">{{ $produto->fornecedor_id }}</p>
    </div>
  </div>
  <hr class="featurette-divider">
  @endforeach
</div>

@endsection