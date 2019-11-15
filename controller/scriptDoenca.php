<?php
require_once "../model/conexao.php";
require_once "../model/classes/doenca.php";
require_once "../model/classes/usuario.php";

session_start();


$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$sintomas = $_POST['sintomas'];
$id = $_SESSION['user']->getIdusuario();

//$_SESSION['user'] = unserialize(serialize($_SESSION['user']));

if (isset($_POST["editar"])) {
    
$idDoenca = $_POST['editar'];
$_SESSION['doenca']->setNome_doenca($nome);
$_SESSION['doenca']->setTipo_doenca($tipo);
$_SESSION['doenca']->setSintomas_doenca($sintomas);

$_SESSION['doenca']->edit($idDoenca,$id);
header('Location: ../views/perfil.php');

} elseif (isset($_POST["salvar"])) {

$_SESSION['doenca'] = new Doenca();
$_SESSION['doenca']->setNome_doenca($nome);
$_SESSION['doenca']->setTipo_doenca($tipo);
$_SESSION['doenca']->setSintomas_doenca($sintomas);
$_SESSION['doenca']->add($id);
header('Location: ../views/perfil.php');

} elseif (isset($_POST["salvar1"])){
$_SESSION['doenca'] = new Doenca();
$_SESSION['doenca']->setNome_doenca($nome);
$_SESSION['doenca']->setTipo_doenca($tipo);
$_SESSION['doenca']->setSintomas_doenca($sintomas);
$_SESSION['doenca']->add($id);

header('Location: ../views/cadastro/cadastro3.php');

} elseif (isset($_POST["deletar"])) {
$sql = "Select * from doenca where nome_doenca ='". $nome ."' and usuario_idusuario='".$id."'";
$consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);
$dado = $consulta->fetch_array();
$_SESSION['doenca']->del($dado['iddoenca'], $id);
header('Location: ../views/perfil.php');


} elseif (isset($_POST["cancelar"])){	
header('Location: ../views/perfil.php');

} else {
header('Location: ../views/cadastro/cadastro3.php');

}


?>