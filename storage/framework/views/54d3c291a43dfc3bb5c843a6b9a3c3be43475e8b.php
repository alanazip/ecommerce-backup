

<?php $__env->startSection('content'); ?>
<div class="jumbotron">
    <h1 class="display-4">Projeto Laravel - Cadastro de Cursos</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-success" href="<?php echo e(route('cursosmanager.create')); ?>">Criar Novo Curso</a>
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
            <th>Nome</th>
            <th>Descrição</th>
            <th>Imagem</th>
            <th width="280px">Ação</th>
        </tr>
        <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($curso->nome); ?></td>
            <td><?php echo e($curso->descricao); ?></td>
            <td><?php echo e($curso->imagem); ?></td>
            <td>
                <form action="<?php echo e(route('cursosmanager.destroy', $curso->id)); ?>" method="POST">

                    <a class="btn btn-info" href="<?php echo e(route('cursosmanager.show', $curso->id)); ?>">Exibir</a>

                    <a class="btn btn-primary" href="<?php echo e(route('cursosmanager.edit', $curso->id)); ?>">Editar</a>

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <?php echo $cursos->links(); ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alana\Downloads\P1 - Alana\resources\views/cursosmanager/index.blade.php ENDPATH**/ ?>