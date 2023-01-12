<?php
$email     = $conexao->escape_string(trim($_POST['email']));
$senha     = $conexao->escape_string(trim($_POST['senha']));

$emailCriptografado = hash("sha512", $email);
$senhaCriptografada = hash("sha512", $senha);

$sql = "SELECT email, senha FROM $nomeDaTabela WHERE email='$emailCriptografado' AND senha='$senhaCriptografada'";

$conexao->query($sql) or exit($conexao->error);

if ($conexao->affected_rows == 0) {
    exit("<p> Credenciais de acesso incorretas. Tente novamente! </p>");
}

$_SESSION['conectado'] = true;

header("location: ../php/user-control-panel.php");
