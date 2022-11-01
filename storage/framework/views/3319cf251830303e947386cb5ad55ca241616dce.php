

<?php $__env->startSection('content'); ?>
<div class="jumbotron">
    <h1 class="display-4">Mensagens recebidas</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-success" href="<?php echo e(route('site.contatos')); ?>">Enviar Nova Mensagem</a>
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
            <th>Mensagem</th>
            <th>Data</th>
            <th width="280px">Ação</th>
        </tr>
        <?php $__currentLoopData = $contatos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="col-6">
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($contato->nome); ?></td>
            <td><?php echo e($contato->mensagem); ?></td>
            <td><?php echo e($contato->created_at); ?></td>
            <td>
                <form action="<?php echo e(route('contatosmanager.destroy', $contato->id)); ?>" method="POST">
                    
                    <a class="btn btn-info" href="<?php echo e(route('contatosmanager.show', $contato->id)); ?>" value="Exibir">Exibir</a>

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <button type="submit" class="btn btn-danger">Excluir</button>

                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <?php echo $contatos->links(); ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alana\Downloads\P1 - Alana\resources\views/contatosmanager/index.blade.php ENDPATH**/ ?>