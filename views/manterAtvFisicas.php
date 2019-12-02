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
    <form name="FormAtividadesFisicas" action="../controller/scriptAtividadeFisica.php" method="POST">
    <section class="container">
        <img id="logo-principal" src="../img/atvFisicas.png">
        <hr />
        <?php
            require_once "../model/conexao.php";
            require_once "../model/classes/usuario.php";
            require_once "../model/classes/atividadeFisica.php";

            session_start();

            if (isset($_POST["incluir"])){
                $atividade ='';
                $duracao='';
                $data='';
            }else{

            $idAtividadeFisica   = $_POST['idAtividadeFisica'];

            $id = $_SESSION['user']->getIdusuario();

            $sql = "Select * from atividadefisica where idAtividadeFisica='{$idAtividadeFisica}' and usuario_idusuario={$id}";

            $consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);

            if (isset($consulta)) {
                $consulta = $consulta->fetch_assoc();
                $atividade =$consulta['atividade_atividadefisica'];
                $duracao=$consulta['duracao_atividadefisica'];
                $data= $consulta['data_atividadefisica'];
               
            }else {

            //echo 'consulta não encontrado';

            }
            }
        
        ?>
        <label class="descricao">ATIVIDADE:</label>
        <input type="text" name ="nome" value="<?php echo $atividade; ?>">
        <label class="descricao">DURAÇÃO:</label>
        <input type="time" name="duracao" value="<?php echo $duracao; ?>">
        <label class="descricao">DATA:</label>
        <input type="date" name="data" value="<?php echo $data; ?>">
       <?php
        if ($atividade==''){
            echo '<hr />';
            echo '<section class="menu-manter">';
            echo '<button type="submit" name="cancelar"><img src="../img/cancelar.png"></button>';
            echo '<button type="submit" name="salvar"><img src="../img/salvar.png"></button>';
            echo '</section>';
      } else {
            echo '<hr />';
            echo '<section class="menu-manter">';
            echo '<button type="submit" name="deletar" value="'.$idAtividadeFisica.'"><img src="../img/deletar.png"></button>';
            echo '<button type="submit" name="editar" value="'.$idAtividadeFisica.'"><img src="../img/editar.png"></button>';
            echo '</section>';
        }
       ?>
    </form>
    </section>
</body>

</html>