<?php $__env->startSection('content'); ?>

<div class="jumbotron">
  <h1 class="display-3 font-weight-bold">Veículos</h1>
  <hr class="my-3">
  <p class="lead font-weight-bold">Conheça os veículos disponíveis em nossa plataforma.</p>
</div>

<div class="container">
  <!-- START THE FEATURETTES -->
  <?php $__currentLoopData = $estoques; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estoque): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="row featurette-divider">
    <div class="col-md-3">
      <h2 class="lead"><?php echo e($estoque->marca); ?></h2>
      <p class="lead"><?php echo e($estoque->modelo); ?></p>
      <p class="lead"><?php echo e($estoque->cor); ?></p>
      <p class="lead"><?php echo e($estoque->anoFabricacao); ?></p>
      <p class="lead"><?php echo e($estoque->modeloAno); ?></p>
      <p class="lead"><?php echo e($estoque->combustivel); ?></p>
      <p class="lead"><?php echo e($estoque->preco); ?></p>
      <p class="lead"><?php echo e($estoque->detalhes); ?></p>
    </div>
    <div class="col-md-3">
      <figure class="figure">
        <!--  -->
        <img src="<?php echo e(asset($estoque->imagem)); ?>" class="figure-img img-fluid rounded" alt="<?php echo e($estoque->marca); ?>">
      </figure>
    </div>
  </div>
  <hr class="featurette-divider">
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alana\Downloads\P1 - Alana\resources\views/site/estoques.blade.php ENDPATH**/ ?>