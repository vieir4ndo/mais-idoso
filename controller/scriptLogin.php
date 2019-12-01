<?php

require_once "../model/conexao.php";
require_once "../model/classes/usuario.php";
require_once "../model/classes/consulta.php";
require_once "../model/classes/alimentacao.php";
require_once "../model/classes/doenca.php";
require_once "../model/classes/medicamento.php";
require_once "../model/classes/atividadeFisica.php";

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
            $_SESSION['medicamento'] = new Medicamento();
            $_SESSION['doenca'] = new Doenca();
            $_SESSION['alimentacao'] = new Alimentacao();
            $_SESSION['consulta'] = new Consulta();
            $_SESSION['atividade'] = new AtividadeFisica();

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
            $_SESSION['erroSenha']=true;
            $_SESSION['erroEmail']=null;
            header('Location: ../views/login.php');
        }
    }else {
        echo 'email não cadastrado';
        $_SESSION['erroEmail']=true;
        
        $_SESSION['erroSenha']=null;
        header('Location: ../views/login.php');
    }

}
?>