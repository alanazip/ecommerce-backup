

<?php $__env->startSection('content'); ?>
<div class="jumbotron">
    <h1 class="display-4">Cadastro de Veículos</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-success" href="<?php echo e(route('estoquesmanager.create')); ?>">Adicionar Novo Veículo</a>
    <p></p>
    <?php if($message = Session::get('success')): ?>
    <p></p>
    <div class="alert alert-success">
        <p><?php echo e($message); ?></p>
    </div>
    <?php endif; ?>

    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Cor</th>
            <th>Ano de Fabricação</th>
            <th>Ano do Modelo</th>
            <th>Combustivel</th>
            <th>Preço</th>
            <th width="280px">Ação</th>
        </tr>
        <?php $__currentLoopData = $estoques; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estoque): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($estoque->marca); ?></td>
            <td><?php echo e($estoque->modelo); ?></td>
            <td><?php echo e($estoque->cor); ?></td>
            <td><?php echo e($estoque->anoFabricacao); ?></td>
            <td><?php echo e($estoque->modeloAno); ?></td>
            <td><?php echo e($estoque->combustivel); ?></td>
            <td><?php echo e($estoque->preco); ?></td>
            <td>
                <form action="<?php echo e(route('estoquesmanager.destroy', $estoque->id)); ?>" method="POST">

                    <a class="btn btn-info" href="<?php echo e(route('estoquesmanager.show', $estoque->id)); ?>">Exibir Detalhes</a>

                    <a class="btn btn-primary" href="<?php echo e(route('estoquesmanager.edit', $estoque->id)); ?>">Editar</a>

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <?php echo $estoques->links(); ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alana\Downloads\P1 - Alana\resources\views/estoquesmanager/index.blade.php ENDPATH**/ ?>