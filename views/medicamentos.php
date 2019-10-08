<!DOCTYPE html>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>+Idoso</title>
    <link rel="shortcut icon" href="../img/ico.ico">
    <link rel="stylesheet" type="text/css" href="../estilo/style.css">
</head>

<body>
    <header class="menu-principal">
        <a href="../index.html" id="img"><img src="../img/home.png"></a>
        <a href="perfil.html" id="img2"><img src="../img/avatar.png"></a>
        <a href="conf.html" id="img4"><img src="../img/conf.png"></a>
    </header>
    <section class="container">
        <img id="logo-principal" src="../img/medicacao.png">
        <hr />
<?php

require_once "../model/conexao.php";

require_once "../model/classes/medicamento.php";

$sql = "Select * from medicamento";
$consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);

$dado = $consulta->fetch_array();

$teste;

for($i=0;$i<4;$i++){
    $teste[$i] = $dado['nome_medicamento'][$i];
}

foreach  ($teste as &$nome_medicamento) {
        echo $nome_medicamento;
         //echo "<a class='container-data'".$result['nome_medicamento']."</a>";;
        }
    
?>
        <hr>
        <section>
            <input type="button" onclick="window.location.href='manterMedicamentos.html';" value="INCLUIR">
        </section>
    </section>
</body>

</html>