<?php
require_once "../model/conexao.php";
require_once "../model/classes/usuario.php";

session_start();

$id = $_SESSION['user']->getIdusuario();

if (isset($_POST["infoMedicas"])) {
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];
    $tipoSanguineo = $_POST['tipoSanguineo'];
    $_SESSION['user'] = unserialize(serialize($_SESSION['user']));
    $_SESSION['user']->editInfoMedicas($id, $altura, $peso, $tipoSanguineo);
    header('Location: ../views/perfil.php');

} elseif (isset($_POST["infoPessoais"])) {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $genero = $_POST['genero'];
    $dataNascimento = $_POST['dataNascimento'];
    $_SESSION['user'] = unserialize(serialize($_SESSION['user']));
    $_SESSION['user']->editInfoPessoais($id, $nome, $sobrenome, $genero, $dataNascimento);
    header('Location: ../views/perfil.php');

}
?>