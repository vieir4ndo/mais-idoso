<?php
require_once "../model/conexao.php";

require_once "../model/classes/usuario.php";

if (isset($_POST["cad"])) {

$email = $_POST['email'];
$senha1 = $_POST['senha'];
$senha2 = $_POST['senha1'];

//Insere no Banco de Dados, usando Prepared Statements.

$GLOBALS['user']->addUsuario($email, $senha1, $senha1);

//header('Location: ../views/cadastro/cadastro1.php');

}else{
    if (isset($_POST["cad1"])){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $genero = $_POST['genero'];

        $dataNascimento = $_POST['dataNascimento'];
        $GLOBALS['user']->addUsuario2($nome, $sobrenome, $genero, $dataNascimento);
    }
}


?>