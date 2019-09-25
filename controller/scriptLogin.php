<?php
require_once "../model/conexao.php";

require_once "../model/classes/usuario.php";

if (isset($_POST["cad1"])) {

$email = $_POST['email'];
$senha1 = $_POST['senha'];
$senha2 = $_POST['senha1'];

//Insere no Banco de Dados, usando Prepared Statements.

$user->add($email, $senha1, $senha1);

$user->pegarID($email);


header('Location: ../views/cadastro/cadastro1.html');

}else{
    echo "Não entrou no script";
}

?>