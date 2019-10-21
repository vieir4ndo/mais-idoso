<?php

require_once "classes/usuario.php";
require_once "classes/medicamento.php";
require_once "classes/doenca.php";
require_once "classes/alimentacao.php";

$GLOBALS['user'] = new Usuario;
$GLOBALS['medicamento'] = new Medicamento;


if ($GLOBALS['user']==null) {
$GLOBALS['user'] = new Usuario();
}
if ($GLOBALS['medicamento']==null){
$GLOBALS['medicamento'] = new Medicamento();
}

$GLOBALS['doenca'] = new Doenca();

$GLOBALS['alimentacao'] = new Alimentacao();

?>