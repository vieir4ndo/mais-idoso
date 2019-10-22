<?php

require_once ('C:/xampp/htdocs/maisidoso/model/conexao.php');

class Usuario{
private $id_usuario="";
private $email_usuario="";
private $senha_usuario="";
private $nome_usuario="";
private $sobrenome_usuario="";
private $genero_usuario="";
private $dataNascimento_usuario="";
private $altura_usuario="";
private $peso_usuario="";
private $tipoSanguineo_usuario="";

//METODOS

function __construct(){
    $this->id_usuario = "";
    $this->nome_usuario = "";
    $this->sobrenome_usuario = "";
    $this->genero_usuario = "";
    $this->dataNascimento_usuario = "";
    $this->altura_usuario = "";
    $this->peso_usuario = "";
    $this->tipoSanguineo_usuario = "";
}
//MÉTODOS GETS E SETS

function getId_usuario(){
    return $this->id_usuario;
}
function getEmail_usuario(){
    return $this->email_usuario;
}
function getNome_usuario(){
    return $this->nome_usuario;
}
function getSobrenome_usuario(){
    return $this->sobrenome_usuario;
}
function getGenero_usuario(){
    return $this->genero_usuario;
}
function getDataNascimento_usuario(){
    return $this->dataNascimento_usuario;
}
function getAltura_usuario(){
    return $this->altura_usuario;
}
function getPeso_usuario(){
    return $this->peso_usuario;
}
function getTipoSanguineo_usuario(){
    return $this->tipoSanguineo_usuario;
}
function setEmail_usuario(){
    return $this->email_usuario;
}
function setNome_usuario($nome){
    $this->nome_usuario = $nome;
}
function setSobrenome_usuario($sobrenome){
    $this->sobrenome_usuario = $sobrenome;
}
function setGenero_usuario($genero){
    $this->genero_usuario = $genero;
}
function setDataNascimento_usuario($dataNascimento){
    $this->dataNascimento_usuario = $dataNascimento;
}
function setAltura_usuario($altura){
    $this->altura_usuario = $altura;
}
function setPeso_usuario($peso){
    $this->peso_usuario = $peso;
}
function setTipoSanguineo_usuario($tipoSanguineo){
    $this->tipoSanguineo_usuario = $tipoSanguineo;
}

//MÉTODOS BANCO
function add($email, $senha, $senhaConfirma){

    $sql = "Select * from usuario where email_usuario ='". $email ."'";
    $consulta = $GLOBALS['conn']->query($sql) or die ($GLOBALS['conn']->error);    
    $consulta = $consulta->fetch_assoc();

    if ($consulta['id_usuario'] == '') {
    if ($senha === $senhaConfirma) {
    //codigo fonte
    //$sql = "SET FOREIGN_KEY_CHECKS=0";
    //$GLOBALS['conn']->query($sql);
    $i=1;
    $sql = 'INSERT INTO usuario (email_usuario, senha_usuario, medicamento_id_medicamento,restricaoalimentar_id_restricaoalimentar, lembrete_id_lembrete, doenca_id_doenca, consulta_id_consulta, atividadefisica_id_atividadefisica )VALUES ("'.$email.'","'.$senha.'","'.$i.'","'.$i.'","'.$i.'","'.$i.'","'.$i.'")';
    echo $sql;
    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br >New record created successfully";
    header('Location: ../views/cadastro/cadastro1.php');
    } else {
    echo "Error:" . $sql . "<br>" . $GLOBALS['conn']->error;
    }
    }else {
        echo "Senhas não batem";
    }
    } else {
        echo 'email cadastrado';
    }
}



function del($id){
    //codigo fonte
    $sql = "delete from usuario where id_usuario='". $id."'";
    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br > record deleted successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
}
}
function editInfoPessoais($id){
    $sql = "UPDATE usuario SET nome_usuario='{$this->nome_usuario}'
    , sobrenome_usuario='{$this->sobrenome_usuario}'
    , genero_usuario='{$this->genero_usuario}'
    , dataNascimento_usuario= '{$this->dataNascimento_usuario}' WHERE id_usuario={$id}";

    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br > record updated successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
    
    }
}
function editInfoMedicas($id){
    $sql = "UPDATE usuario SET altura_usuario='{$this->altura_usuario}'
    , peso_usuario='{$this->peso_usuario}'
    , tipoSanguineo_usuario='{$this->tipoSanguineo_usuario}' WHERE id_usuario={$id}";

    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br > record updated successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
    
    }
}
//FECHA CLASSE
}

$GLOBALS['user'] = new Usuario;

?>