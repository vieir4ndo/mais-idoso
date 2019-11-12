<?php
require_once ('C:/xampp/htdocs/maisidoso/model/conexao.php');

class Doenca{
    
    private $id_doenca="";
    private $nome_doenca="";
    private $tipo_doenca="";
    private $sintomas_doenca="";
 
    //CONSTRUTOR

function __construct(){
    $this->id_doenca ="";
    $this->nome_doenca="";
    $this->tipo_doenca ="";
    $this->sintomas_doenca ="";
}
//MÉTODOS GETS E SETS

function getId_doenca(){
    return $this->id_doenca;
}
function getNome_doenca(){
    return $this->nome_doenca;
}
function getTipo_doenca(){
    return $this->tipo_doenca;
}
function getSintomas_doenca(){
    return $this->sintomas_doenca;
}
function setNome_doenca($nome){
    $this->nome_doenca= $nome;
}
function setTipo_doenca($tipo){
     $this->tipo_doenca= $tipo;
}
function setSintomas_doenca($sintomas){
    $this->sintomas_doenca = $sintomas;
}

//MÉTODOS BANCO
function add($idUsuario){
    //codigo fonte
    $sql = "INSERT INTO doenca (nome_doenca, tipo_doenca, sintomas_doenca) VALUES ('".$this->nome_doenca."',
    '".$this->tipo_doenca."',
'" . $this->sintomas_doenca ."') where usuario_idusuario='{$idUsuario}'";
    echo $sql;
    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br >New record created successfully";
    } else {
    echo "Error:" . $sql . "<br>" . $GLOBALS['conn']->error;
    }
}

function del($id, $idUsuario){
    //codigo fonte
    $sql = "delete from doenca where id_doenca='". $id."' AND usuario_idusuario='{$idUsuario}'";
    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br > record deleted successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
    }
}
function edit($id, $idUsuario){
	$sql = "UPDATE doenca SET nome_doenca='{$this->nome_doenca}'
, tipo_doenca='{$this->tipo_doenca}'
, sintomas_doenca='{$this->sintomas_doenca}'  WHERE id_doenca={$id}  AND usuario_idusuario='{$idUsuario}'";
    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br > record updated successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
    }
}
}

//FECHA CLASSE


$GLOBALS['doenca'] = new Doenca();
?>
