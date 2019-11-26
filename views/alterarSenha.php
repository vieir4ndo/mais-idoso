<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
    <form name="FormAlteraSenha" action="../controller/scriptConf.php" method="post">
    <section class="container">
        <h1 class="titulo">ALTERAR SENHA</h1>
        <hr />
        <label class="descricao">SENHA ATUAL:</label>
        <input type="password"  name="senhaAtual">
        <label class="descricao">NOVA SENHA:</label>
        <input type="password" name="novaSenha">
        <label class="descricao">CONFIRME A NOVA SENHA:</label>
        <input type="password" name="novaSenha1">
        <section>
            <input type="submit" name="alterarSenha" value="SALVAR">
        </section>
        <HR>
    </section>
</form>
</body>

</html>