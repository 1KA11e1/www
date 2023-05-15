<html>


<?php $__env->startSection('title'); ?>
    Lista de Jogadores
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class='container-fluid'>
        <p><a class='btn btn-primary btn-sm' href="<?php echo e(route('player.create')); ?>"><i class='fa fa-plus'></i> Cadastrar Novo
            </a></p>
        <div class="card">
            <table class="table table-lg">
                <tr class="table-primary">
                    <th>Nome</th>
                    <th colspan="4">Email</th>
                </tr>

                <?php $__empty_1 = true; $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($player->name); ?></td>
                        <td><?php echo e($player->email); ?></td>
                        <!-- As três views abaixo requerem uuid do registro, conforme rota -->
                        <td><a href="<?php echo e(route('player.show', $player->uuid)); ?>"><i class='fa fa-eye' title="Detalhes"></i></a>
                        </td>
                        <td><a href="<?php echo e(route('player.update', $player->uuid)); ?>"><i class='fa fa-edit'
                                    title="Editar"></i></a>
                        </td>
                        <td><a href="<?php echo e(route('player.delete', $player->uuid)); ?>"><i class='fa fa-trash'
                                    title="Excluir"></i></a></td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan=5>Não encontramos registros.</td>
                    </tr>
                <?php endif; ?>
            </table>
            <p><a class='btn btn-primary btn-sm' href="../">Voltar</a></p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

</html>

<?php echo $__env->make('template.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\gepe\resources\views/player/list.blade.php ENDPATH**/ ?>