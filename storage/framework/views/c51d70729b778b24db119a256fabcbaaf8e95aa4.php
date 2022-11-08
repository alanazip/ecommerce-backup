

<?php $__env->startSection('content'); ?>
<div class="jumbotron">
    <h1 class="display-4 font-weight-bold">Adicionar Novo Jogo</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-warning" href="<?php echo e(route('produtosmanager.index')); ?>">Voltar</a>
    <p></p>

    <?php if($errors->any()): ?>
    <p></p>
    <div class="alert alert-danger">
        <strong>Ops!</strong>Houve algum problema com a entrada de dados.<br><br>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>

    <form action="<?php echo e(route('produtosmanager.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="input" name="nome" class="form-control" placeholder="Nome">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descrição:</strong>
                    <input type="input" name="descricao" class="form-control" placeholder="Descrição">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Preço:</strong>
                    <input type="input" name="preco" class="form-control" placeholder="Preço">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Quantidade:</strong>
                    <input type="input" name="quantidade" class="form-control" placeholder="Quantidade">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Categoria:</strong>
                    <input type="input" name="categoria_id" class="form-control" placeholder="Categoria">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fornecedor:</strong>
                    <input type="input" name="fornecedor_id" class="form-control" placeholder="Fornecedor">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>

    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\LARAVEL\gal_oficial_atualizado\resources\views/produtosmanager/create.blade.php ENDPATH**/ ?>