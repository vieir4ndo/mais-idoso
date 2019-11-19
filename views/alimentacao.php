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
                <form name="formConAlimentacao" method="POST" action="manterAlimentacao.php"></form>
                <php
                require_once "../model/conexao.php";
                require_once "../model/classes/alimentacao.php";
                require_once "../model/classes/usuario.php";

                session_start();

                $id = 1;
                $sql = "SELECT alimento_resticaoAlimentar FROM alimentacao where usuario_idusuario = {id}";
                $consulta = $GLOBALS['conn']->fetch_assoc();

                echo $teste['alimento_resticaoAlimentar'];

        if (isset($teste['alimento_resticaoAlimentar']){
        while ($row = $consulta->fetch_assoc()){   
        echo "<button type='submit' name='alimento_resticaoAlimentar' value='{$row["alimento_resticaoAlimentar"]}'  class='container-data'>{$row["alimento_resticaoAlimentar"]}</button>";
        }
        }else {
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
            