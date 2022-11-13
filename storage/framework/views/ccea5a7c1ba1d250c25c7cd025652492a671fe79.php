

<?php $__env->startSection('content'); ?>

<div class="jumbotron">
  <h1 class="display-3 font-weight-bold">Games</h1>
  <hr class="my-3">
  <p class="lead font-weight-bold">Conheça os jogos disponíveis em nossa plataforma.</p>
</div>

<div class="container">
  <!-- START THE FEATURETTES -->
  <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="row featurette-divider">
    <div class="col-md-3">
      <h2 class="lead"><?php echo e($produto->nome); ?></h2>
      <p class="lead"><?php echo e($produto->descricao); ?></p>
      <p class="lead"><?php echo e($produto->preco); ?></p>
      <p class="lead"><?php echo e($produto->quantidade); ?></p>
      <p class="lead"><?php echo e($produto->categoria_id); ?></p>
      <p class="lead"><?php echo e($produto->fornecedor_id); ?></p>
    </div>
  </div>
  <hr class="featurette-divider">
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\LARAVEL\gal_oficial_atualizado\resources\views/site/produtos.blade.php ENDPATH**/ ?>