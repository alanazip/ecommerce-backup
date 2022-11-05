<?php $__env->startSection('content'); ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%" height="100%" src="https://assets.xboxservices.com/assets/f5/a1/f5a1e21d-c465-48ba-b72f-3fbe06d083b7.jpg?n=Minecraft_Sneaky-Slider-1084_The-Wild-Update_1600x675.jpg" role="img" aria-label=" :  " preserveAspectRatio="xMidYMid slice" focusable="false"><title> </title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"> </text></svg>

        <div class="container">
          <div class="carousel-caption text-left font-weight-bold">
            <h1>G.A.L</h1>

            <?php if(date('H') > 0 && date("H") < 12): ?>
                <p>Olá, bom dia! Seja bem vindo!</p>
            <?php elseif(date("H") < 18): ?>
                <p>Olá, boa tarde! Seja bem vindo!</p>
            <?php else: ?>
                <p>Olá, boa noite! Seja bem vindo!</p>
            <?php endif; ?>

            
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="https://assets.xboxservices.com/assets/fb/8f/fb8f4675-955f-4930-aab4-3292ec16289e.jpg?n=Minecraft_Feature-Center-1084_XGP-Shotlock_1600x600.jpg" role="img" aria-label=" :  " preserveAspectRatio="xMidYMid slice" focusable="false"><title> </title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"> </text></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Acesse jogos.</h1>
            <p>Jogos de todas as franquias.</p>
            <p><a class="btn btn-lg btn-warning font-weight-bold" href="/produtos">Ver mais</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="https://adrenaline.com.br/uploads/chamadas/minecraft-rtx-chamada1.jpg" role="img" aria-label=" :  " preserveAspectRatio="xMidYMid slice" focusable="false"><title> </title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"> </text></svg>

        <div class="container">
          <div class="carousel-caption text-right">
            <h1>Preços acessiveis.</h1>
            <p>Todos semi-novos com garantia de 2 anos.</p>
            <p><a class="btn btn-lg btn-warning font-weight-bold" href="/produtosmanager">Visualizar Jogos</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#myCarousel" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#myCarousel" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </button>
  </div>
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://assets.xboxservices.com/assets/f5/a1/f5a1e21d-c465-48ba-b72f-3fbe06d083b7.jpg?n=Minecraft_Sneaky-Slider-1084_The-Wild-Update_1600x675.jpg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>



        <h2>Contato</h2>
        <p>Jogos de todos os generos</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://assets.xboxservices.com/assets/f5/a1/f5a1e21d-c465-48ba-b72f-3fbe06d083b7.jpg?n=Minecraft_Sneaky-Slider-1084_The-Wild-Update_1600x675.jpg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
        <h2>Destaques</h2>
        <p>Acesse jogos que acabaram de lançar. </p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://assets.xboxservices.com/assets/f5/a1/f5a1e21d-c465-48ba-b72f-3fbe06d083b7.jpg?n=Minecraft_Sneaky-Slider-1084_The-Wild-Update_1600x675.jpg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
        <h2>Avaliações</h2>
        <p>Conheça nosso feedback em tempo real </p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

  </div><!-- /.container -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\LARAVEL\gal_oficial_atualizado\resources\views/site/home.blade.php ENDPATH**/ ?>