<?php $__env->startSection('content'); ?>

<div class="jumbotron">
  <h1 class="display-3 font-weight-bold">Suas compras</h1>
  <hr class="my-3">
  <p class="lead font-weight-bold">Conheça os veículos disponíveis em nossa plataforma.</p>
</div>

<div class="container">
  <!-- START THE FEATURETTES -->
  <?php $__currentLoopData = $compras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $compra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="row featurette-divider">
    <div class="col-md-3">
      <h2 class="lead"><?php echo e($compra->marca); ?></h2>
      <p class="lead"><?php echo e($compra->modelo); ?></p>
      <p class="lead"><?php echo e($compra->cor); ?></p>
      <p class="lead"><?php echo e($compra->anoFabricacao); ?></p>
      <p class="lead"><?php echo e($compra->modeloAno); ?></p>
      <p class="lead"><?php echo e($compra->combustivel); ?></p>
      <p class="lead"><?php echo e($compra->preco); ?></p>
      <p class="lead"><?php echo e($compra->detalhes); ?></p>
    </div>
    <div class="col-md-3">
      <figure class="figure">
        <!--  -->
        <img src="<?php echo e(asset($compra->imagem)); ?>" class="figure-img img-fluid rounded" alt="<?php echo e($compra->marca); ?>">
      </figure>
    </div>
  </div>
  <hr class="featurette-divider">
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LARAVEL\gal_oficial_atualizado\resources\views/site/compras.blade.php ENDPATH**/ ?>