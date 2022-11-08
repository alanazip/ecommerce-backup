

<?php $__env->startSection('content'); ?>
<div class="jumbotron">
    <h1 class="display-4">Cadastro de Categorias</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-success font-weight-bold" href="<?php echo e(route('site.categorias')); ?>">Adicionar Nova Categoria</a>
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
            <th>Categoria:</th>
        </tr>
        <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($categoria->nome); ?></td>
            <td>
                <form action="<?php echo e(route('categoriasmanager.destroy', $categoria->id)); ?>" method="POST">

                    <a class="btn btn-info" href="<?php echo e(route('categoriasmanager.show', $categoria->id)); ?>">Exibir Detalhes</a>

                    <a class="btn btn-primary" href="<?php echo e(route('categoriasmanager.edit', $categoria->id)); ?>">Editar</a>

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <?php echo $categorias->links(); ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\LARAVEL\gal_oficial_atualizado\resources\views/categoriasmanager/index.blade.php ENDPATH**/ ?>