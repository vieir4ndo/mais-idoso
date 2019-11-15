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
        require_once "../model/classes/usuario.php";

        session_start();

        $id = $_SESSION['user']->getIdusuario();

        if (isset($_POST["incluir"])){
            $nome='';
            $tipo='';
            $sintomas='';
        } elseif (isset($_POST["incluir1"])){
            $nome='';
            $tipo='';
            $sintomas='';
        }else{
            $nome_doenca = $_POST['nome_doenca'];
            $sql = "Select * from doenca where nome_doenca = '{$nome_doenca}' and usuario_idusuario='{$id}'";
            $consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);
            if (isset($consulta)){
            $consulta = $consulta->fetch_assoc();
            $nome= $consulta['nome_doenca'];
            $tipo=$consulta['tipo_doenca'];
            $sintomas = $consulta['sintomas_doenca'];
            $idDoenca = $consulta['iddoenca'];
            }
            }
            echo '<label class="descricao">NOME:</label>';
            echo '<input type="text" name="nome" value="'.$nome.'">';
            echo '<label class= "descricao"> TIPO:</label>';
            echo '<input type="text" name="tipo" value="'.$tipo.'">';
            echo '<label class="descricao"> SINTOMAS:</label>';
            echo '<input type="text" name="sintomas" value="'.$sintomas.'">';

         if ($nome==''){
             if(isset($_POST["incluir"])){
             echo '<hr />';
             echo '<section class="menu-manter">';
             echo '<button type="submit" name="cancelar"><img src="../img/cancelar.png"></button>';
             echo '<button type="submit" name="salvar"><img src="../img/salvar.png"></button>';
             echo '</section>';              
            
        } elseif (isset($_POST["incluir1"])){
            echo '<hr />';
            echo '<section class="menu-manter">';
            echo '<button type="submit" name="cancelar1"><img src="../img/cancelar.png"></button>';
            echo '<button type="submit" name="salvar1"><img src="../img/salvar.png"></button>';
            echo '</section>';
        }
    }
    else{
            echo '<hr />';
            echo '<section class="menu-manter">';
            echo '<button type="submit" name="deletar"><img src="../img/deletar.png"></button>';
            echo '<button type="submit" name="editar" value="'.$idDoenca.'"><img src="../img/editar.png"></button>';
            echo '</section>';
        }
        ?>
       </section>
     </form>
</body>

</html>

            