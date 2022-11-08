

<?php $__env->startSection('content'); ?>
<div class="jumbotron">
    <h1 class="display-4">Fornecedor</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-primary" href="<?php echo e(route('fornecedoresmanager.index')); ?>">Voltar</a>
    <p></p>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                <?php echo e($fornecedor->nome); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefone:</strong>
                <?php echo e($fornecedor->telefone); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CEP:</strong>
                <?php echo e($fornecedor->cep); ?>

            </div>
        </div>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Logradouro:</strong>
                <?php echo e($fornecedor->logradouro); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cidade:</strong>
                <?php echo e($fornecedor->cidade); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Estado:</strong>
                <?php echo e($fornecedor->estado); ?>

            </div>
        </div>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Razão social:</strong>
                <?php echo e($fornecedor->razao_social); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data:</strong>
                <?php echo e($fornecedor->updated_at); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\LARAVEL\gal_oficial_atualizado\resources\views/fornecedoresmanager/show.blade.php ENDPATH**/ ?>