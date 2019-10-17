<?php

 require_once "../../model/conexao.php";
 require_once "../../model/classes/medicamento.php";
 require_once "../../model/classes/usuario.php";

 echo "chegou até";

$nome_medicamento = $_POST['nome_medicamento'];

 $sql = "Select nome_medicamento from medicamento";// where medicamento_id_medicamento=". $GLOBALS['user']->getId_usuario();

 $consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);

 $consulta = $consulta->fetch_array();

 $busca = '';

 foreach ($consulta as &$value) {
 	if ($value == $nome_medicamento ){
 		$busca = $value;
 	}
 }

 if ($busca = '') {
 	echo 'Medicamento não existe';
 }else {
 	$sql = "Select * from medicamento where nome_medicamento =".$busca."";// and medicamento_id_medicamento=". $GLOBALS['user']->getId_usuario();

 	$consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);

 	$consulta = $consulta->fetch_array();

 	header('Location: ../../views/manterMedicamentos.php');
 }

?>