<?php

require_once "../model/conexao.php";

require_once "../model/classes/alimentacao.php";

require_once "../model/classes/usuario.php";

session_start();

$alimento = $_POST['alimento'];
$grupo = $_POST['grupo'];
$razao = $_POST['razao'];
$id = $_SESSION['user']->getIdusuario();


if (isset($_POST["editar"])){


$idrestricaoAlimentar = $_POST['editar'];

// alimentacao ou restricao_alimentar
$_SESSION['alimentacao']->setAlimento_restricaoAlimentar($alimento);
$_SESSION['alimentacao']->setGrupo_restricaoAlimentar($grupo);
$_SESSION['alimentacao']->setRazao_restricaoAlimentar($razao);

$_SESSION['alimentacao']->edit($idrestricaoAlimentar, $id);

header('Location: ../views/alimentacao.php');


} elseif (isset($_POST["salvar"])) {

	$_SESSION['alimentacao'] = new alimentacao();
	$_SESSION['alimentacao']->setAlimento_restricaoAlimentar($alimento);
	$_SESSION['alimentacao']->setGrupo_restricaoAlimentar($grupo);
	$_SESSION['alimentacao']->setRazao_restricaoAlimentar($razao);

	$_SESSION['alimentacao']->add($id);


header('Location: ../views/alimentacao.php');

} elseif (isset($_POST["deletar"])) {
	# code...

$idrestricaoAlimentar = $_POST['deletar'];

			$sql = "Select * from restricaoAlimentar where alimento_restricaoAlimentar ='". $alimento ."' and usuario_idusuario=".$id;

		$consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);


$dado = $consulta->fetch_array();

$_SESSION['alimentacao']->del($id, $idrestricaoAlimentar);
header('Location: ../views/alimentacao.php');
	
	
}



?>