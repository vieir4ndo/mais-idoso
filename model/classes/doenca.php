<?php

include_once "../model/conexao.php";

class Medicamento{
    private $id_doenca="";
    private $tipo_doenca="";
    private $sintomas_doenca="";
 
    //CONSTRUTOR

function __construct(){
    $this->id_doenca ="";
    $this->tipo_doenca ="";
    $this->sintomas_doenca ="";
}
//MÉTODOS GETS E SETS

function getId_doenca(){
    return $this->id_doenca;
}
function getTipo_doenca(){
    return $this->tipo_doenca;
}
function getSintomas_doenca(){
    return $this->sintomas_doenca;
}

function setTipo_doenca($tipo){
     $this->tipo_doenca= $tipo;
}
function setSintomas_doenca($Sintomas){
    $this->sintomas_doenca = $Sintomas;
}

//MÉTODOS BANCO
function add(){
    //codigo fonte
    $sql = "INSERT INTO doenca (Tipo_doenca, Sintomas_doenca) VALUES ('".$this->Tipo_doenca."',
    '" . $this->Sintomas_doenca ."')";
    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br >New record created successfully";
    } else {
    echo "Error:" . $sql . "<br>" . $GLOBALS['conn']->error;
    }
}

function del($id){
    //codigo fonte
    $sql = "delete from doenca where id_doenca='". $id."'";
    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br > record deleted successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
    }
}
function edit($id){
	$sql = "UPDATE doenca SET id_doenca='{$this->id_doenca}'
, tipo_doenca='{$this->tipo_doenca}'
, sintomas_doenca='{$this->sintomas_doenca}'  WHERE sintomas_doenca={$id}";
    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br > record updated successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
    }
}
}
//FECHA CLASSE
$GLOBALS['medicamento'] = new Medicamento();


?>
