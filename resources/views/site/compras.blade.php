@extends('site.layout')

@section('content')

<div class="jumbotron">
  <h1 class="display-3 font-weight-bold">Veículos</h1>
  <hr class="my-3">
  <p class="lead font-weight-bold">Conheça os veículos disponíveis em nossa plataforma.</p>
</div>

<div class="container">
  <!-- START THE FEATURETTES -->
  @foreach($compras as $compra)
  <div class="row featurette-divider">
    <div class="col-md-3">
      <h2 class="lead">{{ $compra->marca }}</h2>
      <p class="lead">{{ $compra->modelo }}</p>
      <p class="lead">{{ $compra->cor }}</p>
      <p class="lead">{{ $compra->anoFabricacao }}</p>
      <p class="lead">{{ $compra->modeloAno }}</p>
      <p class="lead">{{ $compra->combustivel }}</p>
      <p class="lead">{{ $compra->preco }}</p>
      <p class="lead">{{ $compra->detalhes }}</p>
    </div>
    <div class="col-md-3">
      <figure class="figure">
        <!-- {{-- <img src="/images/compra/{{ $compra->imagem }}" class="figure-img img-fluid rounded" alt="{{ $compra->nome }}">--}} -->
        <img src="{{ asset($compra->imagem) }}" class="figure-img img-fluid rounded" alt="{{ $compra->marca }}">
      </figure>
    </div>
  </div>
  <hr class="featurette-divider">
  @endforeach
</div>

@endsection