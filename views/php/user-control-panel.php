<?php
require_once "../includes/valida-acesso.inc.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/control-panel.css">
    <link rel="icon" type="image/x-icon" href="../assets/icons/favicon.png">
    <title>Mov Financeiras</title>
</head>

<body>

    <?php
    require "../includes/include-header-sidebar.php";
    ?>


    <div class="user-view-filters">
        <select name="months" id="months-filter">
            <option value="Janeiro">Janeiro</option>
            <option value="Fevereiro">Fevereiro</option>
            <option value="Março">Março</option>
            <option value="Abril">Abril</option>
            <option value="Maio">Maio</option>
            <option value="Junho">Julho</option>
            <option value="Julho">Julho</option>
            <option value="Agosto">Agosto</option>
            <option value="Setembro">Setembro</option>
            <option value="Outubro">Outubro</option>
            <option value="Novembro">Novembro</option>
            <option value="Dezembro">Dezembro</option>
        </select>

        <label class="lbl-filter" for="">Filtro</label>
        <input type="text" id="txt-field-filter">
        <button type="button" class="btn-filter"><img id="glass-filter-icon" src="../assets/icons/filter-icon.png"></button>

        <label class="lbl-filter" for="">Visualização</label>
        <select name="" id=""></select>
    </div>

    <div class="div-add-mov-cate">
        <button id="btn-add-movimenta" onclick="goToMovimentacoes()">+ Movimentação</button>
        <script>
            function goToMovimentacoes() {
                window.location.href = "./form-cad-movi.php";
            }
        </script>
        <button id="btn-manage-category" onclick="goToGerenciamentoCategorias()"> <img id="config-icon" src="../assets/icons/config-icon.png" alt="">Categorias</button>
        <script>
            function goToGerenciamentoCategorias() {
                window.location.href = "./form-gerenciamento-categorias.php";
            }
        </script>
    </div>

    <?php
    require_once "../includes/conexao-movimentacoes.inc.php";
    require_once "../includes/conectar.inc.php";
    require_once "../includes/criar-banco.inc.php";
    require_once "../includes/abrir-banco.inc.php";
    require_once "../includes/definir-utf8.inc.php";
    require_once "../includes/criar-tabela-movimentacoes.inc.php";
    require_once "../includes/apresentar-movimentacoes.inc.php"
    ?>

    <script src="../js/sidebar-btn-activate.js"></script>
    <script src="../js/functions-open-close-forms.js"></script>
</body>

</html>