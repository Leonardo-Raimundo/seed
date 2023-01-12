<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/control-panel.css">
    <link rel="icon" type="image/x-icon" href="../assets/icons/favicon.png">
    <title>Categorias</title>
</head>

<body>
    <?php
    require "../includes/include-header-sidebar.php";
    ?>

    <div class="form-popup">
        <form action="form-cad-categorias.php" class="form-container" method="post">
            <fieldset style="height: 30vh; width: 39vw;">

                <h1 class="h1-forms">Cadastrar Categoria</h1>

                <label class="label-alinha">Nome da Categoria:</label>
                <input type="text" name="novaCategoria">

                <div class="div-cad-ou-log">
                    <button type="submit" class="btn-cadastrar" name="cadastrarCategoria" style="margin-left: 3vw; margin-top:3vh;">Cadastrar</button>
                </div>
            </fieldset>
        </form>
    </div>

    <?php
    require_once "../includes/conexao-categoria.inc.php";
    require_once "../includes/conectar.inc.php";
    require_once "../includes/criar-banco.inc.php";
    require_once "../includes/abrir-banco.inc.php";
    require_once "../includes/definir-utf8.inc.php";
    require_once "../includes/criar-tabela-categoria.inc.php";

    if (isset($_POST['cadastrarMovimentacao'])) {
        require_once "../includes/cadastrar-categoria.inc.php";
    }

    require_once "../includes/desconectar.inc.php";
    ?>

</body>

</html>