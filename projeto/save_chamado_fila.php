<?php

require_once('./actions/ManterFila.php');
require_once('./dto/Fila.php');

$db_fila = new ManterFila();
$f = new Fila();

$id = $_REQUEST['id'];
$guiche = $_REQUEST['guiche'];

$f->id = $id;
$f->guiche_chamador = $guiche;

print_r($f);
//$db_fila->salvar($f);
//header('Location: filas.php');

