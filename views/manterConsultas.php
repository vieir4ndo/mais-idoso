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
    <form name="formConsulta" method="POST" action="../controller/scriptConsulta.php">
    <section class="container">
        <img id="logo-principal" src="../img/consulta.png">
        <hr />
        <?php
            require_once "../model/conexao.php";
            require_once "../model/classes/usuario.php";
            require_once "../model/classes/consulta.php";

            session_start();

            if (isset($_POST["incluir"])){
                $tipo_consulta ='';
                $local='';
                $data='';
                $horario='';    
                $medico ='';
            }else{

            $tipo_consulta  = $_POST['tipo_consulta'];

            $id = $_SESSION['user']->getIdusuario();

            $sql = "Select * from consulta where tipo_consulta='{$tipo_consulta}' and usuario_idusuario={$id}";

            $consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);

            if (isset($consulta)) {
                
                $consulta = $consulta->fetch_assoc();

                $idConsulta = $consulta['idconsulta'];
                $tipo_consulta = $consulta['tipo_consulta'];
                $local=$consulta['local_consulta'];
                $data = $consulta['data_consulta'];
                $horario = $consulta['horario_consulta'];
                $medico = $consulta['medico_consulta'];
               
            }else {

            //echo 'consulta não encontrado';

            }
            }

        echo '<label class="descricao">Tipo:</label>';
        echo '<input type="text" name="tipo" value="'.$tipo_consulta.'" required>';
        echo '<label class="descricao">Local:</label>';
        echo '<input type="text" name="local" value="'.$local.'">';
        echo '<label class="descricao">Data:</label>';
        echo '<input type="date" name="data" value="'.$data.'" required>';
        echo '<label class="descricao">Horário:</label>';
        echo '<input type="time" name="hora" value="'.$horario.'" required>';
        echo '<label class="descricao">Medico:</label>';
        echo '<input type="text" name="medico" value="'.$medico.'" required>';

        if ($tipo_consulta==''){
            echo '<hr />';
            echo '<section class="menu-manter">';
            echo '<button type="submit" name="cancelar"><img src="../img/cancelar.png"></button>';
            echo '<button type="submit" name="salvar"><img src="../img/salvar.png"></button>';
            echo '</section>';
      } else {
            echo '<hr />';
            echo '<section class="menu-manter">';
            echo '<button type="submit" name="deletar" value="'.$idConsulta.'"><img src="../img/deletar.png"></button>';
            echo '<button type="submit" name="editar" value="'.$idConsulta.'"><img src="../img/editar.png"></button>';
            echo '</section>';
        }
        ?>
       
    </section>
     </form>
</body>

</html>