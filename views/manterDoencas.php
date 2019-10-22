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
    <form name="formDoenca" method="POST" action="../controller/scriptDoenca.php">

    <section class="container">
        <img id="logo-principal" src="../img/doenças.png">
        <hr />

        <?php
            require_once "../model/inicializacao.php";

            $nome = $GLOBALS['doenca']->getNome_doenca();
            $tipo = $GLOBALS['doenca']->getTipo_doenca();
            $sintomas = $GLOBALS['doenca']->getSintomas_doenca();
            echo "<label>{$sintomas}</label>";
            ?>

        <label class="descricao">DOENÇA:</label>
        <input type="text">
        <label class="descricao">TIPO:</label>
        <select name="tipo_doenca">
                <option value="bacteriose">BACTERIOSE</option>
                <option value="cardiovascular">CARDIOVASCULAR</option>
                <option value="cutanea">CUTÂNEA</option>
                <option value="endocrina">ENDÓCRINA</option>
                <option value="neurologica">NEUROLÓGICA</option>
                <option value="respiratoria">RESPIRATÓRIA</option>
                <option value="virose">VIRÓSES</option>
            </select>
        <label class="descricao">SINTOMAS:</label>
        <input type="text">
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