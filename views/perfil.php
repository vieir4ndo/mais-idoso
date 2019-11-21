<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>+Idoso</title>
    <link rel="shortcut icon" href="../img/ico.ico">
    <link rel="stylesheet" type="text/css" href="../estilo/style.css">
</head>
<body>
    <section class="menu-principal">
        <a href="../index.php" id="img"><img src="../img/home.png"></a>
        <a href="perfil.php" id="img2"><img src="../img/avatar.png"></a>
        <a href="conf.php" id="img4"><img src="../img/conf.png"></a>
    </section>
    <section class="container">
        <img id="logo-principal" src="../img/avatar.png">
    </section>
    <form name="infoPessoais" method="POST" action="../controller/scriptPerfil.php">
    <?php
        require_once "../model/conexao.php";
        require_once "../model/classes/usuario.php";
        session_start();
        $id = $_SESSION['user']->getIdusuario();
        $sql = "SELECT * from usuario where idusuario={$id}";
        $consulta = $GLOBALS['conn'] ->query($sql);      
        $consulta = $consulta->fetch_array();  
        echo '<section class="container">';
        echo '<h1 class="titulo">INFORMAÇÕES PESSOAIS</h1>';
        echo '<label class="descricao">NOME:</label>';
        echo '<input type="text" name="nome" value="'.$consulta['nome_usuario'].'">';
        echo '<label class="descricao">SOBRENOME:</label>';
        echo '<input type="text" name="sobrenome" value="'.$consulta['sobrenome_usuario'].'">';
        echo '<label class="descricao">GÊNERO:</label>';
        echo '<select name="genero">';
        if ($consulta['genero_usuario'] == "1") {
            echo '<option value="1" selected >Masculino</option>';
            echo '<option value="2" >Feminino</option>';
            echo '<option value="3" >Outro</option>';
        } elseif ($consulta['genero_usuario'] == "2") {
            echo '<option value="1"  >Masculino</option>';
            echo '<option value="2" selected >Feminino</option>';
            echo '<option value="3" >Outro</option>';
        } else {
            echo '<option value="1" >Masculino</option>';
            echo '<option value="2" >Feminino</option>';
            echo '<option value="3" selected >Outro</option>';
        }
        echo '</select>';
        echo '<label class="descricao">DATA DE NASCIMENTO:</label>';
        echo '<input type="date" name="dataNascimento" value="'.$consulta['dataNascimento_usuario'].'">';
        echo '<hr>';
        echo '<input type="submit" name="infoPessoais" class="button" value="SALVAR">';
        echo '</section>';
        echo '</form>';
        echo '<form name="infoMedicas" method="POST" action="../controller/scriptPerfil.php">';
        echo '<section class="container">';
        echo '<h1 class="titulo">INFORMAÇÕES MÉDICAS</h1>';
        echo '<label class="descricao">ALTURA:</label>';
        echo '<input type="text" name="altura" value="'.$consulta['altura_usuario'].'">';
        echo '<label class="descricao">PESO:</label>';
        echo '<input type="text" name="peso" value="'.$consulta['peso_usuario'].'">';
        echo '<label class="descricao">TIPO SANGUÍNEO:</label>';
        if ($consulta['tipoSanguineo_usuario'] == "0") {
            echo '<select name="tipoSanguineo">';
            echo '<option value="0" selected >Selecione</option>';
            echo '<option value="1" >A+</option>';
            echo '<option value="2">A-</option>';
            echo '<option value="3">B+</option>';
            echo '<option value="4">B-</option>';
            echo '<option value="5">AB+</option>';
            echo '<option value="6">AB-</option>';
            echo '<option value="7">O+</option>';
            echo '<option value="8">O-</option>';
        }elseif ($consulta['tipoSanguineo_usuario'] == "1") {
            echo '<select name="tipoSanguineo">';
            echo '<option value="1" selected >A+</option>';
            echo '<option value="2">A-</option>';
            echo '<option value="3">B+</option>';
            echo '<option value="4">B-</option>';
            echo '<option value="5">AB+</option>';
            echo '<option value="6">AB-</option>';
            echo '<option value="7">O+</option>';
            echo '<option value="8">O-</option>';
        } elseif ($consulta['tipoSanguineo_usuario'] == "2"){
            echo '<select name="tipoSanguineo">';
            echo '<option value="1">A+</option>';
            echo '<option value="2" selected>A-</option>';
            echo '<option value="3">B+</option>';
            echo '<option value="4">B-</option>';
            echo '<option value="5">AB+</option>';
            echo '<option value="6">AB-</option>';
            echo '<option value="7">O+</option>';
            echo '<option value="8">O-</option>';
        } elseif ($consulta['tipoSanguineo_usuario'] == "3"){
            echo '<select name="tipoSanguineo">';
            echo '<option value="1">A+</option>';
            echo '<option value="2">A-</option>';
            echo '<option value="3" selected>B+</option>';
            echo '<option value="4">B-</option>';
            echo '<option value="5">AB+</option>';
            echo '<option value="6">AB-</option>';
            echo '<option value="7">O+</option>';
            echo '<option value="8">O-</option>';
        } elseif ($consulta['tipoSanguineo_usuario'] == "4"){
            echo '<select name="tipoSanguineo">';
            echo '<option value="1">A+</option>';
            echo '<option value="2">A-</option>';
            echo '<option value="3">B+</option>';
            echo '<option value="4" selected>B-</option>';
            echo '<option value="5">AB+</option>';
            echo '<option value="6">AB-</option>';
            echo '<option value="7">O+</option>';
            echo '<option value="8">O-</option>';
        }elseif ($consulta['tipoSanguineo_usuario'] == "5"){
            echo '<select name="tipoSanguineo">';
            echo '<option value="1">A+</option>';
            echo '<option value="2">A-</option>';
            echo '<option value="3">B+</option>';
            echo '<option value="4">B-</option>';
            echo '<option value="5" selected>AB+</option>';
            echo '<option value="6">AB-</option>';
            echo '<option value="7">O+</option>';
            echo '<option value="8">O-</option>';
        }elseif ($consulta['tipoSanguineo_usuario'] == "6"){
            echo '<select name="tipoSanguineo">';
            echo '<option value="1">A+</option>';
            echo '<option value="2">A-</option>';
            echo '<option value="3">B+</option>';
            echo '<option value="4">B-</option>';
            echo '<option value="5">AB+</option>';
            echo '<option value="6" selected>AB-</option>';
            echo '<option value="7">O+</option>';
            echo '<option value="8">O-</option>';
        }elseif ($consulta['tipoSanguineo_usuario'] == "7"){
            echo '<select name="tipoSanguineo">';
            echo '<option value="1">A+</option>';
            echo '<option value="2">A-</option>';
            echo '<option value="3">B+</option>';
            echo '<option value="4">B-</option>';
            echo '<option value="5">AB+</option>';
            echo '<option value="6">AB-</option>';
            echo '<option value="7" selected>O+</option>';
            echo '<option value="8">O-</option>';
        }elseif ($consulta['tipoSanguineo_usuario'] == "8"){
            echo '<select name="tipoSanguineo">';
            echo '<option value="1">A+</option>';
            echo '<option value="2">A-</option>';
            echo '<option value="3">B+</option>';
            echo '<option value="4">B-</option>';
            echo '<option value="5">AB+</option>';
            echo '<option value="6">AB-</option>';
            echo '<option value="7">O+</option>';
            echo '<option value="8" selected>O-</option>';
        }
        ?>
        </select>
        <hr>
        <input type="submit" name="infoMedicas" class="button" value="SALVAR">
    </section>
    </form>
    <form name="formConDoenca" method="POST" action="manterDoencas.php">
    <section class="container">
            <h1 class="titulo">DOENÇAS</h1>
            <hr>
        <?php
       // require_once "../model/classes/usuario.php";
        $sql = "SELECT nome_doenca from doenca where usuario_idusuario={$id}";

        if ($GLOBALS['conn']->query($sql)==true){
            $consulta = $GLOBALS['conn']->query($sql);
            while ($row = $consulta->fetch_assoc()){   
                echo "<button type='submit' name='nome_doenca' value='".$row['nome_doenca']."'  class='container-data'>".$row['nome_doenca']."</button>";
            }
            } else {
                echo "<button class='alertInfo'>Nenhuma doenca cadastrado</button>";
            }

        ?>
        <hr>
        <section>
            <input type="submit" name="incluir" value="INCLUIR">
        </section>
    </section>
    </form>
</body>

</html>