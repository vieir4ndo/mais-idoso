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
        <?php
        require_once "../model/conexao.php";
        require_once "../model/classes/medicamento.php";
        require_once "../model/classes/usuario.php";

        $sql = "Select nome_medicamento from medicamento";// where medicamento_id_medicamento=". $GLOBALS['user']->getId_usuario();

        $consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);

        $consulta = $consulta->fetch_array();

        echo "<form name='formConMedicamentos' method='POST' action='../controller/consultas/scriptConMedicamentos.php'>";

        foreach ($consulta as &$value) {
                 echo "<button type='submit' name='nome_medicamento' value='".$value."' class='container-data' >".$value."</button>";
                }

         echo "</form>";
        ?>
        <hr>
        <section>
            <input type="button" onclick="window.location.href='manterMedicamentos.php';" value="INCLUIR">
        </section>
    </section>
</body>

</html>