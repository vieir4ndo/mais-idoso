<?php

require_once "../model/conexao.php";

require_once "../model/classes/medicamento.php";

echo "chegou até";

$nome = $_POST['nome'];
$indicacao = $_POST['indicacao'];
$dosagem = $_POST['dosagem'];
$horario = $_POST['hora'];

$GLOBALS['medicamento']->setNome_medicamento($nome);
$GLOBALS['medicamento']->setindicacao_medicamento($indicacao);
$GLOBALS['medicamento']->setHorario_medicamento($horario);
$GLOBALS['medicamento']->setDosagem_medicamento($dosagem);

if (isset($_POST["editar"])) {

 //   echo "aqui";
$sql = "Select * from medicamento where nome_medicamento ='". $nome ."'";
$consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);

$dado = $consulta->fetch_array();

$GLOBALS['medicamento']->edit($dado['idmedicamento']);

header('Location: ../views/medicamentos.php');

} elseif (isset($_POST["salvar"])) {

$GLOBALS['medicamento']->add();

header('Location: ../views/medicamentos.php');

}elseif (isset($_POST["deletar"])){

	$sql = "Select * from medicamento where nome_medicamento ='". $nome ."'";
	$consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);
	$dado = $consulta->fetch_array();
	$GLOBALS['medicamento']->del($dado['idmedicamento']);
	header('Location: ../views/medicamentos.php');
}

?>