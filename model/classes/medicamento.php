<?php


class Medicamento{
private $id_medicamento="";
private $nome_medicamento="";
private $indicacao_medicamento="";
private $horario_medicamento="";
private $dosagem_medicamento="";


//CONSTRUTOR

function __construct(){
    $this->id_medicamento ="";
    $this->nome_medicamento ="";
    $this->indicacao_medicamento ="";
    $this->horario_medicamento ="";
    $this->dosagem_medicamento ="";
    
}
//MÉTODOS GETS E SETS

function getId_medicamento(){
    return $this->id_medicamento;
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
function add(){
    //codigo fonte
    $sql = "INSERT INTO medicamento (nome_medicamento, indicacao_medicamento, horario_medicamento, dosagem_medicamento) VALUES ('".$this->nome_medicamento."',
    '" . $this->indicacao_medicamento ."', '".$this->horario_medicamento."','".$this->dosagem_medicamento."')";
    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br >New record created successfully";
    } else {
    echo "Error:" . $sql . "<br>" . $GLOBALS['conn']->error;
    }

}

function del($id){
    //codigo fonte

    $sql = "delete from medicamento where id_medicamento='". $id."'";
    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br > record deleted successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
    
    
    }
    
}
function edit($id){
	$sql = "UPDATE medicamento SET nome_medicamento='{$this->nome_medicamento}'
, indicacao_medicamento='{$this->indicacao_medicamento}'
, horario_medicamento='{$this->horario_medicamento}'
, dosagem_medicamento= '{$this->dosagem_medicamento}' WHERE id_medicamento={$id}";

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
