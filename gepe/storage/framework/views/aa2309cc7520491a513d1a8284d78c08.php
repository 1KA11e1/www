<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Personagens</title>
</head>

<body>
    <html>
    

    <?php $__env->startSection('title'); ?>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Adicionar Ficha de Personagem</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <form>
                            <label for="exampleInputEmail1">UUID:</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="UUID">

                            <label>Jogador:</label>
                            <select class="form-control">
                                <?php $__empty_1 = true; $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <option value="<?php echo e($player->id); ?>"><?php echo e($player->name); ?></option><br>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <?php endif; ?>
                            </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            placeholder="Nome da personagem">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Slug:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Slug">
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="col-md-6">
                    <div class="form-group">

                        <label>Raça:</label>
                        <select class="form-control">
                            <?php $__empty_1 = true; $__currentLoopData = $races; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $race): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <option value="<?php echo e($race->id); ?>"><?php echo e($race->name); ?></option><br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <?php endif; ?>
                        </select>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label>Profissão:</label>
                        <select class="form-control">
                            <?php $__empty_1 = true; $__currentLoopData = $professions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profession): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <option value="<?php echo e($profession->id); ?>"><?php echo e($profession->name); ?></option><br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <?php endif; ?>
                        </select>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <div class="card-body">
                                            <label class="form_label">Força (2 a 4)</label>
                                            <input type="number" name="strenght" value="2" min="2"
                                                max="4" required><br>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="card-body">
                                            <label class="form_label">Agilidade (2 a 4)</label>
                                            <input type="number" name="agility" value="2" min="2"
                                                max="4" required><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <div class="card-body">
                                            <label class="form_label">Astúcia (2 a 4)</label>
                                            <input type="number" name="wits" value="2" min="2"
                                                max="4" required><br>

                                        </div>
                                    </div>
                                    <div>
                                        <div class="card-body">
                                            <label class="form_label">Empatia (2 a 4)</label>
                                            <input type="number" name="empathy" value="2" min="2"
                                                max="4" required><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <div class="row">
                <div>
                    <input type="hidden" class="btn btn-primary" name="action" value="Enviar">
                    <button type="submit" class="btn btn-primary" name="Enviar" class="submit_btn">Cadastrar</button>
                    <button type="reset" class="btn btn-primary" name="Limpar" class="reset_btn">Limpar</button>
                </div>
            </div>
            <br>
            </form>
        </div>
    </div>
    <?php $__env->stopSection(); ?>

    </html>


</body>

</html>

<?php echo $__env->make('template.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\gepe\resources\views/character/create.blade.php ENDPATH**/ ?>