<?php $__env->startSection('content'); ?>

<div class="jumbotron">
  <h1 class="display-4">Cursos</h1>
  <hr class="my-4">
  <p class="lead">Conheça os cursos disponíveis em nossa plataforma.</p>
</div>

<div class="container">
  <!-- START THE FEATURETTES -->
  <a class="btn btn-info" href="<?php echo e(route('cursosmanager.create')); ?>">Inserir novos cursos</a>

  <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading"><?php echo e($curso->nome); ?></h2>
      <p class="lead"><?php echo e($curso->descricao); ?></p>
    </div>
    <div class="col-md-5">
      <figure class="figure">
        <!--  -->
        <img src="<?php echo e(asset($curso->imagem)); ?>" class="figure-img img-fluid rounded" alt="<?php echo e($curso->nome); ?>">
      </figure>
    </div>
  </div>
  <hr class="featurette-divider">
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alana\Downloads\P1 - Alana\resources\views/site/cursos.blade.php ENDPATH**/ ?>