<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Ascendências</title>
</head>

<body>
    <h1>Formulário de Cadastro</h1>
    <form class="form" method="post" action="<?php echo e(route('race.store')); ?>">
        <?php echo csrf_field(); ?>
        <div class="form_grupo">
            <label class="form_label">UUID</label>
            <input type="text" name="uuid" placeholder="UUID" required><br>
            <label class="form_label">Nome</label>
            <input type="text" name="name" placeholder="Nome" required><br>
            <label class="form_label">Slug</label>
            <input type="text" name="slug" placeholder="Slug" required><br>
            <label class="form_label">Descrição</label>
            <input type="text" name="description" placeholder="Descrição"><br>
            <label class="form_label">Talento</label>
            <input type="text" name="talent_name" placeholder="Nome do talento" required><br>
            <label class="form_label">Descrição do Talento</label>
            <input type="text" name="talent_description" placeholder="Descrição do talento"><br>
        </div>
        <div class="submit">
            <button type="reset" name="Limpar" class="reset_btn">Limpar</button>
            <input type="hidden" name="action" value="Enviar">
            <button type="submit" name="Enviar" class="submit_btn">Cadastrar</button>
        </div>
        <div class="back">
            <a href="/create/list">Voltar</a>
        </div>

    </form>

</body>

</html>
<?php /**PATH C:\laragon\www\gepe\resources\views/race/create.blade.php ENDPATH**/ ?>