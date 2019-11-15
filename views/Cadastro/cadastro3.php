<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>+Idoso</title>
    <link rel="shortcut icon" href="../../img/ico.ico">
    <link rel="stylesheet" type="text/css" href="../../estilo/style.css">
</head>

<body>
    <section class="container">
        <img id="logo-principal" src="../../img/logo-menor.png">
        <hr />
        <h3 class="titulo2">POR ÚLTIMO, VAMOS PRECISAR QUE VOCÊ REGISTRE SUA(S) DOENÇAS:</h3> 
        <form name="formCad3" method="POST" action="../manterDoencas.php">
        <?php
        require_once "../../model/conexao.php";
        require_once "../../model/classes/doenca.php";
        require_once "../../model/classes/usuario.php";

        session_start();
        $id = $_SESSION['user']->getIdusuario();
        
        //$_SESSION['user'] = unserialize($_SESSION['user']);

        $sql = "SELECT nome_doenca from doenca where usuario_idusuario=".$id."";

        $consulta = $GLOBALS['conn']->query($sql);

        if ($consulta['nome_doenca']!=''){

        while($row = $consulta->fetch_assoc()){
            echo "<button type='button'
            name='nome_doenca' value='{$row['nome_doenca']}' class='container-data'>{$row['nome_doenca']}</button>";
        }
        } else {
            echo "<button class='alertInfo'>Nenhuma doença cadastrada!</button>";
        }
        ?>
        <hr>
        <input type="submit" name="incluir1" value="INCLUIR">
        </form>
        <hr>
        <input type="submit" onclick="window.location.href='../../index.php';" value="FINALIZAR">
    </section>
</body>

</html>