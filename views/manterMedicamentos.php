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
            require_once "../model/classes/usuario.php";
            require_once "../model/classes/medicamento.php";

            session_start();

            if (isset($_POST["incluir"])){
                $nome ='';
                $indicacao='';
                $horario='';
                $dosagem ='';
            }else{

            $nome_medicamento = $_POST['nome_medicamento'];

            $id = $_SESSION['user']->getIdusuario();

            $sql = "Select * from medicamento where nome_medicamento='{$nome_medicamento}' and usuario_idusuario={$id}";

            $consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);

            if (isset($consulta)) {
                
                $consulta = $consulta->fetch_assoc();

                $nome = $consulta['nome_medicamento'];
                $indicacao=$consulta['indicacao_medicamento'];
                $horario = $consulta['horario_medicamento'];
                $dosagem = $consulta['dosagem_medicamento'];
                $idMedicamento = $consulta['idmedicamento'];

            }else {

            //echo 'Medicamento não encontrado';

            }
            }

        echo '<label class="descricao">NOME:</label>';
        echo '<input type="text" name="nome" value="'.$nome.'" required>';
        echo '<label class="descricao">INDICAÇÃO:</label>';
        echo '<input type="text" name="indicacao" value="'.$indicacao.'">';
        echo '<label class="descricao">HORÁRIO:</label>';
        echo '<input type="time" name="hora" value="'.$horario.'" required>';
        echo '<label class="descricao">DOSAGEM:</label>';
        echo '<input type="text" name="dosagem" value="'.$dosagem.'" required>';

        if ($nome==''){
            echo '<hr />';
            echo '<section class="menu-manter">';
            echo '<button type="submit" name="cancelar"><img src="../img/cancelar.png"></button>';
            echo '<button type="submit" name="salvar"><img src="../img/salvar.png"></button>';
            echo '</section>';
      } else {
            echo '<hr />';
            echo '<section class="menu-manter">';
            echo '<button type="submit" name="deletar"><img src="../img/deletar.png"></button>';
            echo '<button type="submit" name="editar" value="'.$idMedicamento.'"><img src="../img/editar.png"></button>';
            echo '</section>';
        }
        ?>
       
    </section>
     </form>
</body>

</html>