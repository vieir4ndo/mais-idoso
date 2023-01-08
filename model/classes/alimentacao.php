<?php

class Alimentacao
{
    private $idrestricaoAlimentar = "";
    private $alimento_restricaoAlimentar = "";
    private $grupo_restricaoAlimentar = "";
    private $razao_restricaoAlimentar = "";

//CONSTRUTOR

    function __construct()
    {
        $this->idrestricaoAlimentar = "";
        $this->alimento_restricaoAlimentar = "";
        $this->grupo_restricaoAlimentar = "";
        $this->razao_restricaoAlimentar = "";

    }

//MÉTODOS GETS E SETS

    function getIdrestricaoAlimentar()
    {
        return $this->idrestricaoAlimentar;
    }

    function getAlimento_restricaoAlimentar()
    {
        return $this->nome_restricaoAlimentar;
    }

    function getGrupo_restricaoAlimentar()
    {
        return $this->grupo_restricaoAlimentar;
    }

    function getRazao_restricaoAlimentar()
    {
        return $this->razao_restricaoAlimentar;
    }


    function setAlimento_restricaoAlimentar($alimento)
    {
        $this->alimento_restricaoAlimentar = $alimento;
    }

    function setGrupo_restricaoAlimentar($grupo)
    {
        $this->grupo_restricaoAlimentar = $grupo;
    }

    function setRazao_restricaoAlimentar($razao)
    {
        $this->razao_restricaoAlimentar = $razao;
    }


//MÉTODOS BANCO
    function add($id)
    {
        //codigo fonte
        $sql = "INSERT INTO restricaoalimentar (alimento_restricaoAlimentar, usuario_idusuario, grupo_restricaoAlimentar, razao_restricaoAlimentar) VALUES 
    ('" . $this->alimento_restricaoAlimentar . "', " . $id . ",
    '" . $this->grupo_restricaoAlimentar . "', '" . $this->razao_restricaoAlimentar . "')";
        if ($GLOBALS['conn']->query($sql) == TRUE) {
            echo "<br >New record created successfully";
        } else {
            echo "Error:" . $sql . "<br>" . $GLOBALS['conn']->error;
        }

    }

    function del($id, $idAlimentacao)
    {
        //codigo fonte
        $sql = "delete from restricaoalimentar where idrestricaoAlimentar=" . $idAlimentacao . " and usuario_idusuario=" . $id;
        if ($GLOBALS['conn']->query($sql) == TRUE) {
            echo "<br > record deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;


        }

    }

    function edit($id, $idAlimentacao)
    {
        $sql = "UPDATE restricaoalimentar SET alimento_restricaoAlimentar='{$this->alimento_restricaoAlimentar}'
, grupo_restricaoAlimentar='{$this->grupo_restricaoAlimentar}'
, razao_restricaoAlimentar='{$this->razao_restricaoAlimentar}'
 WHERE idrestricaoAlimentar={$id} and usuario_idusuario=" . $idAlimentacao;

        if ($GLOBALS['conn']->query($sql) == TRUE) {
            echo "<br > record updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;

        }

    }
}

//FECHA CLASS

?>
