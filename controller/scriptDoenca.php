<?php

require_once "../model/conexao.php";

require_once "../model/classes/doenca.php";

echo "chegou até";

$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$sintomas = $_POST['sintomas'];

$GLOBALS['doenca']->setNome_doenca($nome);
$GLOBALS['doenca']->setTipo_doenca($tipo);
$GLOBALS['doenca']->setSintomas_doenca($sintomas);

if (isset($_POST["editar"])) {

 //   echo "aqui";
$sql = "Select * from doenca where nome_doenca ='". $nome ."'";
$consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);

$dado = $consulta->fetch_array();

$GLOBALS['doenca']->edit($dado['id_doenca']);

header('Location: ../views/doenca.php');

} elseif (isset($_POST["salvar"])) {

$GLOBALS['doenca']->add();

header('Location: ../views/doenca.php');

}else{
	$sql = "Select * from doenca where nome_doenca ='". $nome ."'";
	$consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);
	$dado = $consulta->fetch_array();
	$GLOBALS['doenca']->del($dado['id_doenca']);
	header('Location: ../views/doenca.php');
}


?>