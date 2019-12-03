<!DOCTYPE html>
<html>
<?php 
require_once "model/classes/usuario.php";
session_start();
//$_SESSION['user'] = unserialize(serialize($_SESSION['user']));
//echo $_SESSION['user']->getIdusuario();
if ($_SESSION['logado']==true){
?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>+Idoso</title>
    <link rel="shortcut icon" href="img/ico.ico">
    <link rel="stylesheet" type="text/css" href="estilo/style.css">
</head>
<script type="text/javascript">
    function myFunction(id) {
  var x = document.getElementById(id);
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
<body>
    <header class="menu-principal">
        <a href="views/cartilha.php" id="img"><img src="img/cartilha.png"></a>
        <a href="views/perfil.php" id="img2"><img src="img/avatar.png"></a>
        <a href="views/conf.php" id="img4"><img src="img/conf.png"></a>
    </header>
    <section class="container">
        <img id="logo-principal" src="img/logo.png">
        <hr />
        <nav id="nav-principal">
            <a href="views/medicamentos.php"><img src="img/logo2.png"></a>
            <a href="views/alimentacao.php"><img src="img/logo3.png"></a>
            <a href="views/atvfisicas.php"><img src="img/logo4.png"></a>
            <a href="views/consultas.php"><img src="img/logo5.png"></a>
        </nav>
    </section>
    <section class="container">
        <img id="logo-principal" src="img/lembretes.png">
        <hr />
        <?php
        require_once "model/conexao.php";
        require_once "model/classes/medicamento.php";
        require_once "model/classes/consulta.php";
        $id = $_SESSION['user']->getIdusuario();
        $sql = "SELECT * from medicamento where usuario_idusuario={$id}";
        if ($GLOBALS['conn']->query($sql)==true){
        $consulta = $GLOBALS['conn']->query($sql);
        $i=0;
        while ($row = $consulta->fetch_assoc()){   
            $i++;
        ?>
        <section class="lembrete" id=<?php echo $i; ?>>
        <label class="titulo-lembrete" >MEDICAMENTO</label><button onclick="myFunction(<?php echo $i; ?>)" class="botao-lembrete"><img class="img-lembrete" src="img/minimizar.png"></button><br/><br/>
        <label class="descricao-lembrete">Nome:<?php echo $row['nome_medicamento']?></label><br/>
        <label class="descricao-lembrete">Horário:<?php echo $row['horario_medicamento']?></label><br/>
        <label class="descricao-lembrete">Dosagem:<?php echo $row['dosagem_medicamento']?></label><br/>
        <hr>
        </section>
        
        <?php
        }
        } 
        $sql = "SELECT local_consulta, horario_consulta, DATE_FORMAT(data_consulta, '%d/%m/%Y') as data_consulta from consulta where usuario_idusuario={$id}";
        if ($GLOBALS['conn']->query($sql)==true){
        $consulta1 = $GLOBALS['conn']->query($sql);
        while ($row = $consulta1->fetch_assoc()){   
            $i++;
        ?>
        <section class="lembrete" id=<?php echo $i; ?>>
        <label class="titulo-lembrete">CONSULTA</label><button onclick="myFunction(<?php echo $i; ?>)" class="botao-lembrete"><img class="img-lembrete" src="img/minimizar.png"></button><br/><br/>
        <label class="descricao-lembrete">Local:<?php echo $row['local_consulta']?></label><br/>
        <label class="descricao-lembrete">Data:<?php echo $row['data_consulta']?></label><br/>
        <label class="descricao-lembrete">Horário:<?php echo $row['horario_consulta']?></label><br/>
        <hr>
        </section>
        
        <?php
        }
    }
    $verificar = mysqli_num_rows($consulta);
    
    $verificar1 = mysqli_num_rows($consulta1);
            
        if (empty($verificar) && empty($verificar1)){
            echo "<button class='alertInfo'>Nenhum lembrete cadastrado</button>";
        }
        ?>
    </section>      
</body>
<?php 
} else {
    header('Location: views/login.php');
}
?>
</html>
