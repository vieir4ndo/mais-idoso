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
    <section class="container">
        <h1 class="titulo">INFORMAÇÕES PESSOAIS</h1>
        <label class="descricao">NOME:</label>
        <input type="text" name="nome" value="">
        <label class="descricao">SOBRENOME:</label>
        <input type="text" name="Sobrenome">
        <label class="descricao">GÊNERO:</label>
        <input type="text" name="genero">
        <label class="descricao">DATA DE NASCIMENTO:</label>
        <input type="date" name="dataNasc">
        <hr>
        <input type="submit" class="button" value="SALVAR">
    </section>
    <section class="container">
        <h1 class="titulo">INFORMAÇÕES MÉDICAS</h1>
        <label class="descricao">ALTURA:</label>
        <input type="text" name="nome">
        <label class="descricao">PESO:</label>
        <input type="text" name="Sobrenome">
        <label class="descricao">TIPO SANGUÍNEO:</label>
        <select name="tipoSanguineo">
            <option value="volvo">A+</option>
            <option value="saab">A-</option>
            <option value="fiat">B+</option>
            <option value="audi">B-</option>
            <option value="fiat">AB+</option>
            <option value="audi">AB-</option>
            <option value="fiat">O+</option>
            <option value="audi">O-</option>
        </select>
        <hr>
        <input type="submit" class="button" value="SALVAR">
    </section>
    <section class="container">
            <h1 class="titulo">DOENÇAS</h1>
            <hr>
            <form name="formConDoenca" method="POST" action="manterDoencas.php">
        <?php
        require_once "../model/conexao.php";
        require_once "../model/classes/doenca.php";
       // require_once "../model/classes/usuario.php";
        $sql = "SELECT nome_doenca from doenca";
        $consulta = $GLOBALS['conn'] ->query($sql);
        $i=0;
        while($row = $consulta-> fetch_assoc()){
            echo "<button type='submit' name='nome_doenca' value='{$row['nome_doenca']}' class='container-data'>{$row['nome_doenca']}</button>";
            $i++;
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