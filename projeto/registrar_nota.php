<?php

require_once('./actions/ManterNota.php');
require_once('./dto/Nota.php');

$db_nota = new ManterNota();
$n = new Nota();

$id_pergunta = $_REQUEST['id'];
$nota = $_REQUEST['nota'];
$ordem = $_REQUEST['ordem'];

$n->pergunta =  $id_pergunta;
$n->nota = $nota;
$ordem++;

$db_nota->salvar($n);

header('Location: painel_pergunta.php?ordem='.$ordem);



