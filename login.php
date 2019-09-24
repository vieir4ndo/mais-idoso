<!DOCTYPE html>
<html>

<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>+Idoso</title>
    <link rel="shortcut icon" href="img/ico.ico">
    <link rel="stylesheet" type="text/css" href="estilo/style.css">

</head>

<body>
    <?php 
    $msg = '';
            
    if (!empty($_POST['email']) && !empty($_POST['senha'])) {
        
       if ($_POST['email'] == 'teste' && $_POST['senha'] == '1234') {
          $_SESSION['valid'] = true;
          
          $msg='You have entered valid use name and password';
          header('Location:index.html');

       }else {
          $msg = 'Wrong username or password';
          header('Location:login.php');
       }
    } else {

    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>">
        <section class="container">
        <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <img id="logo-principal" src="img/logo-menor.png">
            <hr />
            <h1 class="titulo">BEM-VINDO</h1>
            <label class="descricao">E-MAIL</label>
            <input type="text" name="email">
            <label class="descricao">SENHA</label>
            <input type="text" name="senha">
            <input type="submit" value="ENTRAR">
    </form>
    <input type="button" onclick="window.location.href='cadastro.html';" value="CRIAR CONTA">
    </section>
    </section>
</body>

</html>