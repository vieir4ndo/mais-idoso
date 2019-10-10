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
    <section class="container">
        <img id="logo-principal" src="../img/doenças.png">
        <hr />
        <lable class="descricao">DOENÇA:</lable>
        <input type="text">
        <lable class="descricao">TIPO:</lable>
        <select name="tipoSanguineo">
                <option value="fiat">BACTERIOSE</option>
                <option value="saab">CARDIOVASCULAR</option>
                <option value="fiat">CUTÂNEA</option>
                <option value="fiat">ENDÓCRINA</option>
                <option value="volvo">NEUROLÓGICA</option>
                <option value="audi">RESPIRATÓRIA</option>
                <option value="fiat">VIRÓSES</option>
            </select>
        <lable class="descricao">SINTOMAS:</lable>
        <input type="text">
        <hr />
        <section class="menu-manter">
            <button type="submit" name="editar"><img src="../img/editar.png"></button>
            <button type="submit" name="deletar"><img src="../img/deletar.png"></button>
            <button type="submit" name="salvar"><img src="../img/salvar.png"></button>
        </section>

    </section>
</body>

</html>