<?php
require_once "../../model/conexao.php";
require_once "../../model/classes/medicamento.php";
require_once "../../model/classes/usuario.php";
require_once "../../model/inicializacao.php";

if (isset($_POST["incluir"])){

	$GLOBALS['medicamento']->setNome_medicamento('');
	$GLOBALS['medicamento']->setindicacao_medicamento('');
	$GLOBALS['medicamento']->setHorario_medicamento('');
	$GLOBALS['medicamento']->setDosagem_medicamento('');

	header('Location: ../../views/manterMedicamentos.php');

} else {
 echo "chegou até";

$nome_medicamento = $_POST['nome_medicamento'];

 $sql = "Select * from medicamento where nome_medicamento='{$nome_medicamento}'";// where medicamento_id_medicamento=". $GLOBALS['user']->getId_usuario();

 echo $sql;

 $consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);

 if ($consulta!='') {
 	
	$consulta = $consulta->fetch_assoc();

	 $GLOBALS['medicamento']->setNome_medicamento($consulta['nome_medicamento']);
	 echo $GLOBALS['medicamento']->getNome_medicamento();
	$GLOBALS['medicamento']->setindicacao_medicamento($consulta['indicacao_medicamento']);
	$GLOBALS['medicamento']->setHorario_medicamento($consulta['horario_medicamento']);
	$GLOBALS['medicamento']->setDosagem_medicamento($consulta['dosagem_medicamento']);
	 
	header('Location: ../../views/manterMedicamentos.php');

 }else {

 echo 'Medicamento não encontrado';
 }
}

?>