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
        <h1 class="titulo">NOTIFICAÇÕES</h1>
        <hr />
        <section class="container-campo">
            NOTIFICAÇÕES
            <label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
            </label>
        </section>
        <section class="container-campo">
            SOM
            <label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
            </label>
        </section>
        <section class="container-campo">
            VOLUME
            <div class="slidecontainer">
                <img src="../img/volmenos.png">
                <input type="range" min="1" max="5" value="5" class="sliderRange">
                <img src="../img/volmais.png">
            </div>
        </section>
        <section class="container-campo">
            VIBRAÇÃO
            <label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
            </label>
        </section>
        <hr>
    </section>


</body>

</html>