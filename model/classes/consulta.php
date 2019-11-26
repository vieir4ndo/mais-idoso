<?php
require_once ('C:/xampp/htdocs/maisidoso/model/conexao.php');

class Consulta{
private $id_consulta="";
private $tipo_consulta="";
private $local_consulta="";
private $horario_consulta="";
private $medico_consulta="";

// CONSTRUTOR

function __construct(){
	$this->id_consulta =""; 
	$this->tipo_consulta =""; 
	$this->local_consulta =""; 
	$this->horario_consulta =""; 
	$this->medico_consulta =""; 

}

//METODOS GETS E SETS

function getId_consulta(){
	return $this->id_consulta;
}
function getTipo_consulta(){
	return $this->tipo_consulta;
}
}
function getLocal_consulta(){
	return $this->local_consulta;
}
function getHorario_consulta(){
	return $this->horario_consulta;
}
function getMedico_consulta(){
	return $this->medico_consulta;
}
 function setTipo_consulta($tipo_consulta){
 	$this->tipo_consulta= $tipo_consulta;
 }
 function setLocal_consulta($local){
 	$this->local_consulta= $local;
 }
 function setHorario_consulta($horario){
 	$this->horario_consulta= $horario;
 }
 function setMedico_consulta($medico){
 	$this->medico_consulta= $medico;
 }

 //METODOS BANCO
function add(){
    //codigo fonte

    $sql = "INSERT INTO consulta (tipo_consulta, local_consulta, horario_consulta, medico_consulta) VALUES ('".$this->tipo_consulta."',
    '" . $this->local_consulta ."', '".$this->horario_consulta."','".$this->medico_consulta."')";
    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br >New record created successfully";
    } else {
    echo "Error:" . $sql . "<br>" . $GLOBALS['conn']->error;
    }

}

function del($id){
    //codigo fonte

    $sql = "delete from consulta where id_consulta='". $id."'";
    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br > record deleted successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
    
    
    }
    
}

function edit($id){
	$sql = "UPDATE consulta SET tipo_consulta='{$this->tipo_consulta}'
, local_consulta='{$this->local_consulta}'
, horario_consulta='{$this->horario_consulta}'
, medico_consulta= '{$this->medico_consulta}' WHERE id_consulta={$id}";

    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br > record updated successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
    
    }
    
}


}
//FECHA CLASSE


$GLOBALS['consulta'] = new Consulta;


?>







