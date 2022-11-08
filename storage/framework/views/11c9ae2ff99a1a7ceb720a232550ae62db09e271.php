

<?php $__env->startSection('content'); ?>
<div class="jumbotron">
    <h1 class="display-4">Cadastro de Jogos</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-success font-weight-bold" href="<?php echo e(route('produtosmanager.create')); ?>">Adicionar Novo Jogo</a>
    <p></p>
    <?php if($message = Session::get('success')): ?>
    <p></p>
    <div class="alert alert-success">
        <p><?php echo e($message); ?></p>
    </div>
    <?php endif; ?>

    <table class="table table-bordered text-white">
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Descricao</th>
            <th>Preco</th>
            <th>Quantidade</th>
            <th>Categoria</th>
            <th>Fornecedor</th>
            <th width="280px">Ação</th>
        </tr>
        <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($produto->nome); ?></td>
            <td><?php echo e($produto->descricao); ?></td>
            <td><?php echo e($produto->preco); ?></td>
            <td><?php echo e($produto->quantidade); ?></td>
            <td><?php echo e($produto->categoria_id); ?></td>
            <td><?php echo e($produto->fornecedor_id); ?></td>
            <td>
                <form action="<?php echo e(route('produtosmanager.destroy', $produto->id)); ?>" method="POST">

                    <a class="btn btn-info" href="<?php echo e(route('produtosmanager.show', $produto->id)); ?>">Exibir Detalhes</a>

                    <a class="btn btn-primary" href="<?php echo e(route('produtosmanager.edit', $produto->id)); ?>">Editar</a>

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <?php echo $produtos->links(); ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\LARAVEL\gal_oficial_atualizado\resources\views/produtosmanager/index.blade.php ENDPATH**/ ?>