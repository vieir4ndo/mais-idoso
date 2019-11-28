<?php
require_once "../model/conexao.php";
require_once "../model/classes/usuario.php";

session_start();

if (isset($_POST["cad"])) {
$email = $_POST['email'];
$senha1 = $_POST['senha'];
$senha2 = $_POST['senha1'];
$_SESSION['user'] = new Usuario();
//Insere no Banco de Dados, usando Prepared Statements.
$_SESSION['user']->addUsuario($email, $senha1, $senha2);
}elseif (isset($_POST["cad1"])){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $genero = $_POST['genero'];
        $dataNascimento = $_POST['dataNascimento'];
        //$_SESSION['user'] = unserialize(serialize($_SESSION['user']));
        $email = $_SESSION['user']->getEmail_usuario();
        $_SESSION['user']->addUsuario2($email, $nome, $sobrenome, $genero, $dataNascimento);
    } elseif (isset($_POST["cad2"])){
        $altura = $_POST['altura'];
        $peso = $_POST['peso'];
        $tipoSanguineo = $_POST['tipoSanguineo'];
        //$_SESSION['user'] = unserialize(serialize($_SESSION['user']));
        $email = $_SESSION['user']->getEmail_usuario();
        $_SESSION['user']->addUsuario3($email, $altura, $peso, $tipoSanguineo);
    }



?>