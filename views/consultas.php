<?php
        require_once "../model/conexao.php";
        require_once "../model/classes/usuario.php";
        require_once "../model/classes/consulta.php";
        session_start();
        ?>
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

    <section class="container">
        <img id="logo-principal" src="../img/consultas.png">    
        <hr />
        <form name="formConConsultas" method="POST" action="manterConsultas.php">
        <?php

        $id = $_SESSION['user']->getIdUsuario();

        $sql = "SELECT idconsulta, tipo_consulta, DATE_FORMAT(data_consulta, '%d/%m/%Y') as data_consulta  FROM consulta where usuario_idusuario=".$id;

        if ($GLOBALS['conn']->query($sql)==true){
        $consulta = $GLOBALS['conn']->query($sql);
        
        $verificar = mysqli_num_rows($consulta);
            
            if (empty($verificar)){
                echo "<button class='alertInfo'>Nenhuma consulta cadastrado</button>";
            }else {
                $i=0;
        while ($row = $consulta->fetch_assoc()){   
            $i++;
            switch ($row['tipo_consulta']) {
            case 0: $texto = "Alergologia e Imunologia"; break;
            case 1: $texto = "Angiologia";break;
            case 2: $texto = "Oncologia";break;
            case 3: $texto = "Cardiologia";break;
            case 4: $texto = "Dermatologia";break;
            case 5: $texto = "Endocrinologia";break;
            case 6: $texto = "Ginecologia e Obstetrícia";break;
            case 7: $texto = "Hematologia e Hemoterapia";break;
            case 8: $texto = "Infectologia";break;
            case 9: $texto = "Neurologia";break;
            case 10: $texto = "Nutrologia";break;
            case 11: $texto = "Ortopedia e Traumatologia";break;
            case 12: $texto = "Otorrinolaringologia";break;
            case 13: $texto = "Pneumologia";break;
            case 14: $texto = "Reumatologia";break;
            case 15: $texto = "Urologia";break;
            }
        echo "<button type='submit' name='idconsulta' value='".$row['idconsulta']."' class='container-consulta'> Consulta {$i}";
        echo '<p class"texto-consulta">Tipo: '.$texto.'</p>';
        echo '<p class"texto-consulta">Data: '.$row['data_consulta'].'</p>';
        echo "</button>";
        }
        }            
        }
        ?>
        <hr>
        <section>
            <input type="submit" name="incluir" value="INCLUIR">
        </section>
        </form>
    </section>
</body>

</html>