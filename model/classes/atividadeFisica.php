<?php

//session_start();

class atividadeFisica{
private $idatividadeFisica="";
private $nome_atividadeFisica="";
private $duracao_atividadeFisica="";
private $horario_atividadeFisica="";
private $data_atividadeFisica="";


//CONSTRUTOR

function __construct(){
    $this->idatividadeFisica ="";
    $this->nome_atividadeFisica ="";
    $this->duracao_atividadeFisica ="";
    $this->horario_atividadeFisica ="";
    $this->data_atividadeFisica ="";
    
}
//MÉTODOS GETS E SETS

function getidatividadeFisica(){
    return $this->idatividadeFisica;
}
function getNome_atividadeFisica(){
    return $this->nome_atividadeFisica;
}
function getduracao_atividadeFisica(){
    return $this->duracao_atividadeFisica;
}
function getHorario_atividadeFisica(){
    return $this->horario_atividadeFisica;
}
function getdata_atividadeFisica(){
    return $this->data_atividadeFisica;
}

function setNome_atividadeFisica($nome){
     $this->nome_atividadeFisica= $nome;
}
function setduracao_atividadeFisica($duracao){
    $this->duracao_atividadeFisica = $duracao;
}
function setHorario_atividadeFisica($horario){
    $this->horario_atividadeFisica = $horario;
}
function setdata_atividadeFisica($data){
    $this->data_atividadeFisica = $data;
}


//MÉTODOS BANCO
function add($idUsuario){
    //codigo fonte

    $sql = "INSERT INTO atividadeFisica (nome_atividadeFisica, usuario_idusuario, duracao_atividadeFisica, horario_atividadeFisica, data_atividadeFisica) VALUES ('".$this->nome_atividadeFisica."',
    '{$idUsuario}', '" . $this->duracao_atividadeFisica ."', '".$this->horario_atividadeFisica."','".$this->data_atividadeFisica."')";
    echo $sql;
    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br >New record created successfully";
    } else {
    echo "Error:" . $sql . "<br>" . $GLOBALS['conn']->error;
    }

}

function del($id, $idUsuario){
    //codigo fonte

    $sql = "delete from atividadeFisica where idatividadeFisica='". $id."' and usuario_idusuario='{$idUsuario}'";
    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br > record deleted successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
    
    
    }
    
}
function edit($id, $idUsuario){
	$sql = "UPDATE atividadeFisica SET nome_atividadeFisica='{$this->nome_atividadeFisica}'
, duracao_atividadeFisica='{$this->duracao_atividadeFisica}'
, horario_atividadeFisica='{$this->horario_atividadeFisica}'
, data_atividadeFisica= '{$this->data_atividadeFisica}' WHERE idatividadeFisica={$id} and usuario_idusuario='{$idUsuario}'";

    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br > record updated successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
    
    }
    
}

}
//FECHA CLASSE



?>
