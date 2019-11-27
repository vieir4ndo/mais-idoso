<?php

require_once "../model/conexao.php";

require_once "../model/classes/consulta.php";

require_once "../model/classes/usuario.php";

session_start();

$tipo_consulta = $_POST['tipo'];
$local_consulta = $_POST['local'];
$data_consulta = $_POST['data'];
$horario_consulta = $_POST['hora'];
$medico_consulta = $_POST['medico'];
$id = $_SESSION['user']->getIdusuario();

echo $data_consulta;

if (isset($_POST["editar"])) {

	$_SESSION['consulta']->setTipo_consulta($tipo_consulta);
	$_SESSION['consulta']->setlocal_consulta($local_consulta);
	$_SESSION['consulta']->setData_consulta($data_consulta);
	$_SESSION['consulta']->setHorario_consulta($horario_consulta);
	$_SESSION['consulta']->setMedico_consulta($medico_consulta);

	$idConsulta = $_POST['editar'];

	$_SESSION['consulta']->edit($idConsulta, $id);

header('Location: ../views/consultas.php');

} elseif (isset($_POST["salvar"])) {
	$_SESSION['consulta'] = new Consulta();
	$_SESSION['consulta']->setTipo_consulta($tipo_consulta);
	$_SESSION['consulta']->setLocal_consulta($local_consulta);
	$_SESSION['consulta']->setData_consulta($data_consulta);
	$_SESSION['consulta']->setHorario_consulta($horario_consulta);
	$_SESSION['consulta']->setMedico_consulta($medico_consulta);
	
	$_SESSION['consulta']->add($id);
	
	header('Location: ../views/consultas.php');
	
	}elseif (isset($_POST["deletar"])){
	
		
	$idConsulta = $_POST['deletar'];

		$sql = "Select * from consulta where usuario_idusuario='{$id}'";
		$consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);
		$dado = $consulta->fetch_array();
		$_SESSION['consulta']->del($idConsulta, $id);
		header('Location: ../views/consultas.php');
	}
	
	?>