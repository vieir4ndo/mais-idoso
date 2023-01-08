<?php

require_once "../model/classes/usuario.php";
require_once "../model/conexao.php";

session_start();

if (isset($_POST["seguranca"])) {
    header('Location: ../views/seguranca.php');

} elseif (isset($_POST["suporte"])) {
    header('Location: ../views/suporte.php');

} elseif (isset($_POST["informacoes"])) {
    header('Location: ../views/info.php');
} elseif (isset($_POST["excluirconta"])) {
    header('Location: ../views/excluir.php');

} elseif (isset($_POST["sair"])) {
    $_SESSION['logado'] = false;
    session_destroy();
    header('Location: ../views/login.php');
} elseif (isset($_POST["confirmarExclusao"])) {
    $_SESSION['user']->del($_SESSION['user']->getIdusuario());
    header('Location: ../views/login.php');
} elseif (isset($_POST["cancelarExclusao"])) {
    header('Location: ../views/conf.php');
} elseif (isset($_POST["alterarSenha"])) {
    $senhaAtual = $_POST['senhaAtual'];
    $novaSenha = $_POST['novaSenha'];
    $novaSenha1 = $_POST['novaSenha1'];
    $id = $_SESSION['user']->getIdusuario();

    $sql = 'Select senha_usuario from usuario where idusuario=' . $id . '';

    $consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);
    $consulta = $consulta->fetch_assoc();

    if ($senhaAtual == $consulta['senha_usuario']) {
        $_SESSION['user']->alteraSenha($_SESSION['user']->getIdusuario(), $novaSenha);
        header('Location: ../views/conf.php');
    }
}


?>