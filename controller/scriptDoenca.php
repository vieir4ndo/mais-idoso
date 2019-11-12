<?php
require_once "../model/conexao.php";
require_once "../model/classes/doenca.php";
session_start();

$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$sintomas = $_POST['sintomas'];

$GLOBALS['doenca']->setNome_doenca($nome);
$GLOBALS['doenca']->setTipo_doenca($tipo);
$GLOBALS['doenca']->setSintomas_doenca($sintomas);

$_SESSION['user'] = unserialize(serialize($_SESSION['user']));

if (isset($_POST["editar"])) {
$sql = "Select * from doenca where nome_doenca ='". $nome ."'";
$consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);
$dado = $consulta->fetch_array();
$GLOBALS['doenca']->edit($dado['id_doenca'], $_SESSION['user']->getIdusuario());
header('Location: ../views/perfil.php');

} elseif (isset($_POST["salvar"])) {
	echo "normal";
	
$GLOBALS['doenca']->add($_SESSION['user']->getIdusuario());
header('Location: ../views/perfil.php');

} elseif (isset($_POST["salvar1"])){
$GLOBALS['doenca']->add($_SESSION['user']->getIdusuario());
echo "sla";
header('Location: ../views/cadastro/cadastro3.php');

} elseif (isset($_POST["deletar"])) {
$sql = "Select * from doenca where nome_doenca ='". $nome ."'";
$consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);
$dado = $consulta->fetch_array();
$GLOBALS['doenca']->del($dado['id_doenca'], $_SESSION['user']->getIdusuario());

} elseif (isset($_POST["cancelar"])){	
header('Location: ../views/perfil.php');

} else {
header('Location: ../views/cadastro/cadastro3.php');

}


?>