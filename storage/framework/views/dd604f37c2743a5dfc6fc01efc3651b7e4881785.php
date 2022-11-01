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
            <h1>Acesse carros semi-novos.</h1>
            <p>Carros importados, marcas renomadas.</p>
            <p><a class="btn btn-lg btn-warning font-weight-bold" href="/estoques">Ver mais</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="https://adrenaline.com.br/uploads/chamadas/minecraft-rtx-chamada1.jpg" role="img" aria-label=" :  " preserveAspectRatio="xMidYMid slice" focusable="false"><title> </title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"> </text></svg>

        <div class="container">
          <div class="carousel-caption text-right">
            <h1>Preços acessiveis.</h1>
            <p>Todos semi-novos com garantia de 2 anos.</p>
            <p><a class="btn btn-lg btn-warning font-weight-bold" href="/estoquesmanager">Visualizar Veículos</a></p>
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
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://i.pinimg.com/564x/33/84/a6/3384a60c7086823d65e25b248b9e6c6e.jpg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>



        <h2>Visão</h2>
        <p>Ser referência no mercado pela excelência no relacionamento com os clientes e na comercialização de produtos e serviços no segmento automotivo.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://i.pinimg.com/564x/52/11/02/521102e41ec148fd3c5b09575d08dafc.jpg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
        <h2>Nossa História</h2>
        <p>A Além Car Veículos é uma empresa que atua no comercio de veículos a mais de 25 anos, fundada no ano de 1993 a Além começou como toda micro-empresa, com uma pequena quantidade de veículos. Com o passar do tempo devido à luta, competência e perseverança de seu diretor e funcionários a empresa teve uma grande expansão no ramo, compramos, vendemos e financiamos veículos 0 km, semi-novos e usados. </p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://cdn.discordapp.com/attachments/1016142452345815041/1029536686947979304/Screenshot_1.png" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
        <h2>Lista de Vendedores</h2>
        <p>Confira nossa lista de vendedores, atendendo com foco na satisfação plena dos clientes. </p>
        <p><a class="btn btn-warning font-weight-bold" href="/vendedoresmanager">Vendedores &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

  </div><!-- /.container -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\LARAVEL\P1 - Alana com node e vendor - Copia\resources\views/site/home.blade.php ENDPATH**/ ?>