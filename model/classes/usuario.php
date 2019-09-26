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

function __construct($id,$nome,$sobrenome,$genero,$dataNascimento,$altura,$peso,$tipoSanguineo){
    $this->id_usuario = $id;
    $this->nome_usuario = $nome;
    $this->sobrenome_usuario = $sobrenome;
    $this->genero_usuario = $genero;
    $this->dataNascimento_usuario = $dataNascimento;
    $this->altura_usuario = $altura;
    $this->peso_usuario = $peso;
    $this->tipoSanguineo_usuario = $tipoSanguineo;
}
//MÉTODOS GETS E SETS

function getId_usuario(){
    return $this->id_usuario;
}
function getEmail_usuario(){
    return $this->email_usuario;
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
function setEmail_usuario(){
    return $this->email_usuario;
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
function add($email, $senha, $senhaConfirma){

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

function del(){
    
}
function edit(){
    
}
//FECHA CLASSE
}

?>