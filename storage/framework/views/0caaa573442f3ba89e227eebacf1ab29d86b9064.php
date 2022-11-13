<?php $__env->startSection('content'); ?>

<div class="jumbotron">
  <h1 class="display-3 font-weight-bold">Suas compras</h1>
  <hr class="my-3">
  <p class="lead font-weight-bold">Conheça os jogos disponíveis em nossa plataforma.</p>
</div>

<div class="container">
  <!-- START THE FEATURETTES -->
  <?php $__currentLoopData = $compras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $compra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="row featurette-divider">
    <div class="col-md-3">
      <h2 class="lead"><?php echo e($compra->status_id); ?></h2>
      <p class="lead"><?php echo e($compra->user_id); ?></p>
    </div>
  </div>
  <hr class="featurette-divider">
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LARAVEL\gal_oficial_atualizado\resources\views/site/compras.blade.php ENDPATH**/ ?>