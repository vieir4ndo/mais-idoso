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
        require_once "../model/conexao.php";
        require_once "../model/classes/doenca.php";

        if (isset($_POST["incluir"])){

            $GLOBALS['doenca']->
                setNome_doenca('');
            $GLOBALS['doenca']->
                setTipo_doenca('');
            $GLOBALS['doenca']->
                setSintomas_doenca('');
        }else{
            $nome_doenca = $_POST['
                nome_doenca'];

            $sql = "Select * from doenca where nome_doenca = '{$nome_doenca}'";
            $consulta = $GLOBALS['conn']->query($sql) 
            or die ($GLOBALS['conn']->error);

            if (isset($consulta)){
                $consulta = $consulta->fetch_assoc();

            $GLOBALS['doenca']->
                setNome_doenca('');
            $GLOBALS['doenca']->
                setTipo_doenca('');
            $GLOBALS['doenca']->
                setSintomas_doenca('');

            }else{
            }
            }

            echo '<label class= "descricao"> NOME:<label>';
            echo '<input type= "text" name="nome" value="'.$GLOBALS['doenca']-> getNome_doenca().'"required>';
            echo '<label class= "descricao"> TIPO:<label>';
            echo '<input type= "text" name="tipo" value="'.$GLOBALS['doenca']-> getTipo_doenca().'"required>';
            echo '<input type= "text" name="sintomas" value="'.$GLOBALS['doenca']-> getSintomas_doenca().'"required>';

            if ($GLOBALS['doenca']->getNome_doenca()!=''){
            echo '<hr />';
            echo '<section class="menu-manter">';
            echo '<button type="submit" name="deletar"><img src="../img/deletar.png"></button>';
            echo '<button type="submit" name="editar"><img src="../img/editar.png"></button>';
            echo '</section>';
        } else {
            echo '<hr />';
            echo '<section class="menu-manter">';
            echo '<button type="submit" name="deletar"><img src="../img/deletar.png"></button>';
            echo '<button type="submit" name="salvar"><img src="../img/salvar.png"></button>';
            echo '</section>';
        }
        ?>
       
    </section>
     </form>
</body>

</html>

            