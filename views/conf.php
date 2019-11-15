<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>+Idoso</title>
    <link rel="shortcut icon" href="../img/ico.ico">
    <link rel="stylesheet" type="text/css" href="../estilo/style.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
        
    </head>

<body>
    <header class="menu-principal">
        <a href="../index.php" id="img"><img src="../img/home.png"></a>
        <a href="perfil.php" id="img2"><img src="../img/avatar.png"></a>
        <a href="#" id="img4"><img src="../img/conf.png"></a>
    </header>
    <section class="container">
        <img id="logo-principal" src="../img/configuracoes.png">
        <hr />
        <section class="container-conf">
            <a href="notificacoes.php"><img src="../img/logo-conf/icon-bell.png">
                <h3 class="texto-conf">NOTIFICAÇÕES</h3>
            </a>
            <a href="seguranca.php"><img src="../img/logo-conf/icon-locker.png">
                <h3 class="texto-conf">SEGURANÇA</h3>
            </a>
            <a href="suporte.php"><img src="../img/logo-conf/icon-intmark.png">
                <h3 class="texto-conf">SUPORTE</h3>
            </a>
            <a href="info.php"><img src="../img/logo-conf/icon-info.png">
                <h3 class="texto-conf">INFORMAÇÕES</h3>
            </a>
            <a href="excluir.php"><img src="../img/logo-conf/icon-trash.png">
                <h3 class="texto-conf">EXCLUIR CONTA</h3>
            </a>
            <a href="<?php session_destroy(); $_SESSION['logado']=false; header('Location: login.php'); ?>"><img src="../img/cancelar.png">
                <h3 class="texto-conf">SAIR</h3>
            </a>
        </section>
    </section>

</body>

</html>