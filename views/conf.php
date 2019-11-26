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

        <form name="form-conf" action="../controller/scriptConf.php" method="post">
        <section class="container-conf">
            <button type ="submit" name="seguranca" ><img src="../img/logo-conf/icon-locker.png">
                <h3 class="texto-conf">SEGURANÇA</h3>
            </button>
            <button type ="submit" name="suporte" ><img src="../img/logo-conf/icon-intmark.png">
                <h3 class="texto-conf">SUPORTE</h3>
            </button>
            <button  type ="submit"name="informacoes"><img src="../img/logo-conf/icon-info.png">
                <h3 class="texto-conf">INFORMAÇÕES</h3>
            </button>
            <button  type ="submit"name="excluirconta"><img src="../img/logo-conf/icon-trash.png">
                <h3 class="texto-conf">EXCLUIR CONTA</h3>
            </button>
            <button  type ="submit"name="sair" ><img src="../img/cancelar.png">
                <h3 class="texto-conf">SAIR</h3>
            </button>
        </section>
    </section>

</body>

</html>