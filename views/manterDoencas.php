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
            echo '<label class="descricao">NOME:</label>';
            echo '<input type="text" name="nome" value="'.$nome.'">';
            echo '<label class= "descricao"> TIPO:</label>';
            echo '<select type="text" name="tipo" value="'.$tipo.'">';
            echo '<option value="0">Infecciosas e parasitárias</option>';
            echo '<option value="1">Neoplasias (tumores)</option>';
            echo '<option value="2">Doenças do sangue e dos órgãos hematopoéticos</option>';
            echo '<option value="3">Transtornos imunitários</option>';
            echo '<option value="4">Doenças endócrinas, nutricionais e metabólicas</option>';
            echo '<option value="5">Transtornos mentais e comportamentais</option>';
            echo '<option value="6">Doenças do sistema nervoso</option>';
            echo '<option value="7">Doenças oculares e anexos</option>';
            echo '<option value="8">Doenças do ouvido e da apófise mastoide</option>';
            echo '<option value="9">Doenças do aparelho circulatório</option>';
            echo '<option value="10">Doenças do aparelho respiratório</option>';
            echo '<option value="11">Doenças do aparelho digestivo</option>';
            echo '<option value="12">Doenças da pele e do tecido subcutâneo</option>';
            echo '<option value="13">Doenças do sistema osteomuscular e do tecido conjuntivo</option>';
            echo '<option value="14">Doenças do aparelho geniturinário</option>';
            echo '<option value="15">Malformações congênitas, deformidades e anomalias cromossômicas</option>';
            echo '<option value="16">Lesões, envenenamento e algumas outras consequências de causas externas</option>';
            echo '<option value="17">Causas externas de morbidade e de mortalidade</option>';
            echo '</select>';
            echo '<label class="descricao"> SINTOMAS:</label>';
            echo '<input type="text" name="sintomas" value="'.$sintomas.'">';
        } elseif (isset($_POST["incluir1"])){
            $nome='';
            $tipo='';
            $sintomas='';
            echo '<label class="descricao">NOME:</label>';
            echo '<input type="text" name="nome" value="'.$nome.'">';
            echo '<label class= "descricao"> TIPO:</label>';
            echo '<select type="text" name="tipo">';
            echo '<option value="0">Infecciosas e parasitárias</option>';
            echo '<option value="1">Neoplasias (tumores)</option>';
            echo '<option value="2">Doenças do sangue e dos órgãos hematopoéticos</option>';
            echo '<option value="3">Transtornos imunitários</option>';
            echo '<option value="4">Doenças endócrinas, nutricionais e metabólicas</option>';
            echo '<option value="5">Transtornos mentais e comportamentais</option>';
            echo '<option value="6">Doenças do sistema nervoso</option>';
            echo '<option value="7">Doenças oculares e anexos</option>';
            echo '<option value="8">Doenças do ouvido e da apófise mastoide</option>';
            echo '<option value="9">Doenças do aparelho circulatório</option>';
            echo '<option value="10">Doenças do aparelho respiratório</option>';
            echo '<option value="11">Doenças do aparelho digestivo</option>';
            echo '<option value="12">Doenças da pele e do tecido subcutâneo</option>';
            echo '<option value="13">Doenças do sistema osteomuscular e do tecido conjuntivo</option>';
            echo '<option value="14">Doenças do aparelho geniturinário</option>';
            echo '<option value="15">Malformações congênitas, deformidades e anomalias cromossômicas</option>';
            echo '<option value="16">Lesões, envenenamento e algumas outras consequências de causas externas</option>';
            echo '<option value="17">Causas externas de morbidade e de mortalidade</option>';
            echo '</select>';
            echo '<label class="descricao"> SINTOMAS:</label>';
            echo '<input type="text" name="sintomas" value="'.$sintomas.'">';
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
            echo '<label class="descricao">NOME:</label>';
            echo '<input type="text" name="nome" value="'.$nome.'">';
            echo '<label class= "descricao"> TIPO:</label>';

            switch ($tipo) {
                case 0:
                echo '<select type="text" name="tipo">';
            echo '<option value="0" selected>Infecciosas e parasitárias</option>';
            echo '<option value="1">Neoplasias (tumores)</option>';
            echo '<option value="2">Doenças do sangue e dos órgãos hematopoéticos</option>';
            echo '<option value="3">Transtornos imunitários</option>';
            echo '<option value="4">Doenças endócrinas, nutricionais e metabólicas</option>';
            echo '<option value="5">Transtornos mentais e comportamentais</option>';
            echo '<option value="6">Doenças do sistema nervoso</option>';
            echo '<option value="7">Doenças oculares e anexos</option>';
            echo '<option value="8">Doenças do ouvido e da apófise mastoide</option>';
            echo '<option value="9">Doenças do aparelho circulatório</option>';
            echo '<option value="10">Doenças do aparelho respiratório</option>';
            echo '<option value="11">Doenças do aparelho digestivo</option>';
            echo '<option value="12">Doenças da pele e do tecido subcutâneo</option>';
            echo '<option value="13">Doenças do sistema osteomuscular e do tecido conjuntivo</option>';
            echo '<option value="14">Doenças do aparelho geniturinário</option>';
            echo '<option value="15">Malformações congênitas, deformidades e anomalias cromossômicas</option>';
            echo '<option value="16">Lesões, envenenamento e algumas outras consequências de causas externas</option>';
            echo '<option value="17">Causas externas de morbidade e de mortalidade</option>';
            echo '</select>';
                    break;
                    case 1:
                    echo '<select type="text" name="tipo">';
                echo '<option value="0" >Infecciosas e parasitárias</option>';
                echo '<option value="1" selected>Neoplasias (tumores)</option>';
                echo '<option value="2">Doenças do sangue e dos órgãos hematopoéticos</option>';
                echo '<option value="3">Transtornos imunitários</option>';
                echo '<option value="4">Doenças endócrinas, nutricionais e metabólicas</option>';
                echo '<option value="5">Transtornos mentais e comportamentais</option>';
                echo '<option value="6">Doenças do sistema nervoso</option>';
                echo '<option value="7">Doenças oculares e anexos</option>';
                echo '<option value="8">Doenças do ouvido e da apófise mastoide</option>';
                echo '<option value="9">Doenças do aparelho circulatório</option>';
                echo '<option value="10">Doenças do aparelho respiratório</option>';
                echo '<option value="11">Doenças do aparelho digestivo</option>';
                echo '<option value="12">Doenças da pele e do tecido subcutâneo</option>';
                echo '<option value="13">Doenças do sistema osteomuscular e do tecido conjuntivo</option>';
                echo '<option value="14">Doenças do aparelho geniturinário</option>';
                echo '<option value="15">Malformações congênitas, deformidades e anomalias cromossômicas</option>';
                echo '<option value="16">Lesões, envenenamento e algumas outras consequências de causas externas</option>';
                echo '<option value="17">Causas externas de morbidade e de mortalidade</option>';
                echo '</select>';
                        break;
                        case 2:
                    echo '<select type="text" name="tipo">';
                echo '<option value="0" >Infecciosas e parasitárias</option>';
                echo '<option value="1" >Neoplasias (tumores)</option>';
                echo '<option value="2" selected>Doenças do sangue e dos órgãos hematopoéticos</option>';
                echo '<option value="3">Transtornos imunitários</option>';
                echo '<option value="4">Doenças endócrinas, nutricionais e metabólicas</option>';
                echo '<option value="5">Transtornos mentais e comportamentais</option>';
                echo '<option value="6">Doenças do sistema nervoso</option>';
                echo '<option value="7">Doenças oculares e anexos</option>';
                echo '<option value="8">Doenças do ouvido e da apófise mastoide</option>';
                echo '<option value="9">Doenças do aparelho circulatório</option>';
                echo '<option value="10">Doenças do aparelho respiratório</option>';
                echo '<option value="11">Doenças do aparelho digestivo</option>';
                echo '<option value="12">Doenças da pele e do tecido subcutâneo</option>';
                echo '<option value="13">Doenças do sistema osteomuscular e do tecido conjuntivo</option>';
                echo '<option value="14">Doenças do aparelho geniturinário</option>';
                echo '<option value="15">Malformações congênitas, deformidades e anomalias cromossômicas</option>';
                echo '<option value="16">Lesões, envenenamento e algumas outras consequências de causas externas</option>';
                echo '<option value="17">Causas externas de morbidade e de mortalidade</option>';
                echo '</select>';
                        break;
                        case 3:
                    echo '<select type="text" name="tipo">';
                echo '<option value="0" >Infecciosas e parasitárias</option>';
                echo '<option value="1" >Neoplasias (tumores)</option>';
                echo '<option value="2">Doenças do sangue e dos órgãos hematopoéticos</option>';
                echo '<option value="3" selected>Transtornos imunitários</option>';
                echo '<option value="4">Doenças endócrinas, nutricionais e metabólicas</option>';
                echo '<option value="5">Transtornos mentais e comportamentais</option>';
                echo '<option value="6">Doenças do sistema nervoso</option>';
                echo '<option value="7">Doenças oculares e anexos</option>';
                echo '<option value="8">Doenças do ouvido e da apófise mastoide</option>';
                echo '<option value="9">Doenças do aparelho circulatório</option>';
                echo '<option value="10">Doenças do aparelho respiratório</option>';
                echo '<option value="11">Doenças do aparelho digestivo</option>';
                echo '<option value="12">Doenças da pele e do tecido subcutâneo</option>';
                echo '<option value="13">Doenças do sistema osteomuscular e do tecido conjuntivo</option>';
                echo '<option value="14">Doenças do aparelho geniturinário</option>';
                echo '<option value="15">Malformações congênitas, deformidades e anomalias cromossômicas</option>';
                echo '<option value="16">Lesões, envenenamento e algumas outras consequências de causas externas</option>';
                echo '<option value="17">Causas externas de morbidade e de mortalidade</option>';
                echo '</select>';
                        break;
                        case 4:
                    echo '<select type="text" name="tipo">';
                echo '<option value="0" >Infecciosas e parasitárias</option>';
                echo '<option value="1" >Neoplasias (tumores)</option>';
                echo '<option value="2">Doenças do sangue e dos órgãos hematopoéticos</option>';
                echo '<option value="3">Transtornos imunitários</option>';
                echo '<option value="4" selected>Doenças endócrinas, nutricionais e metabólicas</option>';
                echo '<option value="5">Transtornos mentais e comportamentais</option>';
                echo '<option value="6">Doenças do sistema nervoso</option>';
                echo '<option value="7">Doenças oculares e anexos</option>';
                echo '<option value="8">Doenças do ouvido e da apófise mastoide</option>';
                echo '<option value="9">Doenças do aparelho circulatório</option>';
                echo '<option value="10">Doenças do aparelho respiratório</option>';
                echo '<option value="11">Doenças do aparelho digestivo</option>';
                echo '<option value="12">Doenças da pele e do tecido subcutâneo</option>';
                echo '<option value="13">Doenças do sistema osteomuscular e do tecido conjuntivo</option>';
                echo '<option value="14">Doenças do aparelho geniturinário</option>';
                echo '<option value="15">Malformações congênitas, deformidades e anomalias cromossômicas</option>';
                echo '<option value="16">Lesões, envenenamento e algumas outras consequências de causas externas</option>';
                echo '<option value="17">Causas externas de morbidade e de mortalidade</option>';
                echo '</select>';
                        break;
                        case 5:
                    echo '<select type="text" name="tipo">';
                echo '<option value="0" >Infecciosas e parasitárias</option>';
                echo '<option value="1" >Neoplasias (tumores)</option>';
                echo '<option value="2">Doenças do sangue e dos órgãos hematopoéticos</option>';
                echo '<option value="3">Transtornos imunitários</option>';
                echo '<option value="4">Doenças endócrinas, nutricionais e metabólicas</option>';
                echo '<option value="5" selected>Transtornos mentais e comportamentais</option>';
                echo '<option value="6">Doenças do sistema nervoso</option>';
                echo '<option value="7">Doenças oculares e anexos</option>';
                echo '<option value="8">Doenças do ouvido e da apófise mastoide</option>';
                echo '<option value="9">Doenças do aparelho circulatório</option>';
                echo '<option value="10">Doenças do aparelho respiratório</option>';
                echo '<option value="11">Doenças do aparelho digestivo</option>';
                echo '<option value="12">Doenças da pele e do tecido subcutâneo</option>';
                echo '<option value="13">Doenças do sistema osteomuscular e do tecido conjuntivo</option>';
                echo '<option value="14">Doenças do aparelho geniturinário</option>';
                echo '<option value="15">Malformações congênitas, deformidades e anomalias cromossômicas</option>';
                echo '<option value="16">Lesões, envenenamento e algumas outras consequências de causas externas</option>';
                echo '<option value="17">Causas externas de morbidade e de mortalidade</option>';
                echo '</select>';
                        break;
                        case 6:
                    echo '<select type="text" name="tipo">';
                echo '<option value="0" >Infecciosas e parasitárias</option>';
                echo '<option value="1" >Neoplasias (tumores)</option>';
                echo '<option value="2">Doenças do sangue e dos órgãos hematopoéticos</option>';
                echo '<option value="3">Transtornos imunitários</option>';
                echo '<option value="4">Doenças endócrinas, nutricionais e metabólicas</option>';
                echo '<option value="5">Transtornos mentais e comportamentais</option>';
                echo '<option value="6" selected>Doenças do sistema nervoso</option>';
                echo '<option value="7">Doenças oculares e anexos</option>';
                echo '<option value="8">Doenças do ouvido e da apófise mastoide</option>';
                echo '<option value="9">Doenças do aparelho circulatório</option>';
                echo '<option value="10">Doenças do aparelho respiratório</option>';
                echo '<option value="11">Doenças do aparelho digestivo</option>';
                echo '<option value="12">Doenças da pele e do tecido subcutâneo</option>';
                echo '<option value="13">Doenças do sistema osteomuscular e do tecido conjuntivo</option>';
                echo '<option value="14">Doenças do aparelho geniturinário</option>';
                echo '<option value="15">Malformações congênitas, deformidades e anomalias cromossômicas</option>';
                echo '<option value="16">Lesões, envenenamento e algumas outras consequências de causas externas</option>';
                echo '<option value="17">Causas externas de morbidade e de mortalidade</option>';
                echo '</select>';
                        break;
                        case 7:
                    echo '<select type="text" name="tipo">';
                echo '<option value="0" >Infecciosas e parasitárias</option>';
                echo '<option value="1" >Neoplasias (tumores)</option>';
                echo '<option value="2">Doenças do sangue e dos órgãos hematopoéticos</option>';
                echo '<option value="3">Transtornos imunitários</option>';
                echo '<option value="4">Doenças endócrinas, nutricionais e metabólicas</option>';
                echo '<option value="5">Transtornos mentais e comportamentais</option>';
                echo '<option value="6">Doenças do sistema nervoso</option>';
                echo '<option value="7" selected>Doenças oculares e anexos</option>';
                echo '<option value="8">Doenças do ouvido e da apófise mastoide</option>';
                echo '<option value="9">Doenças do aparelho circulatório</option>';
                echo '<option value="10">Doenças do aparelho respiratório</option>';
                echo '<option value="11">Doenças do aparelho digestivo</option>';
                echo '<option value="12">Doenças da pele e do tecido subcutâneo</option>';
                echo '<option value="13">Doenças do sistema osteomuscular e do tecido conjuntivo</option>';
                echo '<option value="14">Doenças do aparelho geniturinário</option>';
                echo '<option value="15">Malformações congênitas, deformidades e anomalias cromossômicas</option>';
                echo '<option value="16">Lesões, envenenamento e algumas outras consequências de causas externas</option>';
                echo '<option value="17">Causas externas de morbidade e de mortalidade</option>';
                echo '</select>';
                        break;
                        case 8:
                    echo '<select type="text" name="tipo">';
                echo '<option value="0" >Infecciosas e parasitárias</option>';
                echo '<option value="1" >Neoplasias (tumores)</option>';
                echo '<option value="2">Doenças do sangue e dos órgãos hematopoéticos</option>';
                echo '<option value="3">Transtornos imunitários</option>';
                echo '<option value="4">Doenças endócrinas, nutricionais e metabólicas</option>';
                echo '<option value="5">Transtornos mentais e comportamentais</option>';
                echo '<option value="6">Doenças do sistema nervoso</option>';
                echo '<option value="7">Doenças oculares e anexos</option>';
                echo '<option value="8" selected>Doenças do ouvido e da apófise mastoide</option>';
                echo '<option value="9">Doenças do aparelho circulatório</option>';
                echo '<option value="10">Doenças do aparelho respiratório</option>';
                echo '<option value="11">Doenças do aparelho digestivo</option>';
                echo '<option value="12">Doenças da pele e do tecido subcutâneo</option>';
                echo '<option value="13">Doenças do sistema osteomuscular e do tecido conjuntivo</option>';
                echo '<option value="14">Doenças do aparelho geniturinário</option>';
                echo '<option value="15">Malformações congênitas, deformidades e anomalias cromossômicas</option>';
                echo '<option value="16">Lesões, envenenamento e algumas outras consequências de causas externas</option>';
                echo '<option value="17">Causas externas de morbidade e de mortalidade</option>';
                echo '</select>';
                        break;
                        case 9:
                    echo '<select type="text" name="tipo">';
                echo '<option value="0" >Infecciosas e parasitárias</option>';
                echo '<option value="1" >Neoplasias (tumores)</option>';
                echo '<option value="2">Doenças do sangue e dos órgãos hematopoéticos</option>';
                echo '<option value="3">Transtornos imunitários</option>';
                echo '<option value="4">Doenças endócrinas, nutricionais e metabólicas</option>';
                echo '<option value="5">Transtornos mentais e comportamentais</option>';
                echo '<option value="6">Doenças do sistema nervoso</option>';
                echo '<option value="7">Doenças oculares e anexos</option>';
                echo '<option value="8">Doenças do ouvido e da apófise mastoide</option>';
                echo '<option value="9" selected>Doenças do aparelho circulatório</option>';
                echo '<option value="10">Doenças do aparelho respiratório</option>';
                echo '<option value="11">Doenças do aparelho digestivo</option>';
                echo '<option value="12">Doenças da pele e do tecido subcutâneo</option>';
                echo '<option value="13">Doenças do sistema osteomuscular e do tecido conjuntivo</option>';
                echo '<option value="14">Doenças do aparelho geniturinário</option>';
                echo '<option value="15">Malformações congênitas, deformidades e anomalias cromossômicas</option>';
                echo '<option value="16">Lesões, envenenamento e algumas outras consequências de causas externas</option>';
                echo '<option value="17">Causas externas de morbidade e de mortalidade</option>';
                echo '</select>';
                        break;
                        case 10:
                    echo '<select type="text" name="tipo">';
                echo '<option value="0" >Infecciosas e parasitárias</option>';
                echo '<option value="1" >Neoplasias (tumores)</option>';
                echo '<option value="2">Doenças do sangue e dos órgãos hematopoéticos</option>';
                echo '<option value="3">Transtornos imunitários</option>';
                echo '<option value="4">Doenças endócrinas, nutricionais e metabólicas</option>';
                echo '<option value="5">Transtornos mentais e comportamentais</option>';
                echo '<option value="6">Doenças do sistema nervoso</option>';
                echo '<option value="7">Doenças oculares e anexos</option>';
                echo '<option value="8">Doenças do ouvido e da apófise mastoide</option>';
                echo '<option value="9">Doenças do aparelho circulatório</option>';
                echo '<option value="10" selected>Doenças do aparelho respiratório</option>';
                echo '<option value="11">Doenças do aparelho digestivo</option>';
                echo '<option value="12">Doenças da pele e do tecido subcutâneo</option>';
                echo '<option value="13">Doenças do sistema osteomuscular e do tecido conjuntivo</option>';
                echo '<option value="14">Doenças do aparelho geniturinário</option>';
                echo '<option value="15">Malformações congênitas, deformidades e anomalias cromossômicas</option>';
                echo '<option value="16">Lesões, envenenamento e algumas outras consequências de causas externas</option>';
                echo '<option value="17">Causas externas de morbidade e de mortalidade</option>';
                echo '</select>';
                        break;
                        case 11:
                    echo '<select type="text" name="tipo">';
                echo '<option value="0" >Infecciosas e parasitárias</option>';
                echo '<option value="1" >Neoplasias (tumores)</option>';
                echo '<option value="2">Doenças do sangue e dos órgãos hematopoéticos</option>';
                echo '<option value="3">Transtornos imunitários</option>';
                echo '<option value="4">Doenças endócrinas, nutricionais e metabólicas</option>';
                echo '<option value="5">Transtornos mentais e comportamentais</option>';
                echo '<option value="6">Doenças do sistema nervoso</option>';
                echo '<option value="7">Doenças oculares e anexos</option>';
                echo '<option value="8">Doenças do ouvido e da apófise mastoide</option>';
                echo '<option value="9">Doenças do aparelho circulatório</option>';
                echo '<option value="10">Doenças do aparelho respiratório</option>';
                echo '<option value="11" selected>Doenças do aparelho digestivo</option>';
                echo '<option value="12">Doenças da pele e do tecido subcutâneo</option>';
                echo '<option value="13">Doenças do sistema osteomuscular e do tecido conjuntivo</option>';
                echo '<option value="14">Doenças do aparelho geniturinário</option>';
                echo '<option value="15">Malformações congênitas, deformidades e anomalias cromossômicas</option>';
                echo '<option value="16">Lesões, envenenamento e algumas outras consequências de causas externas</option>';
                echo '<option value="17">Causas externas de morbidade e de mortalidade</option>';
                echo '</select>';
                        break;
                        case 12:
                    echo '<select type="text" name="tipo">';
                echo '<option value="0" >Infecciosas e parasitárias</option>';
                echo '<option value="1" >Neoplasias (tumores)</option>';
                echo '<option value="2">Doenças do sangue e dos órgãos hematopoéticos</option>';
                echo '<option value="3">Transtornos imunitários</option>';
                echo '<option value="4">Doenças endócrinas, nutricionais e metabólicas</option>';
                echo '<option value="5">Transtornos mentais e comportamentais</option>';
                echo '<option value="6">Doenças do sistema nervoso</option>';
                echo '<option value="7">Doenças oculares e anexos</option>';
                echo '<option value="8">Doenças do ouvido e da apófise mastoide</option>';
                echo '<option value="9">Doenças do aparelho circulatório</option>';
                echo '<option value="10">Doenças do aparelho respiratório</option>';
                echo '<option value="11">Doenças do aparelho digestivo</option>';
                echo '<option value="12" selected>Doenças da pele e do tecido subcutâneo</option>';
                echo '<option value="13">Doenças do sistema osteomuscular e do tecido conjuntivo</option>';
                echo '<option value="14">Doenças do aparelho geniturinário</option>';
                echo '<option value="15">Malformações congênitas, deformidades e anomalias cromossômicas</option>';
                echo '<option value="16">Lesões, envenenamento e algumas outras consequências de causas externas</option>';
                echo '<option value="17">Causas externas de morbidade e de mortalidade</option>';
                echo '</select>';
                        break;
                        case 13:
                    echo '<select type="text" name="tipo">';
                echo '<option value="0" >Infecciosas e parasitárias</option>';
                echo '<option value="1" >Neoplasias (tumores)</option>';
                echo '<option value="2">Doenças do sangue e dos órgãos hematopoéticos</option>';
                echo '<option value="3">Transtornos imunitários</option>';
                echo '<option value="4">Doenças endócrinas, nutricionais e metabólicas</option>';
                echo '<option value="5">Transtornos mentais e comportamentais</option>';
                echo '<option value="6">Doenças do sistema nervoso</option>';
                echo '<option value="7">Doenças oculares e anexos</option>';
                echo '<option value="8">Doenças do ouvido e da apófise mastoide</option>';
                echo '<option value="9">Doenças do aparelho circulatório</option>';
                echo '<option value="10">Doenças do aparelho respiratório</option>';
                echo '<option value="11">Doenças do aparelho digestivo</option>';
                echo '<option value="12">Doenças da pele e do tecido subcutâneo</option>';
                echo '<option value="13" selected>Doenças do sistema osteomuscular e do tecido conjuntivo</option>';
                echo '<option value="14">Doenças do aparelho geniturinário</option>';
                echo '<option value="15">Malformações congênitas, deformidades e anomalias cromossômicas</option>';
                echo '<option value="16">Lesões, envenenamento e algumas outras consequências de causas externas</option>';
                echo '<option value="17">Causas externas de morbidade e de mortalidade</option>';
                echo '</select>';
                        break;
                        case 14:
                    echo '<select type="text" name="tipo">';
                echo '<option value="0" >Infecciosas e parasitárias</option>';
                echo '<option value="1" >Neoplasias (tumores)</option>';
                echo '<option value="2">Doenças do sangue e dos órgãos hematopoéticos</option>';
                echo '<option value="3">Transtornos imunitários</option>';
                echo '<option value="4">Doenças endócrinas, nutricionais e metabólicas</option>';
                echo '<option value="5">Transtornos mentais e comportamentais</option>';
                echo '<option value="6">Doenças do sistema nervoso</option>';
                echo '<option value="7">Doenças oculares e anexos</option>';
                echo '<option value="8">Doenças do ouvido e da apófise mastoide</option>';
                echo '<option value="9">Doenças do aparelho circulatório</option>';
                echo '<option value="10">Doenças do aparelho respiratório</option>';
                echo '<option value="11">Doenças do aparelho digestivo</option>';
                echo '<option value="12">Doenças da pele e do tecido subcutâneo</option>';
                echo '<option value="13">Doenças do sistema osteomuscular e do tecido conjuntivo</option>';
                echo '<option value="14" selected>Doenças do aparelho geniturinário</option>';
                echo '<option value="15">Malformações congênitas, deformidades e anomalias cromossômicas</option>';
                echo '<option value="16">Lesões, envenenamento e algumas outras consequências de causas externas</option>';
                echo '<option value="17">Causas externas de morbidade e de mortalidade</option>';
                echo '</select>';
                        break;
                        case 15:
                    echo '<select type="text" name="tipo">';
                echo '<option value="0" >Infecciosas e parasitárias</option>';
                echo '<option value="1" >Neoplasias (tumores)</option>';
                echo '<option value="2">Doenças do sangue e dos órgãos hematopoéticos</option>';
                echo '<option value="3">Transtornos imunitários</option>';
                echo '<option value="4">Doenças endócrinas, nutricionais e metabólicas</option>';
                echo '<option value="5">Transtornos mentais e comportamentais</option>';
                echo '<option value="6">Doenças do sistema nervoso</option>';
                echo '<option value="7">Doenças oculares e anexos</option>';
                echo '<option value="8">Doenças do ouvido e da apófise mastoide</option>';
                echo '<option value="9">Doenças do aparelho circulatório</option>';
                echo '<option value="10">Doenças do aparelho respiratório</option>';
                echo '<option value="11">Doenças do aparelho digestivo</option>';
                echo '<option value="12">Doenças da pele e do tecido subcutâneo</option>';
                echo '<option value="13">Doenças do sistema osteomuscular e do tecido conjuntivo</option>';
                echo '<option value="14">Doenças do aparelho geniturinário</option>';
                echo '<option value="15" selected>Malformações congênitas, deformidades e anomalias cromossômicas</option>';
                echo '<option value="16">Lesões, envenenamento e algumas outras consequências de causas externas</option>';
                echo '<option value="17">Causas externas de morbidade e de mortalidade</option>';
                echo '</select>';
                        break;
                        case 16:
                    echo '<select type="text" name="tipo">';
                echo '<option value="0" >Infecciosas e parasitárias</option>';
                echo '<option value="1" >Neoplasias (tumores)</option>';
                echo '<option value="2">Doenças do sangue e dos órgãos hematopoéticos</option>';
                echo '<option value="3">Transtornos imunitários</option>';
                echo '<option value="4">Doenças endócrinas, nutricionais e metabólicas</option>';
                echo '<option value="5">Transtornos mentais e comportamentais</option>';
                echo '<option value="6">Doenças do sistema nervoso</option>';
                echo '<option value="7">Doenças oculares e anexos</option>';
                echo '<option value="8">Doenças do ouvido e da apófise mastoide</option>';
                echo '<option value="9">Doenças do aparelho circulatório</option>';
                echo '<option value="10">Doenças do aparelho respiratório</option>';
                echo '<option value="11">Doenças do aparelho digestivo</option>';
                echo '<option value="12">Doenças da pele e do tecido subcutâneo</option>';
                echo '<option value="13">Doenças do sistema osteomuscular e do tecido conjuntivo</option>';
                echo '<option value="14">Doenças do aparelho geniturinário</option>';
                echo '<option value="15">Malformações congênitas, deformidades e anomalias cromossômicas</option>';
                echo '<option value="16" selected>Lesões, envenenamento e algumas outras consequências de causas externas</option>';
                echo '<option value="17">Causas externas de morbidade e de mortalidade</option>';
                echo '</select>';
                        break;
                        case 17:
                    echo '<select type="text" name="tipo">';
                echo '<option value="0" >Infecciosas e parasitárias</option>';
                echo '<option value="1" >Neoplasias (tumores)</option>';
                echo '<option value="2">Doenças do sangue e dos órgãos hematopoéticos</option>';
                echo '<option value="3">Transtornos imunitários</option>';
                echo '<option value="4">Doenças endócrinas, nutricionais e metabólicas</option>';
                echo '<option value="5">Transtornos mentais e comportamentais</option>';
                echo '<option value="6">Doenças do sistema nervoso</option>';
                echo '<option value="7">Doenças oculares e anexos</option>';
                echo '<option value="8">Doenças do ouvido e da apófise mastoide</option>';
                echo '<option value="9">Doenças do aparelho circulatório</option>';
                echo '<option value="10">Doenças do aparelho respiratório</option>';
                echo '<option value="11">Doenças do aparelho digestivo</option>';
                echo '<option value="12">Doenças da pele e do tecido subcutâneo</option>';
                echo '<option value="13">Doenças do sistema osteomuscular e do tecido conjuntivo</option>';
                echo '<option value="14">Doenças do aparelho geniturinário</option>';
                echo '<option value="15">Malformações congênitas, deformidades e anomalias cromossômicas</option>';
                echo '<option value="16">Lesões, envenenamento e algumas outras consequências de causas externas</option>';
                echo '<option value="17" selected>Causas externas de morbidade e de mortalidade</option>';
                echo '</select>';
                        break;
                
            }
            echo '<label class="descricao"> SINTOMAS:</label>';
            echo '<input type="text" name="sintomas" value="'.$sintomas.'">';
            }
        }
            
            

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

            