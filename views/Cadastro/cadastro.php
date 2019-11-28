<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>+Idoso</title>
    <link rel="shortcut icon" href="../img/ico.ico">
    <link rel="stylesheet" type="text/css" href="../../estilo/style.css">

</head>
<body>
    <form name="formCad" method="post" action="../../controller/scriptCadastro.php">
        <section class="container">
            <img id="logo-principal" src="../../img/logo-menor.png">
            <hr />
            <?php
            session_start();
            
            if (isset($_SESSION['erroEmailCadastrado'])){
            if ($_SESSION['erroEmailCadastrado']==true){
            echo '<button class="alertErro">Este e-mail já está em uso, tente outro.</button>';
            }
        }
        if (isset($_SESSION['erroSenhas'])){
            if ($_SESSION['erroSenhas']==true){
                echo '<button class="alertErro">Essas senhas não coincidem, tente novamente.</button>';
                }
            }
            ?>
            <h1 class="titulo">CADASTRO</h1>
          
            <label class="descricao">E-MAIL</label>
            <input type="email" name="email" required>
            <label class="descricao">SENHA</label>
            <input type="password" name="senha" required>
            <label class="descricao">CONFIRMAR SENHA</label>
            <input type="password" name="senha1" required>
            <input name="cad"type="submit" value="PROXIMO">
        </section>
    </form>
</body>

</html>