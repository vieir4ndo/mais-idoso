<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>+Idoso</title>
    <link rel="shortcut icon" href="../../img/ico.ico">
    <link rel="stylesheet" type="text/css" href="../../estilo/style.css">
</head>

<body>
<form name="formCad2" method="post" action="../../controller/scriptCadastro.php">
    <section class="container">
        <img id="logo-principal" src="../../img/logo-menor.png">
        <hr />
        <h3 class="titulo2">AGORA, VAMOS PRECISAR DE SUAS INFORMAÇÕES MÉDICAS:</h3>
        <label class="descricao">ALTURA:</label>
        <input type="number" step="0.001" name="altura">
        <label class="descricao">PESO:</label>
        <input type="number" step="0.001" name="peso">
        <label class="descricao">TIPO SANGUÍNEO:</label>
        <select name="tipoSanguineo">
            <option value="1">A+</option>
            <option value="2">A-</option>
            <option value="3">B+</option>
            <option value="4">B-</option>
            <option value="5">AB+</option>
            <option value="6">AB-</option>
            <option value="7">O+</option>
            <option value="8">O-</option>
        </select>
        <hr>
        <input name="cad2" type="submit" value="PRÓXIMO">
    </section>
    </form>
</body>

</html>