<?php

require_once "../model/conexao.php";

require_once "../model/classes/atividadeFisica.php";

require_once "../model/classes/usuario.php";

session_start();

$nome = $_POST['nome'];
$duracao = $_POST['duracao'];
$data = $_POST['data'];
$horario = $_POST['hora'];
$id = $_SESSION['user']->getIdusuario();

if (isset($_POST["editar"])) {
$_SESSION['atividade']->setnome_atividade($nome);
$_SESSION['atividade']->setduracao_atividade($duracao);
$_SESSION['atividade']->setHorario_atividade($horario);
$_SESSION['atividade']->setdata_atividade($data);
$idatividade = $_POST['editar'];
$_SESSION['atividade']->edit($idatividade, $id);
header('Location: ../views/atvfisicas.php');
} elseif (isset($_POST["salvar"])) {
$_SESSION['atividade'] = new atividade();
$_SESSION['atividade']->setnome_atividade($nome);
$_SESSION['atividade']->setduracao_atividade($duracao);
$_SESSION['atividade']->setHorario_atividade($horario);
$_SESSION['atividade']->setdata_atividade($data);

$_SESSION['atividade']->add($id);

header('Location: ../views/atvfisicas.php');

}elseif (isset($_POST["deletar"])){
$sql = "Select * from atividade where nome_atividade ='". $nome ."' and usuario_idusuario='{$id}'";
$consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);
$dado = $consulta->fetch_array();
$_SESSION['atividade']->del($dado['idatividade'], $id);
header('Location: ../views/atvfisicas.php');
}

?>