

<?php $__env->startSection('content'); ?>
<div class="jumbotron">
    <h1 class="display-4">Vendedor</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-primary" href="<?php echo e(route('vendedoresmanager.index')); ?>">Voltar</a>
    <p></p>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                <?php echo e($vendedor->nome); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefone:</strong>
                <?php echo e($vendedor->telefone); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>E-mail:</strong>
                <?php echo e($vendedor->email); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data:</strong>
                <?php echo e($vendedor->updated_at); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alana\Downloads\P1 - Alana\resources\views/vendedoresmanager/show.blade.php ENDPATH**/ ?>