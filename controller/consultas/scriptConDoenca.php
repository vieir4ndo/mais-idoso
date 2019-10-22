<?php
require_once "../../model/conexao.php";
require_once "../../model/classes/doenca.php";
require_once "../../model/classes/usuario.php";
require_once "../../model/inicializacao.php";

if (isset($_POST["incluir"])){

	$GLOBALS['doenca']->setNome_doenca('');
	$GLOBALS['doenca']->setTipo_doenca('');
	$GLOBALS['doenca']->setSintomas_doenca('');

	header('Location: ../../views/manterDoenca.php');

} else {
 echo "chegou até";

$nome_doenca = $_POST['nome_doenca'];

 $sql = "Select * from doenca where nome_doenca='{$nome_doenca}'";// where doenca_id_doenca=". $GLOBALS['user']->getId_usuario();

 echo $sql;

 $consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);

 if ($consulta!='') {
 	
	$consulta = $consulta->fetch_assoc();

	 $GLOBALS['doenca']->setNome_doenca($consulta['nome_doenca']);
	 echo $GLOBALS['doenca']->getNome_doenca();
	$GLOBALS['doenca']->setTipo_doenca($consulta['tipo_doenca']);
	$GLOBALS['doenca']->setSintomas_doenca($consulta['sintomas_doenca']);

	header('Location: ../../views/manterDoenca.php');

 }else {

 echo 'Doença não encontrada';
 }
}

?>