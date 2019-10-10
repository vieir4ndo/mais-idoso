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
    <form name="formMedicamento" method="POST" action="../controller/scriptMedicamento.php">
    <section class="container">
        <img id="logo-principal" src="../img/medicacao.png">
        <hr />
        <lable class="descricao">NOME:</lable>
        <input type="text" name="nome" required>
        <lable class="descricao">INDICAÇÃO:</lable>
        <input type="text" name="indicacao">
        <lable class="descricao">HORÁRIO:</lable>
        <input type="time" name="hora" required>
        <img id="incluir" src="../img/Adicionar.png">
        <lable class="descricao">DOSAGEM:</lable>
        <input type="text" name="dosagem" required>
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