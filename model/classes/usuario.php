<?php

include_once "../model/conexao.php";

class Usuario{
private $id_usuario="";
private $email_usuario="";
private $senha_usuario="";
private $nome_usuario="";
private $sobrenome_usuario="";
private $genero_usuario="";
private $dataNascimento_usuario="";
private $altura_usuario="";
private $peso_usuario="";
private $tipoSanguineo_usuario="";

//METODOS
function __construct(){
    $this->email_usuario = "";
    $this->senha_usuario = "";
    $this->nome_usuario = "";
    $this->sobrenome_usuario = "";
    $this->genero_usuario = "";
    $this->dataNascimento_usuario = "";
    $this->altura_usuario = "";
    $this->peso_usuario = "";
    $this->tipoSanguineo_usuario = "";
    }

function pegarID($email){
    $sql = "Select * from usuario where email_usuario ='".$email."'";
    if ($GLOBALS['conn']->query($sql) == TRUE) {
        echo "<br >PEGOUUU";
        echo '<script>';
        echo 'conole.log("Matheus");';
  echo 'console.log('. ($GLOBALS['conn']->query($sql) ) .');';
  echo '</script>';
        } else {
        echo "Error:" . $sql . "<br>" . $GLOBALS['conn']->error;
        }
}
    
function add($email, $senha, $senhaConfirma ){

    if ($senha === $senhaConfirma) {
    //codigo fonte
    $sql = "INSERT INTO usuario (email_usuario, senha_usuario) VALUES ('".$email."',
    '" . $senha ."')";
    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br >New record created successfully";
    } else {
    echo "Error:" . $sql . "<br>" . $GLOBALS['conn']->error;
    }
    }else {
        echo "Senhas não batem";
    }
}

function del($cod){
    //codigo fonte

    $sql = "delete from pessoa where cod='". $cod."'";
    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br > record deleted successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
    
    }
    }

function edit($cod){
    //codigo fonte
$sql = "UPDATE teste1.pessoa SET nome='{$this->nome}'
, email='{$this->email}'
, celular='{$this->celular}'
, dt_nascimento= '{$this->dt_nascimento}' WHERE cod='{$cod}'";

    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br > record updated successfully";
    echo $sql;
    } else {
    echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
    
    }
    }
}

$GLOBALS['user'] = new Usuario();

?>