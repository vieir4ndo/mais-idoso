<?php

include_once "../model/conexao.php";

class Alimentacao{
private $id_restricaoAlimentar="";
private $alimento_restricaoAlimentar="";
private $grupo_restricaoAlimentar="";
private $razao_restricaoAlimentar="";



//CONSTRUTOR

function __construct(){
    $this->id_restricaoAlimentar ="";
    $this->alimento_restricaoAlimentar ="";
    $this->grupo_restricaoAlimentar ="";
    $this->razao_restricaoAlimentar ="";
    
}
//MÉTODOS GETS E SETS

function getId_restricaoAlimentar(){
    return $this->id_medicamento;
}
function getAlimento_restricaoAlimentar(){
    return $this->nome_medicamento;
}
function getGrupo_restricaoAlimentar(){
    return $this->indicacao_medicamento;
}
function getRazao_restricaoAlimentar(){
    return $this->horario_medicamento;
}


function setAlimento_restricaoAlimentar($alimento){
     $this->alimento_restricaoAlimentar= $alimento;
}
function setGrupo_restricaoAlimentar($grupo){
    $this->grupo_restricaoAlimentar = $grupo;
}
function setRazao_restricaoAlimentar($razao){
    $this->razao_restricaoAlimentar = $razao;
}



//MÉTODOS BANCO
function add(){
    //codigo fonte
    $sql = "INSERT INTO restricaoAlimentar (alimento_restricaoAlimentar, grupo_restricaoAlimentar, razao_restricaoAlimentar) VALUES ('".
    $this->alimento_restricaoAlimentar."',
    '" . $this->grupo_restricaoAlimentar ."', '".$this->razao_restricaoAlimentar."')";
    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br >New record created successfully";
    } else {
    echo "Error:" . $sql . "<br>" . $GLOBALS['conn']->error;
    }

}

function del($id){
    //codigo fonte

    $sql = "delete from restricaoAlimentar where id_restricaoAlimentar='". $id."'";
    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br > record deleted successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
    
    
    }
    
}
function edit($id){
	$sql = "UPDATE restricaoAlimentar SET alimento_restricaoAlimentar='{$this->alimento_restricaoAlimentar}'
, grupo_restricaoAlimentar='{$this->grupo_restricaoAlimentar}'
, razao_restricaoAlimentar='{$this->razao_restricaoAlimentar}'
 WHERE id_restricaoAlimentar={$id}";

    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br > record updated successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
    
    }
    
}
}
//FECHA CLASSE

$GLOBALS['alimentacao'] = new Alimentacao();


?>
