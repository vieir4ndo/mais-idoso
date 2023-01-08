<?php

require_once "../model/conexao.php";
require_once "../model/classes/atividadeFisica.php";
require_once "../model/classes/usuario.php";

session_start();

$nome = $_POST['nome'];
$duracao = $_POST['duracao'];
$data = $_POST['data'];
$id = $_SESSION['user']->getIdusuario();

if (isset($_POST["editar"])) {
    $_SESSION['atividade']->setatividade_atividadeFisica($nome);
    $_SESSION['atividade']->setduracao_atividadeFisica($duracao);
    $_SESSION['atividade']->setdata_atividadeFisica($data);
    $idatividade = $_POST['editar'];
    $_SESSION['atividade']->edit($idatividade, $id);
    header('Location: ../views/atvfisicas.php');
} elseif (isset($_POST["salvar"])) {
    $_SESSION['atividade'] = new AtividadeFisica();
    $_SESSION['atividade']->setatividade_atividadeFisica($nome);
    $_SESSION['atividade']->setduracao_atividadeFisica($duracao);
    $_SESSION['atividade']->setdata_atividadeFisica($data);

    $_SESSION['atividade']->add($id);

    header('Location: ../views/atvfisicas.php');

} elseif (isset($_POST["deletar"])) {

    $idatividade = $_POST['deletar'];

    $_SESSION['atividade']->del($idatividade, $id);
    header('Location: ../views/atvfisicas.php');
}

?>