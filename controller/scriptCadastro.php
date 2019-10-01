<?php
require_once "../model/conexao.php";

require_once "../model/classes/usuario.php";

if (isset($_POST["cad"])) {

$email = $_POST['email'];
$senha1 = $_POST['senha'];
$senha2 = $_POST['senha1'];

//Insere no Banco de Dados, usando Prepared Statements.

$GLOBALS['user']->add($email, $senha1, $senha1);

}else{
    echo "Não entrou no script";
}

?>