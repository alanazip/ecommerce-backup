@extends('site.layout')

@section('content')

<div class="jumbotron">
  <h1 class="display-3 font-weight-bold">Veículos</h1>
  <hr class="my-3">
  <p class="lead font-weight-bold">Conheça os veículos disponíveis em nossa plataforma.</p>
</div>

<div class="container">
  <!-- START THE FEATURETTES -->
  @foreach($produtos as $produto)
  <div class="row featurette-divider">
    <div class="col-md-3">
      <h2 class="lead">{{ $produto->marca }}</h2>
      <p class="lead">{{ $produto->modelo }}</p>
      <p class="lead">{{ $produto->cor }}</p>
      <p class="lead">{{ $produto->anoFabricacao }}</p>
      <p class="lead">{{ $produto->modeloAno }}</p>
      <p class="lead">{{ $produto->combustivel }}</p>
      <p class="lead">{{ $produto->preco }}</p>
      <p class="lead">{{ $produto->detalhes }}</p>
    </div>
    <div class="col-md-3">
      <figure class="figure">
        <!-- {{-- <img src="/images/produto/{{ $produto->imagem }}" class="figure-img img-fluid rounded" alt="{{ $produto->nome }}">--}} -->
        <img src="{{ asset($produto->imagem) }}" class="figure-img img-fluid rounded" alt="{{ $produto->marca }}">
      </figure>
    </div>
  </div>
  <hr class="featurette-divider">
  @endforeach
</div>

@endsection