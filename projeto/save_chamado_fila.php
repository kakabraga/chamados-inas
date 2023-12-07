<?php

require_once('./actions/ManterFila.php');

$db_fila = new ManterFila();

$op = isset($_REQUEST['op']) ? $_REQUEST['op'] : 'add';
$id = $_REQUEST['id'];
$guiche = $_REQUEST['guiche'];

if($op == 'del'){
    $db_fila->cancelarChamado($id);
} else {
    $db_fila->chamar($id, $guiche);
}

header('Location: gerenciar_atendimento.php');

