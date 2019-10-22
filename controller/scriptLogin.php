<?php

require_once "../model/conexao.php";
require_once "../model/classes/usuario.php";

if (isset($_POST["login"])) {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "Select * from usuario where email_usuario ='". $email ."'";
    $consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);

    if ($consulta=!''){

        $dado = $consulta->fetch_array();

        if ($dado['senha_usuario']==$senha) {

            $GLOBALS['user']->setID_usuario($dado['id_usuario']);
            $GLOBALS['user']->setNome_usuario($dado['nome_usuario']);
            $GLOBALS['user']->setSobrenome_usuario( $dado['sobrenome_usuario']);
            $GLOBALS['user']->setGenero_usuario($dado['genero_usuario']);
            $GLOBALS['user']->setDataNascimento_usuario($dado['dataNascimento_usuario']);
            $GLOBALS['user']->setAltura_usuario($dado['altura_usuario']);
            $GLOBALS['user']->setPeso_usuario($dado['peso_usuario']);
            $GLOBALS['user']->setTipoSanguineo_usuario($dado['tipoSanguineo_usuario']);

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