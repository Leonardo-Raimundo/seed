<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/control-panel.css">
    <link rel="icon" type="image/x-icon" href="../assets/icons/favicon.png">
    <title>Movimentações</title>
</head>

<body>
    <?php
    require "../includes/include-header-sidebar.php";
    ?>

    <div class="form-popup">
        <form action="form-cad-movi.php" class="form-container" method="post">
            <fieldset>
                <!-- <button type="button" class="btn-fechar-form" onclick="closeFormSignUp()"><img id="ico-fechar" src="../assets/icons/fechar-ico.png" alt=""></button> -->

                <h1 class="h1-forms">Cadastrar Movimentação</h1>

                <label class="label-alinha" for="type">Tipo:</label>
                <select name="tipoMovimentacao" id="type-category">
                    <option value="despesa">Despesa</option>
                    <option value="receita">Receita</option>
                </select> <br>

                <label class="label-alinha">Descrição:</label>
                <input type="text" name="descricao" required> <br>

                <label class="label-alinha">Valor R$:</label>
                <input type="number" name="valor" min="0" step="0.01" required> <br>

                <label class="label-alinha">Data:</label>
                <input type="date" name="data" required> <br>

                <label class="label-alinha">Categoria:</label>
                <select name="categoria" id="category">
                    <option value="Mercado">Mercado</option>
                    <option value="Farmácia">Farmácia</option>
                    <option value="Aluguel">Aluguel</option>
                    <option value="Academia">Academia</option>
                    <option value="Fatura Cartão">Fatura Cartão</option>
                </select> <br>

                <div class="div-cad-ou-log">
                    <button type="submit" class="btn-cadastrar" name="cadastrarMovimentacao" style="margin-left: 3vw; margin-top:3vh;">Confirmar</button>
                </div>
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