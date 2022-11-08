

<?php $__env->startSection('content'); ?>

<div class="jumbotron">
  <h1 class="display-4">Categorias</h1>
  <hr class="my-4">
</div>

<div class="container">
  <?php if(session('msg')): ?>
  <p class="msg"><?php echo e(session('msg')); ?></p>
  <p></p>
  <?php endif; ?>
  <form method="post">
    <?php echo csrf_field(); ?>
    <div class="form-group">
      <label for="nomeCategoria">Nome:</label>
      <input type="text" class="form-control" id="nomeCategoria" name="nomeCategoria">
    </div>
    <button type="submit" class="btn btn-primary mb-2" value="Enviar">Enviar</button>
  </form>
  <a class="btn btn-warning" href="<?php echo e(route('categoriasmanager.index')); ?>">Visualizar Categoria</a>

</div>
<hr>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\LARAVEL\gal_oficial_atualizado\resources\views/site/categorias.blade.php ENDPATH**/ ?>