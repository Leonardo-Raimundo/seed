<?php
 $nome      = $conexao->escape_string(trim($_POST['nome']));
 $email     = $conexao->escape_string(trim($_POST['email']));
 $senha     = $conexao->escape_string(trim($_POST['senha']));

 $emailCriptografado = hash("sha512", $email);
 $senhaCriptografada = hash("sha512", $senha);


 $sql = "INSERT $nomeDaTabela VALUES(
          null,
          '$nome',
          '$emailCriptografado',
          '$senhaCriptografada')";

 $conexao->query($sql) or exit($conexao->error);

 $_SESSION['conectado'] = true;
 
 header("location: ../php/user-control-panel.php");


 

    

