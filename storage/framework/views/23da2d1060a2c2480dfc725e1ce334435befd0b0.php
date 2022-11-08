

<?php $__env->startSection('content'); ?>

<div class="jumbotron">
  <h1 class="display-4">Fornecedores</h1>
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
      <label for="nomeFornecedor">Nome:</label>
      <input type="text" class="form-control" id="nomeFornecedor" name="nomeFornecedor">
    </div>
    <div class="form-group">
      <label for="telFornecedor">Telefone:</label>
      <input type="text" class="form-control" id="telFornecedor" name="telFornecedor" placeholder="(18) 9 9999-9999">
    </div>
    <div class="form-group">
      <label for="cepFornecedor">CEP:</label>
      <input type="text" class="form-control" id="cepFornecedor" name="cepFornecedor">
    </div>
    <div class="form-group">
      <label for="lograFornecedor">Logradouro:</label>
      <input type="logradouro" class="form-control" id="lograFornecedor" name="lograFornecedor" placeholder="">
    </div>
    <div class="form-group">
      <label for="ciFornecedor">Cidade:</label>
      <input type="text" class="form-control" id="ciFornecedor" name="ciFornecedor" placeholder="">
    </div>
    <div class="form-group">
      <label for="estFornecedor">Estado:</label>
      <input type="text" class="form-control" id="estFornecedor" name="estFornecedor">
    </div>
    <div class="form-group">
      <label for="razaoFornecedor">Razão social:</label>
      <input type="razao_social" class="form-control" id="razaoFornecedor" name="razaoFornecedor" placeholder="">
    </div>
    <button type="submit" class="btn btn-primary mb-2" value="Enviar">Enviar</button>
  </form>
  <a class="btn btn-warning" href="<?php echo e(route('fornecedoresmanager.index')); ?>">Visualizar Fornecedor</a>

</div>
<hr>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\LARAVEL\gal_oficial_atualizado\resources\views/site/fornecedores.blade.php ENDPATH**/ ?>