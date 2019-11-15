<?php

require_once "../model/conexao.php";

require_once "../model/classes/medicamento.php";

require_once "../model/classes/usuario.php";

session_start();

$nome = $_POST['nome'];
$indicacao = $_POST['indicacao'];
$dosagem = $_POST['dosagem'];
$horario = $_POST['hora'];
$id = $_SESSION['user']->getIdusuario();

if (isset($_POST["editar"])) {

	$_SESSION['medicamento']->setNome_medicamento($nome);
	$_SESSION['medicamento']->setindicacao_medicamento($indicacao);
	$_SESSION['medicamento']->setHorario_medicamento($horario);
	$_SESSION['medicamento']->setDosagem_medicamento($dosagem);
	
	$idMedicamento = $_POST['editar'];

	$_SESSION['medicamento']->edit($idMedicamento, $id);

header('Location: ../views/medicamentos.php');

} elseif (isset($_POST["salvar"])) {
$_SESSION['medicamento'] = new Medicamento();
$_SESSION['medicamento']->setNome_medicamento($nome);
$_SESSION['medicamento']->setindicacao_medicamento($indicacao);
$_SESSION['medicamento']->setHorario_medicamento($horario);
$_SESSION['medicamento']->setDosagem_medicamento($dosagem);

$_SESSION['medicamento']->add($id);

header('Location: ../views/medicamentos.php');

}elseif (isset($_POST["deletar"])){

	$sql = "Select * from medicamento where nome_medicamento ='". $nome ."' and usuario_idusuario='{$id}'";
	$consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);
	$dado = $consulta->fetch_array();
	$_SESSION['medicamento']->del($dado['idmedicamento'], $id);
	header('Location: ../views/medicamentos.php');
}

?>