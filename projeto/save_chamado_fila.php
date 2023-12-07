<?php

require_once('./actions/ManterFila.php');

$db_fila = new ManterFila();

$id = $_REQUEST['id'];
$guiche = $_REQUEST['guiche'];

//print_r($f);
//echo json_encode($f);
$db_fila->chamar($id, $guiche);
header('Location: gerenciar_atendimento.php');

