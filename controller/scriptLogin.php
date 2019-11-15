<?php

require_once "../model/conexao.php";
require_once "../model/classes/usuario.php";

session_start();

if (isset($_POST["login"])) {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "Select * from usuario where email_usuario ='". $email ."'";
   
    if ($GLOBALS['conn']->query($sql) == TRUE) {

        $consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);      
        $consulta = $consulta->fetch_array();

        if ($consulta['senha_usuario']==$senha) {

            $_SESSION['user'] = new Usuario();

            $_SESSION['user']->setIdusuario($consulta['idusuario']);
            $_SESSION['user']->setNome_usuario($consulta['nome_usuario']);
            $_SESSION['user']->setSobrenome_usuario( $consulta['sobrenome_usuario']);
            $_SESSION['user']->setGenero_usuario($consulta['genero_usuario']);
            $_SESSION['user']->setDataNascimento_usuario($consulta['dataNascimento_usuario']);
            $_SESSION['user']->setAltura_usuario($consulta['altura_usuario']);
            $_SESSION['user']->setPeso_usuario($consulta['peso_usuario']);
            $_SESSION['user']->setTipoSanguineo_usuario($consulta['tipoSanguineo_usuario']);

            $_SESSION['logado'] = true;

            header('Location: ../index.php');

        }else {
            echo 'Senhas não batem';
            header('Location: ../views/login.php');
        }
    }else {
        echo 'email não cadastrado';
        header('Location: ../views/login.php');
    }

}
?>