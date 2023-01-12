<?php
$tipo      = $conexao->escape_string(trim($_POST['tipoMovimentacao']));
$descricao = $conexao->escape_string(trim($_POST['descricao']));
$valor     = $conexao->escape_string(trim($_POST['valor']));
$data      = $conexao->escape_string(trim($_POST['data']));
$categoria  = $conexao->escape_string(trim($_POST['categoria']));

$sql = "INSERT $nomeDaTabela2 VALUES(
            NULL,
          '$tipo',
          '$descricao',
          $valor,
          '$data',
          '$categoria')";

$conexao->query($sql) or exit($conexao->error);

echo "<p> Dados do aluno cadastrado com sucesso! </p>";
