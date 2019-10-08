<?php

require_once "../model/conexao.php";

require_once "../model/classes/alimentacao.php";

echo "chegou até";

$alimento = $_POST['alimento'];
$grupo = $_POST['grupo'];
$razao = $_POST['razao'];


$GLOBALS['alimentacao']->setAlimento_restricaoAlimentar($alimento);
$GLOBALS['alimentacao']->setGrupo_restricaoAlimentar($grupo);
$GLOBALS['alimentacao']->setRazao_restricaoAlimentar($razao);


if (isset($_POST["editar"])) {

 //   echo "aqui";
$sql = "Select * from restricaoAlimentar where Alimento_restricaoAlimentar ='". $alimento ."'";
$consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);


$dado = $consulta->fetch_array();


$GLOBALS['alimentacao']->edit($dado['id_restricaoAlimentar']);

//header('Location: ../views/alimentacao.html');

} elseif (isset($_POST["salvar"])) {

$GLOBALS['alimentacao']->add();

header('Location: ../views/alimentacao.html');

}else{
	$sql = "Select * from restricaoAlimentar where alimento_restricaoAlimentar ='". $alimento ."'";
$consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);


$dado = $consulta->fetch_array();
	$GLOBALS['alimentacao']->del($dado['id_restricaoAlimentar']);
	//header('Location: ../views/alimentacao.html');
}



?>