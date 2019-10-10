<?php

require_once "../model/conexao.php";

require_once "../model/classes/medicamento.php";

$sql = "Select * from medicamento";
$consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);

$dado = $consulta->fetch_array();

$teste;

for($i=0;$i<4;$i++){
    $teste[$i] = $dado['nome_medicamento'][$i];
}

foreach  ($teste as &$nome_medicamento) {
         echo "<a class='container-data'".$nome_medicamento."</a>";;
        }
    
?>