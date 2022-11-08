

<?php $__env->startSection('content'); ?>
<div class="jumbotron">
    <h1 class="display-4">Exibir Categorias</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-primary" href="<?php echo e(route('categoriasmanager.index')); ?>">Voltar</a>
    <p></p>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descrição:</strong>
                <?php echo e($categoria->descricao); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\LARAVEL\gal_oficial_atualizado\resources\views/categoriasmanager/show.blade.php ENDPATH**/ ?>