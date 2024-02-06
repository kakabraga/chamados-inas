<?php

require_once('./actions/ManterModulo.php');
require_once('./dto/Modulo.php');

$db_modulo = new ManterModulo();
$m = new Modulo();

$id = isset($_POST['id']) ? $_POST['id'] : 0;
$nome = $_POST['modulo'];
$icone = isset($_POST['icone']) ? $_POST['icone'] : '';
$link = isset($_POST['link']) ? $_POST['link'] : '';

$m->id = $id;
$m->nome = $nome;
$m->icone = $icone;
$m->link = $link;

$db_modulo->salvar($m);
header('Location: modulos.php');

