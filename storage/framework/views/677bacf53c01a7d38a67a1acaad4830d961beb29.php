

<?php $__env->startSection('content'); ?>
<div class="jumbotron">
    <h1 class="display-4">fornecedores</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-warning" href="<?php echo e(route('site.fornecedores')); ?>">Criar novo fornecedor</a>
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
            <th>Telefone</th>
            <th>CEP</th>
            <th>Logradouro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Razão Social</th>
            <th width="280px">Data/Hora de Cadastro</th>
        </tr>
        <?php $__currentLoopData = $fornecedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fornecedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="col-6">
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($fornecedor->nome); ?></td>
            <td><?php echo e($fornecedor->telefone); ?></td>
            <td><?php echo e($fornecedor->cep); ?></td>
            <td><?php echo e($fornecedor->logradouro); ?></td>
            <td><?php echo e($fornecedor->cidade); ?></td>
            <td><?php echo e($fornecedor->estado); ?></td>
            <td><?php echo e($fornecedor->razao_social); ?></td>
            <td><?php echo e($fornecedor->created_at); ?></td>
            <td>
                <form action="<?php echo e(route('fornecedoresmanager.destroy', $fornecedor->id)); ?>" method="POST">
                    
                    <a class="btn btn-info" href="<?php echo e(route('fornecedoresmanager.show', $fornecedor->id)); ?>" value="Exibir">Exibir</a>

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <button type="submit" class="btn btn-danger">Excluir</button>

                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <?php echo $fornecedores->links(); ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LARAVEL\gal_oficial_atualizado\resources\views/fornecedoresmanager/index.blade.php ENDPATH**/ ?>