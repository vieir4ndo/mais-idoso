<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>+Idoso</title>
    <link rel="shortcut icon" href="../img/ico.ico">
    <link rel="stylesheet" type="text/css" href="../estilo/style.css">

</head>

<body>

    <form name="formLogin" method="post" action="../controller/scriptLogin.php">
        <section class="container">
            <img id="logo-principal" src="../img/logo-menor.png">
            <hr />
            
            <h1 class="titulo">BEM-VINDO</h1>
            <?php
            session_start();
            if (isset($_SESSION['erroSenha'])){
            if ($_SESSION['erroSenha']==true){
            echo '<button class="alertErro">Senha incorreta, tente novamente.</button>';
            }
            }
            if (isset($_SESSION['erroEmail'])){
            if ($_SESSION['erroEmail']==true){
            echo '<button class="alertErro">Não foi possível encontrar sua conta, tente novamente.</button>';
            }
            }
            ?>
            <label class="descricao">E-MAIL</label>
            <input type="email" name="email" required>
            <label class="descricao">SENHA</label>
            <input type="password" name="senha" required>
            <input type="submit" name="login" value="ENTRAR">
    </form>
    <input type="button" onclick="window.location.href='Cadastro/cadastro.php';" value="CRIAR CONTA">
    </section>
    </section>
</body>

</html>