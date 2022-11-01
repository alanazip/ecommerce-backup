<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G.A.L</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
</head>
<body>

<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-warning" >
    <a class="navbar-brand" href="https://i.ibb.co/PYdSRg0/download.png"><img src="" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ (Route::current()->getName() === 'site.home' ? ' active' : '') }}"><a class="nav-link text-dark my-3 font-weight-bold" href="{{ route('site.home') }}">Página inicial<span class="sr-only">(current)</span></a></li>
        <li class="nav-item {{ (Route::current()->getName() === 'site.compras' ? ' active' : '') }}"><a class="nav-link text-dark my-3 font-weight-bold" href="{{ route('site.compras') }}">Compras</a></li>
        <li class="nav-item {{ (Route::current()->getName() === 'site.contatos' ? ' active' : '') }}"><a class="nav-link text-dark my-3 font-weight-bold" href="{{ route('site.contatos') }}">Contatos</a></li>
        <li class="nav-item {{ (Route::current()->getName() === 'site.vendedores' ? ' active' : '') }}"><a class="nav-link text-dark my-3 font-weight-bold" href="{{ route('fornecedoresmanager.index') }}">Fornecedores</a></li>
        <li><div class="dropdown">
            <button class="btn btn-danger dropdown-toggle my-3 font-weight-bold" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Area Administrativa
              </button>
            <div class="dropdown-menu font-weight-bold" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item font-weight-bold" href="/produtosmanager/create">Adicionar Produto</a>
            <a class="dropdown-item font-weight-bold" href="/fornecedores">Adicionar Fornecedores</a>
            <a class="dropdown-item font-weight-bold" href="/contatosmanager">Visualizar Contatos</a>
            </div>
</div></li>
      </ul>
    </div>
  </nav>
</header>

<main role="main">

    @yield('content')

<!-- FOOTER -->
    <p>&nbsp;</p>
    <footer class="text-center text-white" style="background-color: black" >
        <p>&nbsp;</p>
        <p class="float-end"><a class="text-white" href="#">Voltar ao topo</a></p>
        <p>&copy; <!--<?= date('Y'); ?>--> {{ date ('Y') }} Company, Inc. &middot; <a class="text-white" href="#">Privacy</a> &middot; <a class="text-white" href="#">Terms</a></p>
        <p>&nbsp;</p>
    </footer>
</main>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
