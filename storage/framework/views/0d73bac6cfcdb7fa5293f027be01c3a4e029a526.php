

<?php $__env->startSection('content'); ?>
<div class="jumbotron">
    <h1 class="display-4">Exibir Veículos</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-primary" href="<?php echo e(route('estoquesmanager.index')); ?>">Voltar</a>
    <p></p>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Marca:</strong>
                <?php echo e($estoque->marca); ?>

            </div>
            <div class="form-group">
                <strong>Modelo:</strong>
                <?php echo e($estoque->modelo); ?>

            </div>
            <div class="form-group">
                <strong>Cor:</strong>
                <?php echo e($estoque->cor); ?>

            </div>
            <div class="form-group">
                <strong>Ano de Fabricação:</strong>
                <?php echo e($estoque->anoFabricacao); ?>

            </div>
            <div class="form-group">
                <strong>Ano do Modelo:</strong>
                <?php echo e($estoque->modeloAno); ?>

            </div>
            <div class="form-group">
                <strong>Combustível:</strong>
                <?php echo e($estoque->combustivel); ?>

            </div>
            <div class="form-group">
                <strong>Preço:</strong>
                <?php echo e($estoque->preco); ?>

            </div>
            <div class="form-group">
                <strong>Detalhes:</strong>
                <?php echo e($estoque->detalhes); ?>

            </div>
            <div class="form-group">
                <strong>Imagem:</strong>
                <?php echo e($estoque->imagem); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alana\Downloads\P1 - Alana\resources\views/estoquesmanager/show.blade.php ENDPATH**/ ?>