<?php
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela (
         id INT PRIMARY KEY AUTO_INCREMENT,
         nome VARCHAR(300),
         email VARCHAR(300),
         senha VARCHAR(130)
         ) ENGINE=innoDB";

 $conexao->query($sql) or exit($conexao->error);
