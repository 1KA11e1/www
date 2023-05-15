<html>


<?php $__env->startSection('title'); ?>
    Lista de Ascendências
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class='container-fluid'>
        <p><a class='btn btn-primary btn-sm' href="<?php echo e(route('race.create')); ?>"><i class='fa fa-plus'></i> Cadastrar Novo
            </a></p>
        <div class="card">
            <table class="table table-lg">
                <tr class="table-primary">
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Talento</th>
                    <th colspan="4">Descrição do Talento</th>
                </tr>

                <?php $__empty_1 = true; $__currentLoopData = $races; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $race): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($race->name); ?></td>
                        <td><?php echo e($race->description); ?></td>
                        <td><?php echo e($race->talent_name); ?></td>
                        <td><?php echo e($race->talent_description); ?></td>
                        <!-- As três views abaixo requerem uuid do registro, conforme rota -->
                        <td><a href="<?php echo e(route('race.show', $race->uuid)); ?>"><i class='fa fa-eye' title="Detalhes"></i></a>
                        </td>
                        <td><a href="<?php echo e(route('race.update', $race->uuid)); ?>"><i class='fa fa-edit' title="Editar"></i></a>
                        </td>
                        <td><a href="<?php echo e(route('race.delete', $race->uuid)); ?>"><i class='fa fa-trash'
                                    title="Excluir"></i></a>
                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan=7>Não encontramos registros.</td>
                    </tr>
                <?php endif; ?>
            </table>
            <p><a class='btn btn-primary btn-sm' href="../">Voltar</a></p>

        </div>
    </div>
<?php $__env->stopSection(); ?>

</html>

<?php echo $__env->make('template.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\gepe\resources\views/race/list.blade.php ENDPATH**/ ?>