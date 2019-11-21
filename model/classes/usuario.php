<?php

//session_start();

class Usuario{
private $idusuario="";
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
    $this->idusuario = "";
    $this->nome_usuario = "";
    $this->sobrenome_usuario = "";
    $this->genero_usuario = "";
    $this->dataNascimento_usuario = "";
    $this->altura_usuario = "";
    $this->peso_usuario = "";
    $this->tipoSanguineo_usuario = "";
}
//MÉTODOS GETS E SETS

function getidusuario(){
    return $this->idusuario;
}
function getEmail_usuario(){
    return $this->email_usuario;
}
function getSenha_usuario(){
    return $this->senha_usuario;
}
function getNome_usuario(){
    return $this->nome_usuario;
}
function getSobrenome_usuario(){
    return $this->sobrenome_usuario;
}
function getGenero_usuario(){
    return $this->genero_usuario;
}
function getDataNascimento_usuario(){
    return $this->dataNascimento_usuario;
}
function getAltura_usuario(){
    return $this->altura_usuario;
}
function getPeso_usuario(){
    return $this->peso_usuario;
}
function getTipoSanguineo_usuario(){
    return $this->tipoSanguineo_usuario;
}
function setidusuario($id){
    $this->idusuario= $id;
}
function setEmail_usuario($email){
    $this->email_usuario = $email;
}
function setSenha_usuario($senha){
    $this->senha_usuario = $senha;
}
function setNome_usuario($nome){
    $this->nome_usuario = $nome;
}
function setSobrenome_usuario($sobrenome){
    $this->sobrenome_usuario = $sobrenome;
}
function setGenero_usuario($genero){
    $this->genero_usuario = $genero;
}
function setDataNascimento_usuario($dataNascimento){
    $this->dataNascimento_usuario = $dataNascimento;
}
function setAltura_usuario($altura){
    $this->altura_usuario = $altura;
}
function setPeso_usuario($peso){
    $this->peso_usuario = $peso;
}
function setTipoSanguineo_usuario($tipoSanguineo){
    $this->tipoSanguineo_usuario = $tipoSanguineo;
}

//MÉTODOS BANCO

function capturaID($email){
    $sql = "Select * from usuario where email_usuario ='". $email ."'";
    $consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);    
    $consulta = $consulta->fetch_assoc();
    $_SESSION['user']->setIdusuario($consulta['idusuario']);
}
function addUsuario($email, $senha, $senhaConfirma){
    $sql = "Select * from usuario where email_usuario ='". $email ."'";
    $consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);    
    $consulta = $consulta->fetch_assoc();
    if ($consulta['idusuario'] == '') {
    if ($senha === $senhaConfirma) {
    $i=1;
    $sql = 'INSERT INTO usuario (email_usuario, senha_usuario)VALUES ("'.$email.'","'.$senha.'")';
    echo $sql;
    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br >New record created successfully";
    $_SESSION['user']->setEmail_usuario($email);
    $_SESSION['user']->setSenha_usuario($senha);
    header('Location: ../views/cadastro/cadastro1.php');
    } else {
    echo "Error:" . $sql . "<br>" . $GLOBALS['conn']->error;
    }
    }else {
        echo "Senhas não batem";
    }
    } else {
        echo 'email cadastrado';
    }
}

function addUsuario2($email, $nome, $sobrenome, $genero, $dataNascimento){
    $sql = "UPDATE usuario SET nome_usuario='{$nome}', sobrenome_usuario='{$sobrenome}'
    , genero_usuario={$genero}, dataNascimento_usuario='{$dataNascimento}' where email_usuario='{$email}'";
    echo $sql;
    if ($GLOBALS['conn']->query($sql) == TRUE) {
        echo "<br >New record created successfully";
        $_SESSION['user']->setNome_usuario($nome);
        $_SESSION['user']->setSobrenome_usuario($sobrenome);
        $_SESSION['user']->setGenero_usuario($genero);
        $_SESSION['user']->setDataNascimento_usuario($dataNasicmento);
        header('Location: ../views/cadastro/cadastro2.php');
        }
}
function addUsuario3($email, $altura, $peso, $tipoSanguineo){
    $sql = "UPDATE usuario SET altura_usuario='{$altura}', peso_usuario='{$peso}'
    , tipoSanguineo_usuario='{$tipoSanguineo}' where email_usuario='{$email}'";
    echo $sql;
    if ($GLOBALS['conn']->query($sql) == TRUE) {
        echo "<br >New record created successfully";
        $_SESSION['user']->setAltura_usuario($altura);
        $_SESSION['user']->setPeso_usuario($peso);
        $_SESSION['user']->setTipoSanguineo_usuario($tipoSanguineo);
        header('Location: ../views/cadastro/cadastro3.php');
        echo "to aqui";
        }else {
            echo"não entrou";
        }
}

function del($id){
    //codigo fonte
    $sql = "delete from usuario where idusuario='". $id."'";
    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br > record deleted successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
}
}
function editInfoPessoais($id, $nome, $sobrenome, $genero, $dataNascimento){
    $sql = "UPDATE usuario SET nome_usuario='{$nome}'
    , sobrenome_usuario='{$sobrenome}'
    , genero_usuario='{$genero}'
    , dataNascimento_usuario= '{$dataNascimento}' WHERE idusuario={$id}";
    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br > record updated successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
    }
}
function editInfoMedicas($id, $altura, $peso, $tipoSanguineo){
    $sql = "UPDATE usuario SET altura_usuario='{$altura}'
    , peso_usuario='{$peso}'
    , tipoSanguineo_usuario='{$tipoSanguineo}' WHERE idusuario={$id}";
    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br > record updated successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
    }
}
//FECHA CLASSE
}

?>