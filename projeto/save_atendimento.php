<?php

require_once('./actions/ManterAtendimento.php');
require_once('./actions/ManterFila.php');
require_once('./dto/Atendimento.php');

$db_atendimento = new ManterAtendimento();
$db_fila = new ManterFila();
$a = new Atendimento();

$id = $_POST['id'];
$detalhamento = $_POST['detalhamento'];
$id_fila = $_POST['id_fila'];

$a->id = $id;
$a->detalhamento = $detalhamento;

$db_atendimento->salvarDetalhamento($a);
$db_fila->atender($id_fila);
header('Location: gerenciar_atendimento.php');

