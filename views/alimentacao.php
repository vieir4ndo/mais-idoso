<?php
       

        ?>
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
                <img id="logo-principal" src="../img/alimentacao.png">
                <hr />
        <form name="formConAlimentacao" method="POST" action="manterAlimentacao.php">
        <?php

         require_once "../model/conexao.php";
        require_once "../model/classes/usuario.php";
        require_once "../model/classes/alimentacao.php";
        session_start();
                
        $id =$_SESSION['user']->getIdUsuario();

        $sql = "SELECT `alimento_restricaoAlimentar` FROM `restricaoalimentar` WHERE usuario_idusuario = ".$id."";

               
        if ($GLOBALS['conn']->query($sql)==true){
        $consulta = $GLOBALS['conn']->query($sql);
        while ($row = $consulta->fetch_assoc()){   
        echo "<button type='submit' name='alimento_restricaoAlimentar' value='".$row['alimento_restricaoAlimentar']."'  class='container-data'>".$row['alimento_restricaoAlimentar']."</button>";
        }
        } else {
            echo "<button class='alertInfo'>Nenhum alimento cadastrado</button>";
        }
        ?>
        <hr>
        <section>
            <input type="submit" name="incluir" value="INCLUIR">
        </section>
        </form>
    </section>
    
</body>

</html>