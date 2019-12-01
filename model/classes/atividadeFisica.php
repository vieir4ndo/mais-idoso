<?php

//session_start();

class AtividadeFisica{
private $idatividadeFisica="";
private $atividade_atividadeFisica="";
private $duracao_atividadeFisica="";
private $data_atividadeFisica="";


//CONSTRUTOR

function __construct(){
    $this->idatividadeFisica ="";
    $this->atividade_atividadeFisica ="";
    $this->duracao_atividadeFisica ="";
    $this->data_atividadeFisica ="";
    
}
//MÉTODOS GETS E SETS

function getidatividadeFisica(){
    return $this->idatividadeFisica;
}
function getatividade_atividadeFisicaFisica(){
    return $this->atividade_atividadeFisica;
}
function getduracao_atividadeFisica(){
    return $this->duracao_atividadeFisica;
}
function getdata_atividadeFisica(){
    return $this->data_atividadeFisica;
}

function setatividade_atividadeFisicaFisica($nome){
     $this->atividade_atividadeFisica= $nome;
}
function setduracao_atividadeFisica($duracao){
    $this->duracao_atividadeFisica = $duracao;
}
function setdata_atividadeFisica($data){
    $this->data_atividadeFisica = $data;
}


//MÉTODOS BANCO
function add($idUsuario){
    //codigo fonte

    $sql = "INSERT INTO atividadeFisica (atividade_atividadefisica, usuario_idusuario, 
    duracao_atividadefisica, data_atividadefisica) VALUES ('".$this->atividade_atividadeFisica."',
    '{$idUsuario}', '" . $this->duracao_atividadeFisica ."','".$this->data_atividadeFisica."')";
    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br >New record created successfully";
    } else {
    echo "Error:" . $sql . "<br>" . $GLOBALS['conn']->error;
    }

}

function del($id, $idUsuario){
    //codigo fonte
    $sql = "delete from atividadeFisica where idatividadeFisica={$id} and usuario_idusuario={$idUsuario}";
    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br > record deleted successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
    
    
    }
    
}
function edit($id, $idUsuario){
	$sql = "UPDATE atividadeFisica SET atividade_atividadeFisicafisica='{$this->atividade_atividadeFisica}'
, duracao_atividadeFisica='{$this->duracao_atividadeFisica}'
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
