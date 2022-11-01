

<?php $__env->startSection('content'); ?>

<div class="jumbotron">
  <h1 class="display-4">Vendedores</h1>
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
      <label for="nomeVendedor">Nome:</label>
      <input type="text" class="form-control" id="nomeVendedor" name="nomeVendedor">
    </div>
    <div class="form-group">
      <label for="emailVendedor">Email:</label>
      <input type="email" class="form-control" id="emailVendedor" name="emailVendedor" placeholder="email@example.com">
    </div>
    <div class="form-group">
      <label for="telVendedor">Telefone:</label>
      <input type="text" class="form-control" id="telVendedor" name="telVendedor" placeholder="(18) 9 9999-9999">
    </div>
    <button type="submit" class="btn btn-primary mb-2" value="Enviar">Enviar</button>
  </form>
  <a class="btn btn-warning" href="<?php echo e(route('vendedoresmanager.index')); ?>">Visualizar Vendedor</a>

</div>
<hr>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alana\Downloads\P1 - Alana\resources\views/site/vendedores.blade.php ENDPATH**/ ?>