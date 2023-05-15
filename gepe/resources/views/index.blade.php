<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>

<body>
    <div id="cabecalho">
        <div id="LC">
            <a id="login" href="/forbidden-lands/html/form-login.php">Login</a>
            <a id="criar" href="/forbidden-lands/html/form-usuario.php">Criar Usuario</a>
        </div>
        <div id="logotitulo">
            <img src="css/img/logo.png"></img>
            <h1>GEPE</h1>
            <p>Gerador de Personagens</p>
        </div>
    </div>
    <div class="botoes">
        <a href="html/form-login.php"><button id="bt1">Criar Ficha</button></a>
        <a href="html/form-login.php"><button id="bt2">Acessar Ficha</button></a>
    </div>
    <h1>GEPE - Gerenciador de Fichas de Personagem</h1>
    <table>
        <tr>
            <td><a href="{{ route('character.list') }}">Lista de Personagens</a></td>
        </tr>
        <tr>
            <td><a href="{{ route('race.list') }}">Lista de Ascendências</a></td>
        </tr>
        <tr>
            <td><a href="{{ route('profession.list') }}">Lista de Profissões</a></td>
        </tr>
        <tr>
            <td><a href="{{ route('player.list') }}">Lista de Jogadores</a></td>
        </tr>
    </table>
</body>

</html>
