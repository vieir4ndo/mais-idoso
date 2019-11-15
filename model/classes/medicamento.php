<?php

require_once ('C:/xampp/htdocs/maisidoso/model/conexao.php');
//session_start();

class Medicamento{
private $idmedicamento="";
private $nome_medicamento="";
private $indicacao_medicamento="";
private $horario_medicamento="";
private $dosagem_medicamento="";


//CONSTRUTOR

function __construct(){
    $this->idmedicamento ="";
    $this->nome_medicamento ="";
    $this->indicacao_medicamento ="";
    $this->horario_medicamento ="";
    $this->dosagem_medicamento ="";
    
}
//MÉTODOS GETS E SETS

function getidmedicamento(){
    return $this->idmedicamento;
}
function getNome_medicamento(){
    return $this->nome_medicamento;
}
function getIndicacao_medicamento(){
    return $this->indicacao_medicamento;
}
function getHorario_medicamento(){
    return $this->horario_medicamento;
}
function getDosagem_medicamento(){
    return $this->dosagem_medicamento;
}

function setNome_medicamento($nome){
     $this->nome_medicamento= $nome;
}
function setIndicacao_medicamento($indicacao){
    $this->indicacao_medicamento = $indicacao;
}
function setHorario_medicamento($horario){
    $this->horario_medicamento = $horario;
}
function setDosagem_medicamento($dosagem){
    $this->dosagem_medicamento = $dosagem;
}


//MÉTODOS BANCO
function add($idUsuario){
    //codigo fonte

    $sql = "INSERT INTO medicamento (nome_medicamento, usuario_idusuario, indicacao_medicamento, horario_medicamento, dosagem_medicamento) VALUES ('".$this->nome_medicamento."',
    '{$idUsuario}', '" . $this->indicacao_medicamento ."', '".$this->horario_medicamento."','".$this->dosagem_medicamento."')";
    echo $sql;
    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br >New record created successfully";
    } else {
    echo "Error:" . $sql . "<br>" . $GLOBALS['conn']->error;
    }

}

function del($id, $idUsuario){
    //codigo fonte

    $sql = "delete from medicamento where idmedicamento='". $id."' and usuario_idusuario='{$idUsuario}'";
    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br > record deleted successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
    
    
    }
    
}
function edit($id, $idUsuario){
	$sql = "UPDATE medicamento SET nome_medicamento='{$this->nome_medicamento}'
, indicacao_medicamento='{$this->indicacao_medicamento}'
, horario_medicamento='{$this->horario_medicamento}'
, dosagem_medicamento= '{$this->dosagem_medicamento}' WHERE idmedicamento={$id} and usuario_idusuario='{$idUsuario}'";

    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br > record updated successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
    
    }
    
}

}
//FECHA CLASSE



?>
