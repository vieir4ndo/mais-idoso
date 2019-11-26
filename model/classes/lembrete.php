<?php
//session_start();

class Lembrete{
    
    private $idlembrete="";
    private $usuario_idusuario="";
    private $titulo_lembrete="";
    private $horario_lembrete="";
    private $data_lembrete="";
 
    //CONSTRUTOR

function __construct(){
    $this->idlembrete ="";
    $this->usuario_idusuario="";
    $this->titulo_lembrete ="";
    $this->horario_lembrete ="";
    $this->data_lembrete ="";
}
//MÉTODOS GETS E SETS

function getidlembrete(){
    return $this->idlembrete;
}
function getUsuario_idusuario(){
    return $this->usuario_idusuario;
}
function getTitulo_lembrete(){
    return $this->titulo_lembrete;
}
function getHorario_lembrete(){
    return $this->horario_lembrete;
}
function getData_lembrete(){
    return $this->data_lembrete;
}
function setUsuario_idusuario($usuario){
     $this->usuario_idusuario= $usuario;
}
function setTitulo_lembrete($titulo){
    $this->titulo_lembrete = $titulo;
}
function setHorario_lembrete($horario){
    $this->horario_lembrete = $horario;
}
function setData_lembrete($data){
    $this->data_lembrete = $data;
}

//MÉTODOS BANCO
function add($idUsuario){
    //codigo fonte
    $sql = "INSERT INTO lembrete (idlembrete, usuario_idusuario, titulo_lembrete, horario_lembrete, data_lembrete) 
    VALUES ('".$this->titulo_lembrete."', '{$idUsuario}',
    '".$this->horario_lembrete."',
'" . $this->data_lembrete ."')";
    //echo $sql;
    if ($GLOBALS['conn']->query($sql) == TRUE) {
    //echo "<br >New record created successfully";
    } else {
    //echo "Error:" . $sql . "<br>" . $GLOBALS['conn']->error;
    }
}

function del($id, $idUsuario){
    //codigo fonte
    $sql = "delete from lembrete where idlembrete='". $id."' AND usuario_idusuario='{$idUsuario}'";
    if ($GLOBALS['conn']->query($sql) == TRUE) {
   // echo "<br > record deleted successfully";
    } else {
    //echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
    }
}

//FECHA CLASSE