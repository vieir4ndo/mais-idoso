<?php

require_once "../model/conexao.php";

require_once "../model/classes/usuario.php";

echo "chegou até";

if (isset($_POST["login"])) {

    echo "aqui";

$email = $_POST['email'];
$senha = $_POST['senha'];


$sql = "Select * from usuario where email_usuario ='". $email ."'";
$consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);

$dado = $consulta->fetch_array();

if ($dado['senha_usuario']==$senha) {

    $GLOBALS['user'] = new Usuario($dado['id_usuario'], $dado['nome_usuario'], 
    $dado['sobrenome_usuario'],$dado['genero_usuario'], $dado['dataNascimento_usuario'], 
    $dado['altura_usuario'],$dado['peso_usuario'], $dado['tipoSanguineo_usuario']);
    echo "amem";
    header('Location: ../index.html');
}else {
    header('Location: ../views/login.html');
}
}
?>