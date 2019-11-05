<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>+Idoso</title>
    <link rel="shortcut icon" href="../../img/ico.ico">
    <link rel="stylesheet" type="text/css" href="../../estilo/style.css">
</head>

<body>
<form name="formCad1" method="post" action="../../controller/scriptCadastro.php">
    <section class="container">
        <img id="logo-principal" src="../../img/logo-menor.png">
        <hr />
        <h3 class="titulo2">PRIMEIRO, CONTE-NOS UM POUCO MAIS SOBRE VOCÊ:</h3>
        <label class="descricao">NOME:</label>
        <input type="text" name="nome">
        <label class="descricao">SOBRENOME:</label>
        <input type="text" name="sobrenome">
        <label class="descricao">GÊNERO:</label>
        <select name="genero">
        <option value="1">Masculino</option>
        <option value="2">Feminino</option>
        <option value="3">Outro</option>
        </select>
        <label class="descricao">DATA DE NASCIMENTO:</label>
        <input type="date" name="dataNascimento">
        <hr>
        <input name="cad1" type="submit" value="PRÓXIMO">
    </section>
</form>
</body>

</html>