<!DOCTYPE html>
<html>
<?php 
require_once "model/classes/usuario.php";
session_start();

//$_SESSION['user'] = unserialize(serialize($_SESSION['user']));

//echo $_SESSION['user']->getIdusuario();


if ($_SESSION['logado']==true){
?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>+Idoso</title>
    <link rel="shortcut icon" href="img/ico.ico">
    <link rel="stylesheet" type="text/css" href="estilo/style.css">
</head>

<body>
    <header class="menu-principal">
        <a href="views/cartilha.php" id="img"><img src="img/cartilha.png"></a>
        <a href="views/perfil.php" id="img2"><img src="img/avatar.png"></a>
        <a href="views/conf.php" id="img4"><img src="img/conf.png"></a>
    </header>
    <section class="container">
        <img id="logo-principal" src="img/logo.png">
        <hr />
        <nav id="nav-principal">
            <a href="views/medicamentos.php"><img src="img/logo2.png"></a>
            <a href="views/alimentacao.php"><img src="img/logo3.png"></a>
            <a href="views/atvfisicas.php"><img src="img/logo4.png"></a>
            <a href="views/consultas.php"><img src="img/logo5.png"></a>
        </nav>
    </section>
    <section class="container">
        <img id="logo-principal" src="img/lembretes.png">
        <hr />
        <?php
        require_once "model/conexao.php";
        require_once "/model/classes/medicamento.php";
        //require_once "/model/classes/consulta.php";

        $id = $_SESSION['user']->getIdusuario();

        $sql = "SELECT * from medicamento where usuario_idusuario={$id}";
    
        ?>
        <section class="lembrete">
        <label class="titulo-lembrete">MEDICAMENTO</label> <img class="img-lembrete" src="img/cancelar.png"><br/><br/>
        <label class="descricao-lembrete">Nome: </label><br/>
        <label class="descricao-lembrete">Horário: </label><br/>
        </section>
        <hr>
        <section class="lembrete">
        <label class="titulo-lembrete">CONSULTAS</label><img class="img-lembrete" src="img/cancelar.png"><br/><br/>
        <label class="descricao-lembrete">Local: </label><br/>
        <label class="descricao-lembrete">Data: </label><br/>
        <label class="descricao-lembrete">Horário: </label><br/>
        </section>
        <hr>

    </section>      
</body>
<?php 
} else {
    header('Location: views/login.php');
}
?>
</html>