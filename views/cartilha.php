<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>+Idoso</title>
    <meta charset="UTF-8"/>
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
        <h1 class="titulo">CARTILHAS</h1>
        <hr />
        <form name="formConCartilhas" method="POST" action="cartilhaEspecifica.php">
        <?php
        require_once "../model/conexao.php";

        $sql = "SELECT * FROM cartilha";// where medicamento_id_medicamento=". $GLOBALS['user']->getId_usuario();

        $consulta = $GLOBALS['conn']->query($sql);

        $i = 0;

        while ($row = $consulta->fetch_assoc()){   
        echo "<button type='submit' class='container-data' name ='nome_cartilha' value='".$row['titulo_cartilha']."'>".$row['titulo_cartilha']."</button>";
         $i++;
        }
        //}else {
        //    echo "<button class='container-data'>Nenhum medicamento cadastrado</button>";
        //}
        ?>
        </form>
        
    </section>
</body>

</html>