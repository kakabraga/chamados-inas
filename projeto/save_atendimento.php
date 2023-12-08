<?php

require_once('./actions/ManterAtendimento.php');
require_once('./dto/Atendimento.php');

$db_guiche = new ManterAtendimento();
$a = new Atendimento();

$id = $_POST['id'];
$detalhamento = $_POST['detalhamento'];

$a->id = $id;
$a->detalhamento = $detalhamento;

$db_guiche->salvarDetalhamento($a);
header('Location: gerenciar_atendimento.php');

