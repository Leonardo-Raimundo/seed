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
        <button class="btn-cadastrar" name="cadastrarCategoria" onclick="goToCadastrarCategorias()" style="margin-left: 68.3vw; margin-top:15vh;">Nova Categoria</button>
        <script>
            function goToCadastrarCategorias() {
                window.location.href = "./form-cad-categorias.php";
            }
        </script>
        <form action="form-gerenciamento-categorias.php" class="form-container" method="post">
            <fieldset style="margin-top: 1vh;">
                <h1 class="h1-forms" style=" font-size: 3rem;">Gerenciamento de Categorias</h1>
                <div class="div-cad-ou-log">
                    <button type="submit" class="btn-excluir" style="margin-left: 28.5vw;">Excluir selecionadas</button>
                </div>
                <label class="label-alinha" style="font-size: 1.5rem;">Categorias:</label>

            </fieldset>
        </form>
    </div>

    <?php
    require_once "../includes/conexao-movimentacoes.inc.php";
    require_once "../includes/conectar.inc.php";
    require_once "../includes/criar-banco.inc.php";
    require_once "../includes/abrir-banco.inc.php";
    require_once "../includes/definir-utf8.inc.php";
    require_once "../includes/criar-tabela-movimentacoes.inc.php";

    if (isset($_POST['cadastrarMovimentacao'])) {
        require_once "../includes/cadastrar-movimentacoes.inc.php";
    }

    require_once "../includes/desconectar.inc.php";
    ?>

</body>

</html>