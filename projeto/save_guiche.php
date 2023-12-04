<?php

require_once('./actions/ManterGuiche.php');
require_once('./dto/Guiche.php');

$db_guiche = new ManterGuiche();
$s = new Guiche();

$id = isset($_POST['id']) ? $_POST['id'] : 0;
$numero = $_POST['numero'];
$atendente = $_POST['atendente'];

$s->id = $id;
$s->numero = $numero;
$s->usuario = $atendente;

$db_guiche->salvar($s);
header('Location: guiches.php');

