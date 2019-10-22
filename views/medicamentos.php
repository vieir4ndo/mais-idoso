<!DOCTYPE html>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
        <img id="logo-principal" src="../img/medicacao.png">
        <hr />
        <form name="formConMedicamentos" method="POST" action="manterMedicamentos.php">
        <?php
        require_once "../model/conexao.php";
        require_once "../model/classes/medicamento.php";

        $sql = "SELECT nome_medicamento FROM medicamento";// where medicamento_id_medicamento=". $GLOBALS['user']->getId_usuario();

        $consulta = $GLOBALS['conn']->query($sql);

        $i = 0;

        while ($row = $consulta->fetch_assoc()){   
        echo "<button type='submit' name='nome_medicamento' value='{$row['nome_medicamento']}'  class='container-data'>{$row['nome_medicamento']}</button>";
         $i++;
        }
        //}else {
        //    echo "<button class='container-data'>Nenhum medicamento cadastrado</button>";
        //}
        ?>
        <hr>
        <section>
            <input type="submit" name="incluir" value="INCLUIR">
        </section>
        </form>
    </section>
</body>

</html>