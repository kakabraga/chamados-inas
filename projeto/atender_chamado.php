<?php

require_once('./actions/ManterChamado.php');
require_once('./dto/Chamado.php');

$db_chamado = new ManterChamado();
$c = new Chamado();

$id = isset($_POST['id']) ? $_POST['id'] : 0;
$categoria = isset($_POST['categoria']) ? $_POST['categoria'] : '';

$c->id = $id;
$c->categoria = $categoria;

$db_chamado->atender($c);
header('Location: chamados.php');

