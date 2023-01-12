<?php
$sql = "SELECT * FROM $nomeDaTabela2 ORDER BY data ASC";

$resultado = $conexao->query($sql) or exit($conexao->error);

$quantosRegRetornaram = $conexao->affected_rows;

if ($quantosRegRetornaram == 0) {
        echo "<p> Nenhum registro de movimentação financeira perecível foi encontrado na base de dados. </p>";
} else {
        echo "<table> 
          <tr>
           <th> Tipo </th>
           <th> Descrição </th>
           <th> Valor (R$) </th>
           <th> Data </th>
           <th> Categoria </th>
          </tr>";

        while ($registro = $resultado->fetch_array()) {
                $tipo      = $registro[1];
                $descricao = $registro[2];
                $valor     = $registro[3];
                $data      = $registro[4];
                $categoria = $registro[5];

                $tipo      = htmlentities($tipo, ENT_QUOTES, "UTF-8");
                $descricao = htmlentities($descricao, ENT_QUOTES, "UTF-8");
                $valor     = htmlentities($valor, ENT_QUOTES, "UTF-8");
                $data      = htmlentities($data, ENT_QUOTES, "UTF-8");
                $categoria = htmlentities($categoria, ENT_QUOTES, "UTF-8");

                // $valorFormatado   = number_format($valor, 2, ",", ".");
                echo "<tr>
           <td> $tipo </td>
           <td> $descricao </td>
           <td> $valor </td>
           <td> $data </td>
           <td> $categoria </td>
        </tr>";
        }
        echo "</table>";
}
