<!DOCTYPE html>
<html>
<head><meta http-equiv=”Content-Type” content=”text/html; charset=iso-8859-1″>

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
    <?php
    require_once "../model/conexao.php";

        $idcartilha = $_POST['cartilha'];

        $sql = "Select * from cartilha where idcartilha='{$idcartilha}'";

        $consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);
    
        $consulta = $consulta->fetch_assoc();

        echo '<h1 class="titulo">'.$consulta['titulo_cartilha'].'</h1>';
        echo '<hr />';
        echo '<h2 class="titulo2">FATORES/CAUSAS</h2>';
        echo '<p>'.$consulta['fatores_cartilha'].'</p>';
        echo '<h2 class="titulo2">SINTOMAS</h2>';
        echo '<p>'.$consulta['sintomas_cartilha'].'</p>';
        echo '<h2 class="titulo2">PREVENÇÃO</h2>';
        echo '<p>'.$consulta['prevencao_cartilha'].'</p>';
    ?>
    </section>
</body>

</html>