<?php

//session_start();      

class Consulta{
private $idconsulta="";
private $tipo_consulta="";
private $local_consulta="";
private $data_consulta="";
private $horario_consulta="";
private $medico_consulta="";


//  CONSTRUTOR

function __construct(){
	$this->idconsulta =""; 
	$this->tipo_consulta =""; 
    $this->local_consulta ="";
    $this->data_consulta = "";
	$this->horario_consulta =""; 
	$this->medico_consulta =""; 
}
//METODOS GETS E SETS

function getidconsulta(){
	return $this->idconsulta;
}
function getTipo_consulta(){
	return $this->tipo_consulta;
}

function getLocal_consulta(){
	return $this->local_consulta;
}

function getData_consulta(){
	return $this->data_consulta;
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
 
function setData_consulta($data_consulta){
    $this->data_consulta = $data_consulta;
}
 //MÉTODOS BANCO
function add($idUsuario){
    //codigo fonte

    $sql = "INSERT INTO 
    consulta (usuario_idusuario, 
    tipo_consulta, 
    local_consulta,
     data_consulta, 
     horario_consulta,
      medico_consulta)
     VALUES ({$idUsuario},
     '{$this->tipo_consulta}',
    '{$this->local_consulta }',
    '{$this->data_consulta}',
     '{$this->horario_consulta}',
     '{$this->medico_consulta}')";

    echo $sql;
     
    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br >New record created successfully";
    } else {
    echo "Error:" . $sql . "<br>" . $GLOBALS['conn']->error;
    }

}

function del($id, $idUsuario){
    //codigo fonte

    $sql = "delete from consulta where idconsulta='". $id."' and usuario_idusuario='{$idUsuario}'";
    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br > record deleted successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
    
    
    }
    
}

function edit($id, $idUsuario){
	$sql = "UPDATE consulta SET tipo_consulta='{$this->tipo_consulta}'
, local_consulta='{$this->local_consulta}'
, data_consulta='{$this->data_consulta}'
, horario_consulta='{$this->horario_consulta}'
, medico_consulta= '{$this->medico_consulta}' WHERE idconsulta={$id} and usuario_idusuario='{$idUsuario}'";

    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br > record updated successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
    
    }
    
}

}

//FECHA CLASSE


?>







