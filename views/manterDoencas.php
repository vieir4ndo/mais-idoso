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
           
        } else {
            if (isset($_POST["incluir1"])){
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
        }
            ?>
            <label class="descricao">NOME:</label>
            <input type="text" name="nome" value="<?php echo $nome; ?>">
            <label class= "descricao"> TIPO:</label>
            <select type="text" name="tipo">
            <option value="0" <?php if ($tipo==0) { echo 'selected';} ?>>Infecciosas e parasitárias</option>
            <option value="1" <?php if ($tipo==1) { echo 'selected';}?> >Neoplasias (tumores)</option>
            <option value="2" <?php if ($tipo==2) { echo 'selected';}?> >Doenças do sangue e dos órgãos hematopoéticos</option>
            <option value="3"<?php if ($tipo==3) { echo 'selected';}?> >Transtornos imunitários</option>
            <option value="4"<?php if ($tipo==4) { echo 'selected';}?> >Doenças endócrinas, nutricionais e metabólicas</option>
            <option value="5"<?php if ($tipo==5) { echo 'selected';}?> >Transtornos mentais e comportamentais</option>
            <option value="6"<?php if ($tipo==6) { echo 'selected';}?> >Doenças do sistema nervoso</option>
            <option value="7"<?php if ($tipo==7) { echo 'selected';}?> >Doenças oculares e anexos</option>
            <option value="8"<?php if ($tipo==8) { echo 'selected';}?> >Doenças do ouvido e da apófise mastoide</option>
            <option value="9"<?php if ($tipo==9) { echo 'selected';}?> >Doenças do aparelho circulatório</option>
            <option value="10"<?php if ($tipo==10) { echo 'selected';}?> >Doenças do aparelho respiratório</option>
            <option value="11"<?php if ($tipo==11) { echo 'selected';}?> >Doenças do aparelho digestivo</option>
            <option value="12"<?php if ($tipo==12) { echo 'selected';}?> >Doenças da pele e do tecido subcutâneo</option>
            <option value="13"<?php if ($tipo==13) { echo 'selected';}?> >Doenças do sistema osteomuscular e do tecido conjuntivo</option>
            <option value="14"<?php if ($tipo==14) { echo 'selected';}?> >Doenças do aparelho geniturinário</option>
            <option value="15"<?php if ($tipo==15) { echo 'selected';}?> >Malformações congênitas, deformidades e anomalias cromossômicas</option>
            <option value="16"<?php if ($tipo==16) { echo 'selected';}?> >Lesões, envenenamento e algumas outras consequências de causas externas</option>
            <option value="17"<?php if ($tipo==17) { echo 'selected';}?> >Causas externas de morbidade e de mortalidade</option>
            </select>
            <label class="descricao"> SINTOMAS:</label>
            <input type="text" name="sintomas" value="<?php echo $sintomas; ?>">
        
        <?php
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

            