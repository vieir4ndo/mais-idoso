<!DOCTYPE html>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>+Idoso</title>
    <link rel="shortcut icon" href="../img/ico.ico">
    <link rel="stylesheet" type="text/css" href="../estilo/style.css">
</head>

<body>
    <header class="menu-principal">
        <a href="../index.php" id="img"><img src="../img/home.png"></a>
        <a href="perfil.php" id="img2"><img src="../img/avatar.png"></a>
        <a href="conf.php" id="img4"><img src="../img/conf.png"></a>
    </header>
    <form name="formExcluirConta" action="../controller/scriptConf.php" method="post">
    <section class="container">
        <h1 class="titulo">EXCLUIR CONTA</h1>
        <hr />
        <h1 class="container-campo">Confirme a exclusão da sua conta</h1>
        <section class="menu-manter">
            <button type="submit" name="cancelarExclusao"><img src="../img/cancelar.png"></button>
            <button type="submit" name="confirmarExclusao"><img src="../img/salvar.png"></button>
        </section>
        <hr>
    </section>
</form>
</body>

</html>