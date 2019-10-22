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
    <section class="container">
        <img id="logo-principal" src="../img/doença.png">
        <hr />
        <form name="formConDoenca" method="POST" action="manterDoenca.php">
        <?php
        require_once "../model/conexao.php";
        require_once "../model/classes/doenca.php";
       // require_once "../model/classes/usuario.php";
        $sql = "SELECT nome_doenca from doenca";

        $consulta = $GLOBALS['conn'] ->query($sql);

        $i=0;

        while($row = $consulta-> fetch_assoc()){
            echo "<button type='submit'
            name='nome_doenca' value='{$row['nome_doenca']}'
            class='container_data'>{$row['nome_doenca']}</button>";

            $i++;

        }

        ?>
        <hr>
        <section>
            <input type="submit" name="incluir" value="incluir">
        </section>
        </form>
    </section>
</body>

</html>