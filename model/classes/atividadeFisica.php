<?php

class atividadefisica
{
    private $idatividadefisica = "";
    private $atividade_atividadefisica = "";
    private $duracao_atividadefisica = "";
    private $data_atividadefisica = "";


//CONSTRUTOR

    function __construct()
    {
        $this->idatividadefisica = "";
        $this->atividade_atividadefisica = "";
        $this->duracao_atividadefisica = "";
        $this->data_atividadefisica = "";

    }

//MÉTODOS GETS E SETS

    function getidatividadefisica()
    {
        return $this->idatividadefisica;
    }

    function getatividade_atividadefisica()
    {
        return $this->atividade_atividadefisica;
    }

    function getduracao_atividadefisica()
    {
        return $this->duracao_atividadefisica;
    }

    function getdata_atividadefisica()
    {
        return $this->data_atividadefisica;
    }

    function setatividade_atividadefisica($nome)
    {
        $this->atividade_atividadefisica = $nome;
    }

    function setduracao_atividadefisica($duracao)
    {
        $this->duracao_atividadefisica = $duracao;
    }

    function setdata_atividadefisica($data)
    {
        $this->data_atividadefisica = $data;
    }


//MÉTODOS BANCO
    function add($idUsuario)
    {
        //codigo fonte

        $sql = "INSERT INTO atividadefisica (atividade_atividadefisica, usuario_idusuario, 
    duracao_atividadefisica, data_atividadefisica) VALUES ('" . $this->atividade_atividadefisica . "',
    '{$idUsuario}', '" . $this->duracao_atividadefisica . "','" . $this->data_atividadefisica . "')";
        if ($GLOBALS['conn']->query($sql) == TRUE) {
            echo "<br >New record created successfully";
        } else {
            echo "Error:" . $sql . "<br>" . $GLOBALS['conn']->error;
        }

    }

    function del($id, $idUsuario)
    {
        //codigo fonte
        $sql = "delete from atividadefisica where idatividadefisica={$id} and usuario_idusuario={$idUsuario}";
        if ($GLOBALS['conn']->query($sql) == TRUE) {
            echo "<br > record deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;


        }

    }

    function edit($id, $idUsuario)
    {
        $sql = "UPDATE atividadefisica SET atividade_atividadefisica='{$this->atividade_atividadefisica}'
, duracao_atividadefisica='{$this->duracao_atividadefisica}'
, data_atividadefisica= '{$this->data_atividadefisica}' WHERE idatividadefisica={$id} and usuario_idusuario='{$idUsuario}'";

        if ($GLOBALS['conn']->query($sql) == TRUE) {
            echo "<br > record updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;

        }

    }

}

//FECHA CLASSE


?>
