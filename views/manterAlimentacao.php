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

    <form name="formAlimentacao" method="POST" action="../controller/scriptAlimentacao.php">
    <section class="container">
        <img id="logo-principal" src="../img/alimentacao.png">
        <hr />

        <?php  

        require_once "../model/conexao.php";
            require_once "../model/classes/usuario.php";
            require_once "../model/classes/alimentacao.php";

            session_start();

            if (isset($_POST["incluir"])){
                $alimento ='';
                $grupo='';
                $razao='';
            
            }else{

            $alimento_restricaoAlimentar = $_POST['alimento_restricaoAlimentar'];

            $id = $_SESSION['user']->getIdusuario();

            $sql = "Select * from restricaoalimentar where alimento_restricaoAlimentar='{$alimento_restricaoAlimentar}' and usuario_idusuario={$id}";

            $consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);

            if (isset($consulta)) {
                
                $consulta = $consulta->fetch_assoc();

                $alimento= $consulta['alimento_restricaoAlimentar'];
                $grupo=$consulta['grupo_restricaoAlimentar'];
                $razao = $consulta['razao_restricaoAlimentar'];
                $idrestricaoAlimentar = $consulta['idrestricaoAlimentar'];

            }else {

            //echo 'Medicamento não encontrado';

            }
            }

        echo '<label class="descricao">ALIMENTO:</label>';
        echo '<input type="text" name="alimento" value="'.$alimento.'"required>';
        echo '<label class="descricao">GRUPO:</label>';
        ?>
        <select name="grupo" >
            <option value="0" <?php if($grupo==0) { echo 'selected';} ?>>Carboidratos</option>

            <option value="1" <?php if($grupo==1) { echo 'selected';} ?>>Verduras e Legumes</option>

            <option value="2" <?php if($grupo==2) { echo 'selected';} ?>>Frutas</option>

            <option value="3" <?php if($grupo==3) { echo 'selected';} ?>>Leites e derivados</option>

            <option value="4" <?php if($grupo==4) { echo 'selected';} ?>>Carnes e ovos</option>

            <option value="5" <?php if($grupo==5) { echo 'selected';} ?>>Leguminosas e oleaginosas</option>

            <option value="6" <?php if($grupo==6) { echo 'selected';} ?>>Óleos e gorduras</option>

            <option value="7" <?php if($grupo==7) { echo 'selected';} ?>>Açúcares e doces</option>
            
        </select>
        <?php 
        echo '<label class="descricao">RAZÃO:</label>';
        echo '<input type="text" name="razao" value="'.$razao.'"required>';

        if ($alimento=='') {
        echo '<hr />';
        echo '<section class="menu-manter">';
        echo '<button type="submit" name="cancelar"><img src="../img/cancelar.png"></button>';
        echo '<button type="submit" name="salvar"><img src="../img/salvar.png"></button>';
        echo '</section>';

        }else{

        echo '<hr />';
        echo '<section class="menu-manter">';
        echo '<button type="submit" name="deletar" value="'.$idrestricaoAlimentar.'"><img src="../img/deletar.png"></button>';
        echo '<button type="submit" name="editar" value="'.$idrestricaoAlimentar.'"><img src="../img/editar.png"></button>';
        echo '</section>';
        }
        ?>

    </section>
    </form>
    
</body>

</html>