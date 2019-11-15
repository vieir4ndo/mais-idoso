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
    <form name="formAlimentacao" method="POST" action="../controller/scriptAlimentacao.php">
    <section class="container">
        <img id="logo-principal" src="../img/alimentacao.png">
        <hr />
        <label class="descricao">ALIMENTO:</label>
        <input type="text" name="alimento">
        <label class="descricao">GRUPO:</label>
        <input type="text" name="grupo">
        <label class="descricao">RAZÃO:</label>
        <input type="text" name="razao">
        <hr />
        <section class="menu-manter">
           <button type="submit" name="editar"><img src="../img/editar.png"></button>
            <button type="submit" name="deletar"><img src="../img/deletar.png"></button>
            <button type="submit" name="salvar"><img src="../img/salvar.png"></button>

        </section>

    </section>
    </form>
    
</body>

</html>