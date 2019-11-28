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
        <img id="logo-principal" src="../img/consultas.png">
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

            $idConsulta   = $_POST['idconsulta'];

            $id = $_SESSION['user']->getIdusuario();

            $sql = "Select * from consulta where idconsulta='{$idConsulta}' and usuario_idusuario={$id}";

            $consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);

            if (isset($consulta)) {
                $consulta = $consulta->fetch_assoc();
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
?>
    <select name="tipo">
    <option value="0"<?php if ($tipo_consulta==0){ echo 'selected';}?>>Alergologia e Imunologia</option>
    <option value="1"<?php if ($tipo_consulta==1){ echo 'selected';}?>>Angiologia</option>
    <option value="2"<?php if ($tipo_consulta==2){ echo 'selected';}?>>Oncologia</option>
    <option value="3"<?php if ($tipo_consulta==3){ echo 'selected';}?>>Cardiologia</option>
    <option value="4"<?php if ($tipo_consulta==4){ echo 'selected';}?>>Dermatologia</option>
    <option value="5"<?php if ($tipo_consulta==5){ echo 'selected';}?>>Endocrinologia </option>
    <option value="6"<?php if ($tipo_consulta==6){ echo 'selected';}?>>Ginecologia e Obstetrícia</option>
    <option value="7"<?php if ($tipo_consulta==7){ echo 'selected';}?>>Hematologia e Hemoterapia</option>
    <option value="8"<?php if ($tipo_consulta==8){ echo 'selected';}?>>Infectologia</option>
    <option value="9"<?php if ($tipo_consulta==9){ echo 'selected';}?>>Neurologia</option>
    <option value="10"<?php if ($tipo_consulta==10){ echo 'selected';}?>>Nutrologia</option>
    <option value="11"<?php if ($tipo_consulta==11){ echo 'selected';}?>>Ortopedia e Traumatologia</option>
    <option value="12"<?php if ($tipo_consulta==12){ echo 'selected';}?>>Otorrinolaringologia</option>
    <option value="13"<?php if ($tipo_consulta==13){ echo 'selected';}?>>Pneumologia</option>
    <option value="14"<?php if ($tipo_consulta==14){ echo 'selected';}?>>Reumatologia</option>
    <option value="15"<?php if ($tipo_consulta==15){ echo 'selected';}?>>Urologia</option>
    </select>
<?php

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