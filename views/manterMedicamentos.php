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
        <?php

        ?>
        <lable class="descricao">NOME:</lable>
        <input type="text" name="nome" value="<?php $GLOBALS['medicamento']->getNome_medicamento(); ?>" required>
        <lable class="descricao">INDICAÇÃO:</lable>
        <input type="text" name="indicacao" value="<?php $GLOBALS['medicamento']->getIndicacao_medicamento(); ?>">
        <lable class="descricao">HORÁRIO:</lable>
        <input type="time" name="hora" value="<?php $GLOBALS['medicamento']->getHorario_medicamento(); ?>" required>
        <img id="incluir" src="../img/Adicionar.png">
        <lable class="descricao">DOSAGEM:</lable>
        <input type="text" name="dosagem" value="<?php $GLOBALS['medicamento']->getDosagem_medicamento(); ?>"required>
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