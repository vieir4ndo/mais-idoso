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
    <form name="formMedicamento" method="POST" action="../controller/scriptMedicamento.php">
    <section class="container">
        <img id="logo-principal" src="../img/medicacao.png">
        <hr />
        <?php
            require_once "../model/conexao.php";
            require_once "../model/classes/medicamento.php";
            require_once "../model/classes/usuario.php";

            if (isset($_POST["incluir"])){

                $GLOBALS['medicamento']->setNome_medicamento('');
                $GLOBALS['medicamento']->setindicacao_medicamento('');
                $GLOBALS['medicamento']->setHorario_medicamento('');
                $GLOBALS['medicamento']->setDosagem_medicamento('');

            } else {

            $nome_medicamento = $_POST['nome_medicamento'];

            $sql = "Select * from medicamento where nome_medicamento='{$nome_medicamento}'";// where medicamento_id_medicamento=". $GLOBALS['user']->getId_usuario();

            $consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);

            if (isset($consulta)) {
                
                $consulta = $consulta->fetch_assoc();

                $GLOBALS['medicamento']->setNome_medicamento($consulta['nome_medicamento']);
                $GLOBALS['medicamento']->setindicacao_medicamento($consulta['indicacao_medicamento']);
                $GLOBALS['medicamento']->setHorario_medicamento($consulta['horario_medicamento']);
                $GLOBALS['medicamento']->setDosagem_medicamento($consulta['dosagem_medicamento']);

            }else {

            //echo 'Medicamento não encontrado';

            }
            }

        echo '<label class="descricao">NOME:</label>';
        echo '<input type="text" name="nome" value="'.$GLOBALS['medicamento']->getNome_medicamento().'" required>';
        echo '<label class="descricao">INDICAÇÃO:</label>';
        echo '<input type="text" name="indicacao" value="'.$GLOBALS['medicamento']->getIndicacao_medicamento().'">';
        echo '<label class="descricao">HORÁRIO:</label>';
        echo '<input type="time" name="hora" value="'.$GLOBALS['medicamento']->getHorario_medicamento().'" required>';
        echo '<button id="incluir"><img src="../img/Adicionar.png"></button>';
        echo '<label class="descricao">DOSAGEM:</label>';
        echo '<input type="text" name="dosagem" value="'.$GLOBALS['medicamento']->getDosagem_medicamento().'" required>';

        if ($GLOBALS['medicamento']!=''){
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