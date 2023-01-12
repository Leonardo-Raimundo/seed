<?php
$sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela2 (
        id INT PRIMARY KEY AUTO_INCREMENT,
        tipo VARCHAR(300),
        descricao VARCHAR(300),
        valor DECIMAL(10,2),
        data DATE,
        categoria VARCHAR(300)) ENGINE=innoDB";

$conexao->query($sql) or exit($conexao->error);
