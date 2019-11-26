<?php

require_once "../model/conexao.php";

require_once "../model/classes/consulta.php";

echo "chegou até";

$tipo_consulta = $_POST['tipo'];
$local_consulta = $_POST['local'];
$horario_consulta = $_POST['horario'];
$medico_consulta = $_POST['medico'];

$GLOBALS['consulta']->setTipo_consulta($tipo_med);
$GLOBALS['consulta']->setlocal_consulta($local);
$GLOBALS['consulta']->setHorario_consulta($horario);
$GLOBALS['consulta']->setMedico_consulta($medico);

if (isset($_POST["editar"])) {

 //   echo "aqui";
$sql = "Select * from consulta where tipo_consulta ='". $tipo_consulta ."'";
$tipo_consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);

$tipo_consulta = $consulta->fetch_array();

$GLOBALS['consulta']->edit($tipo_consulta['id_consulta']);

header('Location: ../views/consulta.php');

} elseif (isset($_POST["salvar"])) {

$GLOBALS['consulta']->add();

header('Location: ../views/consulta.php');

}else{
	$sql = "Select * from consulta where tipo_consulta ='". $tipo_consulta ."'";
	$consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);
	$tipo_consulta = $consulta->fetch_array();
	$GLOBALS['consulta']->del($tipo_consulta['id_consulta']);
	header('Location: ../views/consulta.php');
}



?>